<?php 
/* 
 * 直接输出数据表和分页信息 
 * 在新建对象时需要的变量：$query(从数据表中获取记录数的sql语句)，$page(当前页码)，$maxline(每页几行)) 
 * 1、showpage方法：如果上面创建对象的$query正确，直接调用，即可输出分页信息 
 * 2、showtable方法：需要的变量：$query(从数据库读取记录的SQL语句，不要加Limit，因为在方法中已经添加) 
 *   直接输出<tr><td></td></tr>的表格，所以只需在前后加上<table></table>就是完整的表格 
 * 3、showresult方法：根据提交的$query中的SQL，直接将$result资源返回，表格可以自己定义 
 * 示例： 
//获取当前页，并定义每页最大行 
$page=1; 
$maxline="10"; 
if(!empty($_GET["page"])){ 
 $page=$_GET["page"]; 
} 
//定义计算表内数据总数的SQL语句，这里必须和下面的$query是同一个表和条件，创建对象，输出页码和表格 
$query="select count(*) from mailbox"; 
$a=new PageList($query, $maxline, $page); 
$a->showpage(); 
//这里显示列表，需要和上面的SQL语句一样的条件 
$query="select username,name,quota,created,modified,active from mailbox order by created desc"; 
echo "<table width='800' border='0' cellspacing='0' cellpadding='0' class='pagelist'>"; 
$a->showtable($query); 
echo "</table>"; 
 * */ 
class PageList{ 
 private $link; 
 private $result; 
 private $maxline; 
 private $page=1;  
 private $startline=0; 
 private $countline; 
 public  $countpage; 
 private $prevpage; 
 private $nextpage; 
 //数据库联接,需要修改为您自己的地址 
 
 private $dbhost="112.124.44.162"; 
 private $dbuser="stat"; 
 private $dbpasswd="stat2014"; 
 private $dbtable="mypage"; 
/* 
 * 构造函数中建立数据库联接 
 * 1、数据库连接的4个参数设置为常量 记录在config.php页面中 
 * 2、连接数据库，并选择数据库 
 * 3、设置数据库执行的编码方式为utf8 
 * 4、将接收到的$maxline，$page两个变量赋值给类属性，成为该类通用属性 
 *   （其中$query是count(*)的SQL，和下面方法中的query是不一样的） 
 * 5、根据新建对象时递交的$query语句，对数据库执行查询，将得到的总记录数赋值到类属性中$this->countline 
 *   将总记录数/每页行数，再用ceil函数高位取整，得到总页数并赋值到类属性中$this->countpage 
 * 6、根据递交的当前页码$page,算出前后页的数字$this->prevpage和$this->nextpage 
 *  还有必须算出数据库读取的起始行$this->startline 
 *  这里分3种情况，page<2 ,page=最后一页，page>1(这个情况可以不判断，直接用else)   
 * */ 
 public function __construct($query,$maxline,$page){ 
  //print_r($this->dbhost."-".$dbuser."-".$dbpasswd);
  @$this->link=mysql_connect($this->dbhost,$this->dbuser,$this->dbpasswd) or die($this->feedback='System Error ,Please contect admin1'); 
  @mysql_select_db($this->dbtable,$this->link) or die($this->feedback='System Error ,Please contect admin2'); 
  @mysql_query('set names utf8'); 
  $this->maxline=$maxline; 
   
  //读取行数，并将结果返回$coutline 
  $this->result=mysql_query($query) or die($this->feedback='System Error ,Please contect admin3'); 
  if($count=mysql_fetch_row($this->result)){ 
   //intval将字符串转为int，可以不转，但这样的程序更健康 
   $this->countline = intval($count[0]); 
   $this->countpage = ceil($this->countline/$maxline); 
  } 
  //判断递交的$page是否大于总页数 
  if($page<=$this->countpage){ 
   $this->page=$page; 
  } 
   
  if($this->page<2){ 
   $this->prevpage=0; 
   $this->nextpage=2; 
   $this->startline= 0; 
  }elseif($this->page==$this->countpage){ 
   $this->prevpage=$this->page-1; 
   $this->nextpage=0; 
   $this->startline= ($this->page-1)*$this->maxline; 
  }else{ 
   $this->prevpage=$this->page-1; 
   $this->nextpage=$this->page+1; 
   $this->startline= ($this->page-1)*$this->maxline; 
  } 
 } 
/* 
 * 析构函数 
 * 释放资源，关闭数据库连接 
 * */ 
 public function __destruct(){ 
  mysql_free_result($this->result); 
  mysql_close($this->link); 
  exit(); 
 } 
  
/* 
 * 输出分页信息 
 * */ 
 public function showpage(){ 
  //$listnum显示上下页中间的数字位数，一定要偶数阿！否则不能被2除 
  $listnum=10; 
  echo $this->countline." Items, ".$this->countpage." Pages  "; 
  if($this->prevpage==0){ 
   echo "&lt;&lt;Prev "; 
  }else{ 
   echo "<a class='btn' href=?page=".$this->prevpage.">&lt;&lt;Prev</a> "; 
  } 
   
  if($this->countpage<$listnum){          //判断总页数是否小于$listnum 
   $page_start=1; 
   $page_end=$this->countpage; 
  }elseif($this->page<$listnum/2){          //判断当前页是否小于$listnum的一半 
   $page_start=1; 
   $page_end=$listnum; 
  }elseif($this->page>$this->countpage-($listnum/2)){  //判断当前页是否是最后几页了 
   $page_start=$this->countpage-($listnum-1); 
   $page_end=$this->countpage; 
  }else{                    //如果上面的条件都不符合,那当前也正在中间 
   $page_start=$this->page-($listnum/2-1); 
   $page_end=$this->page+($listnum/2); 
  } 
   
  for($i=$page_start;$i<=$page_end;$i++){       //根据上面判断的start和end页码,循环输出之间的页码 
   if($i==$this->page){ 
    echo "<b>".$i."</b>  "; 
   }else{ 
    echo "<a class='btn' href=?page=".$i.">".$i."</a>  "; 
   } 
  } 
   
  if ($this->nextpage==0){ 
   echo " Next&gt;&gt;"; 
  }else{ 
   echo " <a class='btn' href=?page=".$this->nextpage.">Next&gt;&gt;</a> "; 
  } 
   
 } 
/* 
 * 根据sql语句读取数据库中的数据,然后列成表单输出 
 * 需要的变量：$field(字段)，$table(表名)，$startline(开始行)，$maxline(每页显示行数) 
 * 输出从表格的tr开始,从tr结束,所以在使用这个方法前后要加table的标签 
 * */  
 public function showtable($query){ 
  $query=$query." LIMIT ".$this->startline.",".$this->maxline; 
  $result = mysql_query($query) or die($this->feedback='System Error ,Please contect admin'); 
  //行循环开始,定义一个$i变量，用来显示行号，每次执行一条while语句，指针就指向下一条数据 
  $i=0; 
  while ($fetch = mysql_fetch_assoc($result)){ 
   $i++; 
   echo "<tr><td>".$i."</td>"; 
   //列循环开始，因为通过while后，$fetch已经是个数组，所以通过foreach遍历数组即可 
   foreach ($fetch as $key=>$value){ 
    if ($key=="time") {$value=date('y-m-d H:i:s',$value);};
    echo "<td field='$key'>".$value."</td>"; 
   } 
   echo "</tr>"; 
  } 
 } 

  public function showdiv($query){ 
  $query=$query." LIMIT ".$this->startline.",".$this->maxline; 
  $result = mysql_query($query) or die($this->feedback='System Error ,Please contect admin'); 
  //行循环开始,定义一个$i变量，用来显示行号，每次执行一条while语句，指针就指向下一条数据 
  $i=0; 
  
  while ($fetch = mysql_fetch_assoc($result)){ 
   $i++; 
   echo '<div class="record xcontainer-fluid" id="id'.$fetch['id'].'">';
   //列循环开始，因为通过while后，$fetch已经是个数组，所以通过foreach遍历数组即可 
   
   foreach ($fetch as $key=>$value){ 
    
      if ($key=="time") {
        $value=date('y-m-d H:i:s',$value);
        $d_time=$value;
      }elseif($key=="ip"){
        $d_ip=$value;
      }elseif($key=="fromaddr"){
        $d_fromaddr=$value;
      }elseif($key=="ua"){
        $d_ua=$value;
      }elseif($key=="id"){
        $d_id=$value;
      }elseif($key=="dtl"){
        $d_dtl=$value;
      }

    }

    echo '<div class="row-fluid show-grid">';
    echo "<div class='span3' field='ip'><span class='ipaddr'>".$d_ip."</span><span class='city'></span></div>";  
    echo "<div class='span7' field='fromaddr'>".$d_fromaddr."</div>";
    echo "<div class='span2' field='time'>".$d_time."</div>"; 
    echo "</div>"; 
    echo '<div class="row-fluid show-grid">';
    echo "<div class='span12 well' field='ua'>".$d_ua."</div>"; 
    echo "</div>"; 
    if ($d_dtl<>0) {
      
      echo '<div class="row-fluid show-grid">';
      echo '<button class="btn fetchdata" type="button">详细访问数据'.$d_dtl.'条</button>';
      echo "<div class='span12 detail thehide' field='detail'></div>"; 
      echo "</div>"; 
    }
   echo "</div><hr class='bs-docs-separator'>"; 
  } 
 } 
/* 
 * 这个方法是将资源传出，表格在外面自定义样式 
 * */ 
 public function showresult($query){ 
  $result = mysql_query($query) or die($this->feedback='System Error ,Please contect admin'); 
  return $result; 
 } 
} 
?> 

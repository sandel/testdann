<?php
	include_once('./class.Page.php');

	$page=1; 
	$maxline="50"; 
	if(!empty($_GET["page"])){ 
	 $page=$_GET["page"]; 
	} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html>
<head>
	<title>statistic-golden</title>
	<link href="http://z.zhuanyeke.cn/Public/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<style>
		.thehide {display: none !important;}
	</style>
	<script src="http://z.zhuanyeke.cn/Public/Js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("div[field='fromaddr']").each(function(i,c){
				var urll=$(this).text(),keyword="";
				
				if(urll.indexOf('?')>0 && urll.indexOf('wd=')>0){
					//var matchy=$("td[field='fromaddr']").eq(i).text().split("?")[1].match(/wd=(.*)&/)
					var matchy=$("div[field='fromaddr']").eq(i).text().split("?")[1].match(/wd=(.*)&/)
					if(matchy){
						//keyword=$("td[field='fromaddr']").eq(i).text().split("?")[1].match(/wd=(.*)&/)[1].split("&")[0];		
						keyword=matchy[1].split("&")[0];		

						if(decodeURI(keyword)){
							keyword=decodeURI(keyword);
						}
						$(this).html("<a href='"+$(this).text()+"'>"+$(this).text().substring(0,60)+"</a><br/><code>"+keyword+"</code>");
					}else{
						$(this).html("<a href='"+$(this).text()+"'>"+$(this).text().substring(0,60)+"</a>");
					}
					
					
				}else{
					$(this).html("<a href='"+$(this).text()+"'>"+$(this).text().substring(0,80)+"</a>");
				}

				
			});

			$(".city").each(function(i,c){
				seekip($(this).parent().find(".ipaddr").text(),$(this).parent().find(".city"));
			})
			
			
		})

 		
 		function seekip(ip,jqobj){
	 		$.ajax({
	 			url: "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip="+ ip,
	 			dataType:"script",
				async:true,
				cache:true,
				success: function(){
					jqobj.text("["+remote_ip_info.city+"]");
				}
			});
		}

 		function fetchdata(){
	 		$.ajax({
	 			url: "writetofr.php",
	 			dataType:"json",
				async:true,
				cache:true,
				success: function(){
					jqobj.text("["+remote_ip_info.city+"]");
				}
			});
		}


	</script>
	<style>
		td {word-break: break-all;widthx: 150px;font-size: 12px;}
		
	</style>
</head>
<hr class='bs-docs-separator'>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">

<?
	$qry="select count(*) from `eagle_fromip`";
	$pg=new PageList($qry,$maxline,$page);
	$pg->showpage();
?>

		</div>
	</div>
</div>	
<hr class='bs-docs-separator'>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
<?
	$qry="
		select a.`id`,a.`ip`,a.`fromaddr`,a.`time`,a.`ua`,count(b.id) as dtl
		from `eagle_fromip` as a
		LEFT JOIN `eagle_fromip_click` as b
		on a.id=b.idx 
		GROUP BY a.id
		";
	echo "<table  class='table'>"; 
	//echo "<tr><th width=3%>id</th><th width=13%>ip</th><th width=70%>from</th><th width=14%>time</th></tr>";
	$pg->showdiv($qry); 
	echo "</table>"

?>
		</div>
	</div>
</div>	

</body>
</html>
<?php
	include_once('./class.MySQL.php');
	define("MYSQL_NAME", "mypage");
	define("MYSQL_USER", "stat");
	define("MYSQL_PASS", "stat2014");
	define("MYSQL_HOST", "112.124.44.162");
	$sql=new MySQL(MYSQL_NAME, MYSQL_USER, MYSQL_PASS, MYSQL_HOST);
	$visitor= array(
		'ip' => $_SERVER['REMOTE_ADDR'],
		'fromaddr' => $_SERVER['HTTP_REFERER'], 
		'time' => strtotime("now"),
		'ua' => $_SERVER['HTTP_USER_AGENT']
		);
	$sql-> Insert($visitor,"eagle_fromip");
	$lastid = $sql-> LastInsertID();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html>
<head>
	<title>专业课活动页面-金鹰计划</title>
</head>

	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="专业课活动页面-金鹰计划" />
    <meta name="keywords" content="专业课活动页面-金鹰计划" />
      
    <link href="http://z.zhuanyeke.cn/Public/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="http://z.zhuanyeke.cn/Public/Css/person_center.css" />
	<link rel="stylesheet" href="http://z.zhuanyeke.cn/Public/Css/common.css">

	<script src="http://z.zhuanyeke.cn/Public/Js/jquery.js"></script>
    <script src="http://z.zhuanyeke.cn/Public/Js/common.js"></script>
    <script src="http://z.zhuanyeke.cn/Public/bootstrap/js/bootstrap.js"></script>

    <!--lightbox-->
    <script src="http://z.zhuanyeke.cn/Public/Js/artDialog/jquery.artDialog.js?skin=default"></script>

        
    
	<script type="text/javascript">
		// referece http://doc.thinkphp.cn/manual/template_replace.html
		var PUB="http://z.zhuanyeke.cn/Public";
		var TPL="/Home/Tpl/";
		var ROT=""
		var APP="";
		var ACT="/promoevent/golden";
		var URL="/promoevent";
	</script> 
	<script type="text/javascript">

		$(document).ready(function() {
			// init
			
		})


	</script>

	<style type="text/css">

	</style>

<body>
 
	<style>
		body {background:#ffffff url("http://z.zhuanyeke.cn/Public/Images/event/golden/bodybg.jpg") 0 -140px repeat-x;border: 0px;}
		.rltv {position: relative;}
		.abs {position: absolute;}
		.hide {display:none;}
		.pointer {cursor:pointer;}
 		#g01 {height:230px;width:1030px;margin:0 auto;background: url("http://z.zhuanyeke.cn/Public/Images/event/golden/g01.jpg") 0 0 no-repeat;}
 		#g011 {left:77px;top:174px;width:100px;height:30px; }
 		#g012 {left:191px;top:174px;width:110px;height:30px; }
 		#g013 {left:305px;top:174px;width:100px;height:30px; }
 		#g014 {left:405px;top:174px;width:100px;height:30px; }
 		#g015 {left:505px;top:174px;width:80px;height:30px; }
 		#g016 {left:592px;top:174px;width:80px;height:30px; }
 		#g017 {left:677px;top:174px;width:80px;height:30px; }
 		#g018 {left:761px;top:174px;width:80px;height:30px; }
 		#g019 {left:848px;top:174px;width:80px;height:30px; }
 		#logo {left: 78px;top: 17px;width: 140px;height: 50px; }

 		/* 02 */
 		#g02 {height:450px;width:1030px;margin:0 auto;background: url("http://z.zhuanyeke.cn/Public/Images/event/golden/g02.jpg") 0 0 no-repeat;}
 		#g02links a {cursor:pointer;}
 		#g021 {left:670px;top:64px;width:260px;height:30px; }
 		#g022 {left:670px;top:126px;width:260px;height:30px; }
 		#g023 {left:670px;top:184px;width:260px;height:30px; }
 		#g024 {left:670px;top:244px;width:260px;height:30px; }
 		#g025 {left:670px;top:304px;width:260px;height:30px; }
 		#g026 {left:670px;top:364px;width:260px;height:30px; }
 		#g02demo {left:110px;top:30px;height: 400px;width:480px;overflow: hidden;}
 		#g02demo img {}

 		/* 03 */
 		#g03 {height:260px;width:1030px;margin:0 auto;background: url("http://z.zhuanyeke.cn/Public/Images/event/golden/g03.jpg") 0 0 no-repeat;}

 		/* 04 */
 		#g04 {height:460px;width:1030px;margin:0 auto;}

 		/* 05 */
 		#g05 {height:470px;width:1030px;margin:0 auto;}

 		/* 06 */
 		#g06 {height:470px;width:1030px;margin:0 auto;}

 		/* 07 */
 		#g07 {height:590px;width:1030px;margin:0 auto;}

 		/* 08 */
 		#g08 {height:370px;width:1030px;margin:0 auto;}
 		#g081 {left:802px;top:0px;width:144px;height:52px;}
 		#g082 {left:886px;top:191px;width:67px;height:34px;}
 		#g083 {left:886px;top:242px;width:67px;height:34px;}
 		#g084 {left:886px;top:303px;width:67px;height:34px;} 		
 		#g085 {left: 648px;color: white;font-size: 60px;top: 68px;letter-spacing: 7px;font-weight: bold;line-height: 60px;}

 		/* 09 */
 		#g09 {height:460px;width:1030px;margin:0 auto;}
 		#g0901 {left:196px;top:8px;width:121px;height:53px;}
 		#g0902 {left:196px;top:60px;width:121px;height:53px;}
 		#g0903 {left:196px;top:120px;width:121px;height:53px;}
 		#g0904 {left:317px;top:120px;width:121px;height:53px;}
 		#g0905 {left:196px;top:175px;width:121px;height:53px;}
 		#g0906 {left:317px;top:175px;width:121px;height:53px;}
 		#g0907 {left:196px;top:232px;width:121px;height:53px;}
 		#g0908 {left:317px;top:232px;width:121px;height:53px;}
 		#g0909 {left:440px;top:232px;width:121px;height:53px;}
 		#g0910 {left:196px;top:288px;width:121px;height:53px;}
 		#g0911 {left:317px;top:288px;width:121px;height:53px;}
 		#g0912 {left:440px;top:288px;width:121px;height:53px;}
 		#g0913 {left:563px;top:288px;width:121px;height:53px;}
 		#g0914 {left:196px;top:343px;width:121px;height:53px;}
 		#g0915 {left:317px;top:343px;width:121px;height:53px;}
 		#g0916 {left:440px;top:343px;width:121px;height:53px;}
 		#g0917 {left:563px;top:343px;width:121px;height:53px;}
 		#g0918 {left:196px;top:398px;width:121px;height:53px;}
 		#g0919 {left:317px;top:398px;width:121px;height:53px;}
 		#g0920 {left:440px;top:398px;width:121px;height:53px;}
 		#g0921 {left:563px;top:398px;width:121px;height:53px;}
 		#g0922 {left:686px;top:398px;width:121px;height:53px;}
 		#g0923 {left:809px;top:398px;width:121px;height:53px;}
 		#g09txtdemos {left:451px;top:10px;width:470px;heightx:200px;background:#ca820c;color:white;
 			-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 15px;padding:10px;}

 		/* 10 */
 		#g10 {height:430px;width:1030px;margin:0 auto;}
 		#g101 {left:802px;top:0px;width:144px;height:52px;}

 		/* 11 */
 		#g11 {height:300px;width:1030px;margin:0 auto;}
 		#g111 {left:82px;top:8px;width:194px;height:232px;}
 		#g112 {left:305px;top:8px;width:194px;height:232px;}
 		#g113 {left:526px;top:8px;width:194px;height:232px;}
 		#g114 {left:757px;top:8px;width:194px;height:232px;}

 		/* 12 */
 		#g12 {height:900px;width:1030px;margin:0 auto;}
 		#g121 {left:802px;top:8px;width:144px;height:52px;}
 		#g122 {left:88px;top:68px;width:844px;height:176px;}
 		#g12demo {left:70px;top:243px;width:890px;height:480px;overflow: hidden;}
 		#g12demonav {left:130px;top:725px;width:752px;height:160px;overflow:hidden;}
 		#g12demonavw {width:10000px;}
 		#g12demonav img {border:2px solid #666;margin:10px 7px;padding:0px;width:170px;}
 		#g12prev {left:84px;top:787px;width:40px;height:48px;}
 		#g12next {left:893px;top:787px;width:40px;height:48px;}

 		/* 13 */
 		#g13 {height:490px;width:1030px;margin:0 auto;}

 		/* 14 */
 		#g14 {height:370px;width:1030px;margin:0 auto;}
 		#g141 {left:802px;top:12px;width:144px;height:52px;}
 		#g141nav {left:115px;top:68px;width:788px;height:300px;overflow:hidden; }
 		#g141navw {width:10000px;}
 		#g141navw .teacher {float:left;width: 198px;height: 295px;font-size: 12px;}
 		#g141navw .teacher .tch_intro {bottom: 90px;background: #f8f2ee;border: 1px solid rgb(129, 118, 118);padding: 5px;height: 110px;overflow: auto;width: 172px;left: 7px;opacity: 0.8;}
 		#g141navw .teacher .tch_name {font-size: 14px;font-weight: bold;}
 		#g141nav img {border:2px solid #666;margin:10px 7px;padding:0px;}
 		#g14prev {left:75px;top:153px;width:40px;height:48px;}
 		#g14next {left:917px;top:153px;width:40px;height:48px;}

 		/* 15 */
 		#g15 {height:430px;width:1030px;margin:0 auto;}
 		#g151 {left:802px;top:14px;width:144px;height:52px;}
 		#g15nav {left:106px;top:79px;width:821px;height:320px;overflow:hidden;}
 		#g15navw {left:0px;top:0px;width:10000px;height:320px;}
 		#g15navw img {display: block;float:left;margin:0 5px;}
 		#g15prev {left:71px;top:160px;width:40px;height:48px;}
 		#g15next {left:921px;top:160px;width:40px;height:48px;}

 		/* 16 */
 		#g16 {height:720px;width:1030px;margin:0 auto;}

 		/* 17 */
 		#g17 {height:820px;width:1030px;margin:0 auto;}

 		/* 18 */
 		#g18 {height:380px;width:1030px;margin:0 auto;}
 		#g181 {left:802px;top:14px;width:144px;height:52px;}
 		#g182 {left:4px;top:0px;width:292px;height:52px;}
 		#g183 {left:301px;top:0px;width:292px;height:52px;}
 		#g184 {left:92px;top:80px;width:600px;height:290px;background: url("http://z.zhuanyeke.cn/Public/Images/event/golden/g182demo.jpg");}

 		/* 19 */
 		#g19 {height:640px;width:1030px;margin:0 auto;background: url("http://z.zhuanyeke.cn/Public/Images/event/golden/g19.jpg") 0 0 no-repeat;}
 		#g191 {left:802px;top:14px;width:144px;height:52px;}

 		/* 20 */
 		#g20 {height:520px;width:1030px;margin:0 auto;background: url("http://z.zhuanyeke.cn/Public/Images/event/golden/g20.jpg") 0 0 no-repeat;}
 		#g201 {left:802px;top:9px;width:144px;height:52px;}

 		/* 21 */
 		#g21 {height:110px;width:1030px;margin:0 auto;background: url("http://z.zhuanyeke.cn/Public/Images/event/golden/g21.jpg") 0 0 no-repeat;}

 		#fixright { position: fixed;bottom: 20px;right:7px;height: 140px;}
 		#totop {width:60px;height:40px;background:#f8f8f8;border:1px solid #beccbf;text-align: center;font-size: 12px;line-height:40px;color:#476d62;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; }
 		#wx {width:94px;height:131px;padding:10px;border:1px solid #b5bfc0;position:fixed;left:0px;top:40%;
 			-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;background: #f8faf9;}
 		.sqiao {cursor: pointer;}

	</style>
	<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.3.js"></script>
	<script src="http://z.zhuanyeke.cn/Public/Js/jquery.lazyload.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			//init
			init();
			var visitorid=<? echo $lastid; ?>;
			//
			function init(){
				//ajaxAction("listuniv");
				
			}

			$(window).unload(function(){
					$.ajax({
						url:"writetodb.php",
						dataType:"json",
						type:"post",
						data:{id:visitorid,ele:"shutdown",time:Number(Date.now())},
						complete:function(data){
							//console.log(data);
						}
					});  				
			});

			$("#g15navw img").lazyload();
			$("#g085").text(Math.floor((new Date('2014/6/31').getTime()-(new Date()).getTime())/(24*60*60*1000)));

			//
			$("#g02links>a").bind({
				"mouseover":function(){
					idx=$(this).index();
					//console.log(idx);
					$("#g02demo>img").eq(idx).show().siblings().hide();
				}
			})

			//
			$(".sqiao").bind({
				"click":function(){
					$.ajax({
						url:"writetodb.php",
						dataType:"json",
						type:"post",
						data:{id:visitorid,ele:$(this).attr("id"),time:Number(Date.now())},
						complete:function(data){
							//console.log(data);
						}
					});
					$("#bridgehead").trigger("click");	
				}
			})

			$("#g12next").bind({
				"click":function(){
					var itemwnum=4; //window items
					var itemwidth=188;
					var itemcnum=$("#g12demonavw>img").length; //cur items
					var itemvnum=itemcnum-itemwnum; //virtual item num

					if($("#g12demonavw").position().left/itemwidth==-itemvnum){
					}else{	
						$("#g12demonavw").animate({"left":$("#g12demonavw").position().left-188},0);
					}
				}
			})

			$("#g12prev").bind({
				"click":function(){
					var itemwnum=4; //window items
					var itemwidth=188;
					var itemcnum=$("#g12demonavw>img").length; //cur items
					var itemvnum=itemcnum-itemwnum; //virtual item num

					if($("#g12demonavw").position().left>=0){
						$("#g12demonavw").css({left:0});
					}else{	
						$("#g12demonavw").animate({"left":$("#g12demonavw").position().left+188},0);
					}
				}
			})

			$("#g12demonavw>img").bind({
				"mouseover":function(){
					var idx=$(this).index();
					$("#g12demo>img").eq(idx).show().siblings().hide();
				}
			})

			$("#g14next").bind({
				"click":function(){
					var itemwnum=4; //window items
					var itemwidth=198;
					var itemcnum=$("#g141navw>.teacher").length; //cur items
					var itemvnum=itemcnum-itemwnum; //virtual item num
					$("#g141nav img").lazyload();

					if($("#g141navw").position().left/itemwidth==-itemvnum){
					}else{	
						$("#g141navw").animate({"left":$("#g141navw").position().left-198},0);
					}
				}
			})

			$("#g14prev").bind({
				"click":function(){
					var itemwnum=4; //window items
					var itemwidth=198;
					var itemcnum=$("#g141navw>.teacher").length; //cur items
					var itemvnum=itemcnum-itemwnum; //virtual item num

					if($("#g141navw").position().left>=0){
						$("#g141navw").css({left:0});
					}else{	
						$("#g141navw").animate({"left":$("#g141navw").position().left+198},0);
					}
				}
			})

			$("#g15next").bind({
				"click":function(){
					var itemwnum=4; //window items
					var itemwidth=205;
					var itemcnum=$("#g15navw>img").length; //cur items
					var itemvnum=itemcnum-itemwnum; //virtual item num
					$("#g15navw img").lazyload();

					if($("#g15navw").position().left/itemwidth==-itemvnum){
					}else{	
						$("#g15navw").animate({"left":$("#g15navw").position().left-205},0);
					}
				}
			})

			$("#g15prev").bind({
				"click":function(){
					var itemwnum=4; //window items
					var itemwidth=205;
					var itemcnum=$("#g15navw>img").length; //cur items
					var itemvnum=itemcnum-itemwnum; //virtual item num
					$("#g15navw img").lazyload();

					if($("#g15navw").position().left>=0){
						$("#g15navw").css({left:0});
					}else{	
						$("#g15navw").animate({"left":$("#g15navw").position().left+205},0);
					}
				}
			})

			$("#g182").bind({
				"mouseover":function(){
					$("#g184").css({"background":"url('"+PUB+"/Images/event/golden/g182demo.jpg')"});
				}
			})

			$("#g183").bind({
				"mouseover":function(){
					$("#g184").css({"background":"url('"+PUB+"/Images/event/golden/g183demo.jpg')"});
				}
			})

			$("#g09bricks>a").bind({
				"mouseover":function(){
					var idx=$(this).index();
					$("#g09txtdemos").show();
					$("#g09txtdemos>p").eq(idx).show().siblings().hide();
				},
				"mouseout":function(){
					$("#g09txtdemos").hide();
				},
				"click":function(){
					$("#bridgehead").trigger("click");	
				}
			})

			$("#g15navw>img").bind({

			})

			$(".teacher").bind({
				"mouseover":function(){
					$(this).find(".tch_intro").show()
				},
				"mouseout":function(){
					$(this).find(".tch_intro").hide()
				}
			})

			$("#totop").bind({
				"click":function(){
					window.scroll(0,0);
				}
			})

		})

	</script>

<body>

	<div id="g01" class="rltv">
		<a id="g011" title="金鹰计划" class="abs" href="#"></a>
		<a id="g012" title="课程服务体系" class="abs" href="#g08"></a>
		<a id="g013" title="免费公开课" class="abs" href="#g10"></a>
		<a id="g014" title="免费体验营" class="abs" href="#g12"></a>
		<a id="g015" title="名师团队"  class="abs" href="#g14"></a>
		<a id="g016" title="成功学员"  class="abs" href="#g15"></a>
		<a id="g017" title="专业辅导"  class="abs" href="#g18"></a>
		<a id="g018" title="战略合作"  class="abs" href="#g19"></a>
		<a id="g019" title="热心公益"  class="abs" href="#g20"></a>
		<a id="logo" class="abs" href="http://www.zhuanyeke.cn" target="_blank"></a>
	</div>
	<div id="g02" class="rltv">
		<div id="g02links">
			<a id="g021" class="abs" title="1994-2013年考研人数变化"></a>
			<a id="g022" class="abs" title="1994-2013年考研录取人数变化"></a>
			<a id="g023" class="abs" title="04-13年A类地区国家线变化情况"></a>
			<a id="g024" class="abs" title="04-13年B类地区国家线变化情况"></a>
			<a id="g025" class="abs" title="部分考区最高分变化情况"></a>
			<!--<a id="g026" class="abs" title="部分考区最高分变化情况"></a>-->
		</div>
		<div id="g02demo" class="abs sqiao">
			<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g02demo1.jpg" />
			<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g02demo2.jpg" />
			<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g02demo3.jpg" />
			<!--<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g02demo4.jpg" />-->
			<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g02demo5.jpg" />
			<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g02demo6.jpg" />
		</div>
	</div>
	<div id="g03" class="sqiao lz"></div>
	<div id="g04" class="sqiao lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g04.jpg" style="background:0 0 no-repeat;"></div>
	<div id="g05" class="sqiao lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g05.jpg" style="background:0 0 no-repeat;"></div>
	<div id="g06" class="lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g06.jpg" style="background:0 0 no-repeat;"></div>
	<div id="g07" class="sqiao lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g07.jpg" style="background:0 0 no-repeat;"></div>
	<div id="g08" class="rltv lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g08.jpg" style="background:0 0 no-repeat;">
		<span id="g085" class="abs">110</span>
		<a id="g081" class="abs sqiao pointer"></a>
		<a id="g082" class="abs sqiao pointer"></a>
		<a id="g083" class="abs sqiao pointer"></a>
		<a id="g084" class="abs sqiao pointer"></a>
	</div>
	<div id="g09" class="rltv lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g09.jpg" style="background:0 0 no-repeat;">
		<div id="g09txtdemos" class="abs">

			<p id="g09t01">
				<strong>班主任全程监督管理系统</strong><br/>
				无论是在线课程的学习阶段还是暑期特训、考前密训阶段，班主任将通过各种管理系统、了解授课老师对同学的反馈，全程监督陪同并且督促同学的学习进度，弥补考生自我约束和时间规划能力的不足，辅助考生按部就班地落实学习计划，平稳通过考研路。</p>
			<p id="g09t02" class="hide">
				<strong>院校专业选择支持系统</strong><br/>
				咨询老师将根据学员的个人情况，从专业认识、地区因素、数学水平、目标分数、报录比分析、导师情况、特殊政策、专业科目等8个维度进行，提供形象深入的考研战略梳理和报考专业的决策支持，，帮助同学顺利跨越考研过程中的第一道坎。</p>
			<!--高阶类服务-->
			<p id="g09t03" class="hide">
				<strong>论文写作指导系统</strong><br/>
				现在越来越多的学校对于有学术成果的学生会在复试中加分，这对于出身背景不好的学生来说是一个优化个人资历的途径，对于出身不错的学生来讲也是个锦上添花的过程。考研专业课网校会专门给学员开设学术论文写作指导课程，指导学员进行论文写作，后期学员在复习专业课的过程中在论文指导组老师的指导下进行论文创作，论文完成后由论文指导组老师帮助学员修改投稿，保证最终学术论文的成功发表。</p>
			<p id="g09t04" class="hide">
				<strong>体能与心理调节系统</strong><br/>
				心理问题是所有经历过考研的学生普遍认为的考研过程中最关键的问题之一。每位考生在复习的各个阶段都会呈现不同的心理状态，如果这些问题不能及时解决、心态不能调整好，一定会影响到复习。所以考研专业课网校专门设置了这项服务系统。同学们一旦有心理的顾虑，就可以找主管咨询师来咨询，班主任进行心理疏导，我们也会不定期开设心理专家辅导课程。除了心理问题外，所有的营养和休息方面的问题，比如觉得营养不良或失眠的等，都可以找考研专业课网校的咨询师进行咨询。</p>
			<p id="g09t05" class="hide">
				<strong>复试辅导系统</strong><br/>
				考研必须经过初试与复试的双重筛选，复试在最终的录取结果中的权重逐年增大，并且越是名校比重越大，而进入复试的学生普遍具有较强的竞争力，因此复试显得尤为重要。普通考生进入复试一般仅能获得复试参考书目进行备考，没有其他凭借，而复试的参考书仅占复试的一部分，仅仅看这些是远远不够的。<br/>考研专业课网校对考研复试的所有环节也都会进行相应的辅导，按照不同院校不同风格的复试流程与模式，提供复试礼仪培训、专业课老师一对一的专业课笔试指导、专业课面试培训以及英语口语及听力的集中训练，并提供相应的内部练习材料。最后在掌握目标院校复试形式以及最新信息的基础上，打开复试的黑匣子，大幅度提升学生核心竞争力，实现金榜题名。</p>
			<p id="g09t06" class="hide">
				<strong>调剂支持系统</strong><br/>
				调剂是指学生达到国家线，由于无法进入复试或复试被刷，考生可以申请调剂到校内或校外相同或相似专业的行为。每年成功录取的研究生中，有40%是调剂成功的学生，调剂的关键是第一时间知道哪些学校专业有调剂名额，考研专业课网校利用特有的官方渠道，及强大全面的数据库资源。第一时间在全国范围内为高端学员收集院校最新调剂信息，保证调剂信息的时效性及准确性，并对复试失利的高级学员进行针对性的调剂特别服务，确保考生万无一失。</p>
			<!--公共课 1-->
			<p id="g09t07" class="hide">
				<strong>公共课全程学习规划系统</strong><br/>
				考研专业课网校配置了最专业的考研咨询师，根据学员确定的目标院校、自身的学习能力、学习习惯、目前的学习水平制定相应的个性化学习方案，并配合以标准课程，增强课程及特训课程来完成知识点的全面掌握。</p>
			<p id="g09t08" class="hide">
				<strong>完备的学习资料系统</strong><br/>市面上的考研资料多达上千种，鱼龙混杂，学生也不知道如何选择适合自己的教材和书本。很多学生在复习过程中往往一本书看到一半多就放弃去看别的书，或者只是寥寥看完一遍，也不去深入研究，做错的题目以后依旧会做错，这样效果反而不如将一本书吃透来得好。因此，考研专业课网校依据深厚的师资为基础，深度的专家资源为根本，全面收集整理了历年考研市场公开出版的图书、未公开的内部资料以及各科老师的授课精华，针对考试大纲要求，对其中最有价值的知识点、习题进行提炼，给考研专业课网校高端学员提供全年考研复习过程中最精华的公共课学习资料，学生无需再看考研专业课网校建议之外的任何的书就可以达到最好的效果。</p>
			<p id="g09t09" class="hide">
				<strong>公共课全程在线补课系统</strong><br/>
				考虑到有些学生课上可能某块听不懂，或听懂了课下还是不会具体的应用，考研专业课网校专门为高端学员配备同步视频供学生补课，无论点播课还是密训课，都可以通过视频反复补课。考研专业课网校的视频课采用全球最大的在线教育集团megastudy的技术，高清画质，观感舒适，画面感强，给你身临其境的课堂体验。课程视频可以做段落标记，反复进行观看，学习更高效更便捷。</p>
			<!--公共课 2-->
			<p id="g09t10" class="hide">
				<strong>公共课基础课程系统</strong><br/>基础课程指从报名开始到7月之前的课程，包括基础标准课程和基础专项课程。基础标准课程所有课程均由全国顶级考研辅导名师授课，像数学的王莉，政治的陈先奎和英语的王建华。而且名师100%为原国家命题组成员或国家阅卷组成员。公共课标准课程侧重于讲考研的命题规律、阅卷规则、阶梯方法技巧，这是所有的考研学生都需要重点学的内容，上标准课程就想成功的学生最起码具有以下特质：1、学习基础非常好，没有薄弱学科；2、学习自律性非常好，在上标准课程之前进行充分的预习，课后有充分的复习，3、目标要定的非常合理，院校专业跨度不能太大。但是对于基础较差、想冲击名校的学生来讲，仅仅上标准课程是远远不够的，因此我们还设置了公共课加强训练课程、公共课专题训练课程、一对一辅导课程等，为各种基础的学生提供了完美的解决方案。</p>
			<p id="g09t11" class="hide">
				<strong>公共课暑期强化课程系统</strong><br/>
				考研专业课网校暑假采取全封闭特训的模式，特训课程主要解决不同复习阶段怎样更好衔接的问题，在考研的关键时期对前一个阶段的重难点进行集中攻关，老师带领学生，通过大量的课程和训练资料、习题、试卷考核、答疑辅导、一步一步地达到学习任务的要求。达到从量变到质变的飞跃；实现平稳过渡，顺利地进入到下一阶段的复习。考研集训采取封闭特训制度，学员集中在名校教育基地—上海交大七宝校区接受24小时全封闭科学人性化管理。免去学员路上奔波劳顿，更好的利用时间，摆脱学生上课学习不专心，学习效率低下等问题。同时，在班主任的辅助与监督下，能够帮助学生在备考复习中逐渐培养时间规划能力，提高自我学习约束能力。另外，可帮助考生构建名校交流圈，既保证学员能够长时间的集中精力备考，又使考生人脉资源得以全面拓展。</p>
			<p id="g09t12" class="hide">
				<strong>公共课秋季提高课程系统</strong><br/>
				基础薄弱的同学在经过暑期的强化特训课程之后，整体的知识结构和学习思路会有很大的提升，为了更好地衔接考前冲刺课程体系，考研专业课网校会在秋季开设提高阶段的专项课程，同时也是对暑期集训的一种巩固加强。比如英语会开设核心词汇与实战语法课程，政治、数学科目会针对性的分析历年真题。帮助同学在秋季迅速拔高，以适应考前更有深度和个性化的学习节奏和专项辅导项目。</p>
			<p id="g09t13" class="hide">
				<strong>公共课冲刺训练课程系统</strong><br/>
				冲刺阶段是学生是最容易出成绩但也是学生心态上最容易出问题的阶段，因此冲刺阶段能否进行高效的复习直接决定着考研的成败。点题、押题、模考是本阶段辅导的核心，点题是指将高频考点和学习难点进行重点回顾、提炼、串讲，将铺开的知识收起来的过程；押题是根据历年命题规律，本年热点问题进行押题，近几年英语大小作文、政治至少四道大题以及数学和专业课的知识点都没超出我们的辅导范围；模考是指按照考研的时间和流程要求让学生熟悉考场，学会分配没道题目的时间，避免出现做不完题或封错卷子的情况。<br/>冲刺训练的实现方式也是直播与密训结合的模式，可以自行选择密训或点播的方式进行学习。</p>
			<!--公共课 3-->
			<p id="g09t14" class="hide">
				<strong>公共课全程答疑系统</strong><br/>
				在考研复习过程中一旦遇到障碍就应该立刻解决，因为知识就像链条，一环套着一环，及时碰到的疑难解决，接下来的困难就很可能迎刃而解，所以学员在考研的路上一定不要留盲区。考研专业课网校为学员提供最先进的微信答疑服务，在上面提出问题，老师会在第一时间给予回复，而且在微信平台上学员可以看到其他高级学员的问题及答案，这样也会激发学员的思考，学员自己没有想到的问题但别的学员想到了，这样就是一种互补。当然，特训期间可以随时面对面答疑。<br/>除此之外，考研专业课网校还会对本阶段学生问的比较多的问题，老师总结的易错题目以及以往学员本阶段容易出错的问题进行总结，以直播的方式给学生进行重点讲授，让学生不留盲点，顺利进行下阶段的复习。</p>
			<p id="g09t15" class="hide">
				<strong>公共课作业发布批改系统</strong><br/>
				为了让学生及时掌握课上的内容，克服学生的惰性，考研专业课网校会在课程结束后为学生布置、批改作业。考研专业课网校的学员都会有线上的学习园地，学习园地有预学习版块和课后作业发布模块和资料下载版块，在预学习板块上老师会提前在课前公布本次课的主要知识点，供学生提前预习，课后老师会通过学习园地和微信同步发布作业，学生完成作业后提交作业，然后由老师负责及时修改。</p>
			<p id="g09t16" class="hide">
				<strong>公共课全程晋级测评系统</strong><br/>
				考研专业课网校会为考研专业课网校的学员进行学习效果测评，主要有日常测试、阶段测试、院校专业选择测试、全真模拟测试等。通过建立学员测评数据库，真实评估每位考生横向、纵向水平，以便动态调整辅导计划，确保考生按计划 达成最佳学习效果。<br/>考研专业课网校会实时监控学员的学习进度，给出最精准的科学的、严格的晋级标准。学习平台会结合学生的基础情况、目标院校专业的难度等因素智能的评估出学生要想达到目标需要的复习梯度，给学生划定阶梯计划，每次学生登录学习中心都会有该生的系统进度提示。</p>
			<p id="g09t17" class="hide">
				<strong>公共课1对1加强系统</strong><br/>
				一对一个性化辅导是最先进、学生吸收率最高的一种辅导模式，因此针对个别某个科目零基础或者存在瘸腿科的学生，考研专业课网校还专门为其量身打造了一对一的辅导课程，一对一个性化辅导，以学生为中心，根据学生自身的特点，采用“名师一对一的定向辅导、管理”，由班主任激发斗志，全程跟踪管理，监督指导确保辅导效果。一对一具有针对性，它能针对学生的各科状况做出一个有针对性的方案来解决学生问题。这样就会引导学生的学习主观能动性，从而达到最后的目的，之后通过引发学生的学习欲望，激发学生的学习兴趣，而且师生间交往的频率增加，教师的“照顾面”明显扩大，有助于老师关注学生的发展。<br/>一对一辅导系统的课程也是在基础阶段采用点播方式，暑期进行全封闭特训的方式。</p>
			<!--专业课-->
			<p id="g09t18" class="hide">
				<strong>专业课全程学习方案定制系统</strong><br/>
				根据同学所报考的目标专业和目前的学习能力及对专业课知识体系的理解，以周为单位规划全年的专业课课程授课和学习的方案。学习方案会告诉你如何更好地配合老师学习课程，如何有效利用时间进行专业课的课外学习，如何利用考研专业课网校提供的优化资料配合课程强化训练，最终帮助同学奠定全程专业课学习的基调和学习节奏。</p>
			<p id="g09t19" class="hide">
				<strong>专业课精华资料系统</strong><br/>
				由于专业课学习资料远没有公共课的学习资料完整、公开、透明，普通学生一般仅能获得专业课制定参考书目和少数真题，而现在越来越多的硕士点不再指定参考书，不提供真题，即使有参考数目，里面有的书网上可能根本买不到，真题可能只能获得回忆版或没有答案的版本，这对于学生来讲是一个非常大的障碍。<br/>依托于各名校资源，考研专业课网校每年投巨资进行专业课的研发，为学员提供最全面、最核心和最具针对性的专业课学习资料。这些专业课的学习资料既结合了专业课辅导团队的权威全面的研发成果，又具有各个学校专业课个性化特点。 这些资料包含了参考书及建议参考书、扩展参考资料、本科生研究生课程笔记讲义、历年真题及解析、导师的重要论文专著，这些资料有很多都是同学迫切想获取但是又苦于找不到的资料。</p>
			<p id="g09t20" class="hide">
				<strong>专业课在线直播课程系统</strong><br/>
				专业课的标准课程包括基础课程、强化课程、冲刺课程以及考前密训课程，标准课程的课程内容在参考专业课参考书上平面化的知识点，结合知识点在学科中的地位、历年真题考察的频次、硕士点学术传统、命题趋势、命题老师研究方向等进行分类分级整理，行成立体化、螺旋上升知识点难度结构层级，精讲所有核心考点、专业课应试学科框架、必考点预测与讲解。对于不同层级上的知识点，需要花费不同的学习时间和训练方法，才可以行成透彻理解、充分记忆和快速解题的专业课考试核心竞争力。<br/>传统的专业课标准课程，一般只会在北京、上海几个大的城市进行面授，其他地市的以观看视频为主，而且一般来讲有标准课程的只有统考专业课。而考研专业课网校除了所有的统考专业以外，还斥巨资精做江浙沪100多个硕士点的标准课程，采取点播与面授结合的授课方式，在节约学生实践精力的基础上达到最佳的授课效果。</p>
			<p id="g09t21" class="hide">
				<strong>专业课在线答疑系统</strong><br/>
				由于不同学校专业课复习科目的设置不同，及时没跨专业的同学也很难保证目标院校要考察的知识点自己本科期间都学过，更不用提跨专业考研的同学了，因此专业课复习过程中会遇到非常多的问题，有了问题得不到及时答疑就会影响后面知识点的学习，时间久了容易降低学生的学习兴趣，进而影响到学生的复习心态，严重的会导致弃考。而传统的辅导班对专业课的答疑问题重视不够，甚至高端学员也经常有了问题不能第一时间得到答疑，或者说答疑的次数有限制，因此考研专业课网校实行的是课上直播答疑或线上答疑、课下微信答疑或学习园地答疑，都会有老师第一时间给学生进行回复，而且对于经常犯错的题目，考研专业课网校专业课也有易错题性解析课程，总结学生常犯的错误原因，对症下药。</p>
			<p id="g09t22" class="hide">
				<strong>专业课全程晋级测评系统</strong><br/>
				同公共课一样，考研专业课网校对学生的专业课也定期进行智能化的诊断式测评，通过测评评估每位考生专业课学习的薄弱点，智能评估学生的提升空间和拔高点，并且连同公共课的成绩一起纳入是否进行下梯度复习的评估因素，进行专业课的学习计划调整。全真模拟考试则可以让学生提前熟悉考试流程、合理分配考试时间、考研题型的答题方式，做到考试时胸有成竹。<br/>高端学员用户中心的学习进度跟踪系统也包括对专业课的学习情况的衡量，根据该学生后台给出的晋级标准，通过专业课与公共课的测试情况评估学生可否进入下一梯度的学习。</p>
			<p id="g09t23" class="hide">
				<strong>专业课1对1课程辅导系统</strong><br/>
				对于专业课基础较好的同学，通过考研专业课网校的专业课标准课程和完善的服务就完全可以在最终的考试中取得高分，但是对于跨专业或者专业课基础特别薄弱的同学，仅仅上专业课的标准课程时不够的，还需要老师在标准课程之前带着学生打好基础，由目标院校目标专业的高分研究生手把手的将考研的知识点详细的讲解一遍，这样才能跟上其他同学的节奏，更好的吸收课上老师讲的内容。因此考研专业课网校特地为跨专业和基础薄弱的同学增设专业课一对一课程。</p>

		</div>
		<div id="g09bricks">
			<a id="g0901" title="11 班主任全程监督管理系统" class="pointer abs"></a>
			<a id="g0902" title="12 院校专业选择支持系统" class="pointer abs"></a>
			<a id="g0903" title="21 1论文写作指导系统" class="pointer abs"></a>
			<a id="g0904" title="21 2体能与心理调节系统" class="pointer abs"></a>
			<a id="g0905" title="22 1复试辅导系统" class="pointer abs"></a>
			<a id="g0906" title="22 2调剂支持系统" class="pointer abs"></a>
			<a id="g0907" title="31 1公共课全程学习规划系统" class="pointer abs"></a>
			<a id="g0908" title="31 2完备的学习资料系统" class="pointer abs"></a>
			<a id="g0909" title="31 3公共课全程在线补课系统" class="pointer abs"></a>
			<a id="g0910" title="32 1公共课基础课程系统" class="pointer abs"></a>
			<a id="g0911" title="32 2公共课暑期强化课程系统" class="pointer abs"></a>
			<a id="g0912" title="32 3公共课秋季提高课程系统" class="pointer abs"></a>
			<a id="g0913" title="32 4公共课冲刺课程系统" class="pointer abs"></a>
			<a id="g0914" title="33 1公共课全程答疑系统" class="pointer abs"></a>
			<a id="g0915" title="33 2公共课作业批改系统" class="pointer abs"></a>
			<a id="g0916" title="33 3公共课全程进级测评系统" class="pointer abs"></a>
			<a id="g0917" title="33 4公共课1对1加强系统" class="pointer abs"></a>
			<a id="g0918" title="41 1专业课全程学习方案定制系统" class="pointer abs"></a>
			<a id="g0919" title="41 2专业课精华资料系统" class="pointer abs"></a>
			<a id="g0920" title="41 3专业课在线直播课程系统" class="pointer abs"></a>
			<a id="g0921" title="41 3专业课在线答疑系统" class="pointer abs"></a>
			<a id="g0922" title="41 4专业课全程晋级评测系统" class="pointer abs"></a>
			<a id="g0923" title="41 5专业课1对1课程辅导系统" class="pointer abs"></a>
			
		</div>
	</div>
	<div id="g10" class="rltv lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g10.jpg" style="background:0 0 no-repeat;">
		<a id="g101" class="abs sqiao pointer"></a>
	</div>
	<div id="g11" class="rltv lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g11.jpg" style="background:0 0 no-repeat;">
		<a id="g111" class="abs sqiao pointer"></a>
		<a id="g112" class="abs sqiao pointer"></a>
		<a id="g113" class="abs sqiao pointer"></a>
		<a id="g114" class="abs sqiao pointer"></a>
	</div>
	<div id="g12" class="rltv lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g12.jpg" style="background:0 0 no-repeat;">
		<a id="g120" class="abs sqiao pointer"></a>
		<a id="g121" class="abs sqiao pointer"></a>
		<a id="g122" class="abs sqiao pointer"></a>
		<div id="g12demo" class="abs sqiao">
			<img id="g12demo1" src="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo1.jpg" />
			<img id="g12demo2" src="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo2.jpg" class="hide" />
			<img id="g12demo3" src="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo3.jpg" class="hide" />
			<img id="g12demo4" src="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo4.jpg" class="hide" />
			<img id="g12demo5" src="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo5.jpg" class="hide" />
			<img id="g12demo6" src="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo6.jpg" class="hide" />
		</div>
		<div id="g12demonav" class="abs">
			<div id="g12demonavw" class="rltv">
				<img id="g12demo1s" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo1s.jpg" class="pointer" /><img id="g12demo2s" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo2s.jpg" class="pointer" /><img id="g12demo3s" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo3s.jpg" class="pointer" /><img id="g12demo4s" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo4s.jpg" class="pointer" /><!--<img id="g12demo3s" src="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo1s.jpg" class="pointer" /><img id="g12demo4s" src="http://z.zhuanyeke.cn/Public/Images/event/golden/g12demo2s.jpg" class="pointer" />-->
			</div>
		</div>
		<a id="g12prev" class="abs pointer"></a>
		<a id="g12next" class="abs pointer"></a>
	</div>
	<div id="g13" class="lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g13.jpg" style="background:0 0 no-repeat;"></div>
	<div id="g14" class="rltv lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g14.jpg" style="background:0 0 no-repeat;">
		<a id="g141" class="abs sqiao pointer"></a>
		<div id="g141nav" class="abs">
			<div id="g141navw" class="rltv">
				<div id="teacher01" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher01.jpg" class="pointer" />
					<div class="tch_name">李海洋</div>
					<div class="tch_slogen">原研究生入学考试政治命题组成员</div>
					<div class="tch_lesson">授课：考研政治全科</div>
					<div class="tch_intro hide abs">哲学博士，中国人民大学哲学院教授，研究生导师，哲学共同课教研室主任，考研政治辅导领军人物，从事《哲学原理》、《马克思主义基本原理》辅导十余年，理论功底极为雄厚，师德高尚，教风严谨，讲解高屋建瓴、紧扣考纲、深入浅出、通俗易懂、对难点、考点把握精准。令学员事半功倍，是中国考研辅导“考点群定位法”的创始人，深受广大考生欢迎和爱戴</div>
				</div>
				<div id="teacher02" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher02.jpg" class="pointer" />
					<div class="tch_name">陈先奎</div>
					<div class="tch_slogen">毛中特辅导第一人</div>
					<div class="tch_lesson">授课：考研政治全科</div>
					<div class="tch_intro hide abs">考研政治辅导领军人物，主讲毛泽东思想和中国特色社会主义理论体系概论，当代世界经济与政治。其多年来对考研政治命题方向的准确把握、预测惊人。授课风趣幽默且重点突出。<br/>著作：《思想政治理论历年真题名师详解与复习点拨》《思想政治理论标准辅导全书》《思想政治理论基础过关2000题》《形势与政策、当代世界经济与政治大预测》《思想政治理论考前大串讲》《思想政治理论全程预测100题》《思想政治理论冲刺预测6套卷》《思想政治理论考前精讲30题》。</div>
				</div>
				<div id="teacher03" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher03.jpg" class="pointer" />
					<div class="tch_name">高浩峰</div>
					<div class="tch_slogen">政治大纲配套教材主编</div>
					<div class="tch_lesson">授课：考研政治全科</div>
					<div class="tch_intro hide abs">著作：《硕士研究生入学统一考试思想整理理论冲刺试卷》《硕士研究生入学统一考试思想整理理论基础复习》《硕士研究生入学统一考试思想整理理论历年真题解析》</div>
				</div>
				<div id="teacher04" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher04.jpg" class="pointer" />
					<div class="tch_name">何虎生</div>
					<div class="tch_slogen">政治史纲权威名师</div>
					<div class="tch_lesson">授课：考研政治史纲等</div>
					<div class="tch_intro hide abs">中国人民大学马克思主义学院教授<br/>著作：《中国共产党的宗教政策研究》（中国人民大学211工程项目）《中国化马克思主义宗教观研究》《“十一五”期间国家重点图书》</div>
				</div>
				<div id="teacher05" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher05.jpg" class="pointer" />
					<div class="tch_name">侯一夫</div>
					<div class="tch_slogen">考研政治实力派领军人物、研究生入学考试阅卷组成员</div>
					<div class="tch_lesson">授课：考研政治马哲等</div>
					<div class="tch_intro hide abs">教育部高教社考试中心《考研政治大纲》配套《红宝书》副主编。中央党校哲学博士，北师大博士后，考研辅导专家。研究生入学考试阅卷组成员。教学态度严谨授课方法独特，逻辑性强，深入透彻、深冬幽默</div>
				</div>
				<div id="teacher06" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher06.jpg" class="pointer" />
					<div class="tch_name">方成建</div>
					<div class="tch_slogen">考研政治“新学院派”的典型代表</div>
					<div class="tch_lesson">授课：马原、毛中特、史纲</div>
					<div class="tch_intro hide abs">全国硕士研究生入学考试政治阅卷组成员，哲学博士，深谙考研政治命题规律，对历年考研政治试题命题思路和答题技巧有独到见解，辅导效果突出。上课激情洋溢，严谨而不失风趣，非常受学生欢迎。</div>
				</div>
				<div id="teacher07" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher07.jpg" class="pointer" />
					<div class="tch_name">米鹏</div>
					<div class="tch_slogen">学者型考研政治专家</div>
					<div class="tch_lesson">授课：考研政治全科</div>
					<div class="tch_intro hide abs">考研政治阅卷组成员。12年考研教学经验，全国著名考研政治学者型辅导专家。擅长框架式结构教学，对考研政治的各种题型测试规律把握精准。重点突出，考点提炼准确，深入浅出，化繁为简，让考生在轻松愉快的氛围中不知不觉掌握考点。</div>
				</div>
				<div id="teacher10" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher10.jpg" class="pointer" />
					<div class="tch_name">王莉</div>
					<div class="tch_slogen">高数第一人</div>
					<div class="tch_lesson">授课：考研数学全科</div>
					<div class="tch_intro hide abs">国家重点军事院校教授，研究生导师。全国考研数学领军人物。作为主要完成人先后获国家级教学成果二等奖一项，部委级教学成果一等奖一、三等奖二项，经高等教育出版社出版教材二部，发表论文十余篇。</div>
				</div>
				<div id="teacher11" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher11.jpg" class="pointer" />
					<div class="tch_name">王博</div>
					<div class="tch_slogen">考研数学新生代实力派</div>
					<div class="tch_lesson">授课：考研高等数学</div>
					<div class="tch_intro hide abs">南京大学商学院MBA，考研数学界最年轻的辅导老师之一，全国级优秀中青年数学辅导专家。精力充沛，能提供更好的管理，也可以多利用现代化工具与学生交流。上课快节奏、不拘小节，调理清晰，详解细致。高等数学尤为擅长，是他成为考研数学实力派领军任务的有力法宝。</div>
				</div>
				<div id="teacher12" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher12.jpg" class="pointer" />
					<div class="tch_name">杨超</div>
					<div class="tch_slogen">国家级优秀数学青年教师</div>
					<div class="tch_lesson">授课：考研高等数学</div>
					<div class="tch_intro hide abs">全国研究生入学考试阅卷组成员，人民大学出版社，清华大学出版社，机械工业出版社，高等教育出版社教学特邀采访特聘专家，国家级优秀青年教授。全国首位将高等数学的一些概念原理运用哲学思想去演绎，颠覆传统数学给人枯燥无聊之感。<br/>出版教材：《高等数学十八讲》《考研数学基础强化攻略》《历年真题解析》深受考生欢迎。</div>
				</div>
				<div id="teacher13" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher13.jpg" class="pointer" />
					<div class="tch_name">张跃辉</div>
					<div class="tch_slogen">研究生入学考试上海地区数学阅卷组组长</div>
					<div class="tch_lesson">授课：考研高等数学</div>
					<div class="tch_intro hide abs">中国著名考研数学辅导专家，具有多年考研辅导经验。参加全国高等数学研究生入学考试阅卷工作近二十年，多年担任上海阅卷组组长，上海交通大学数学博士，副教授。<br/>主编教材：《高等数学》（科学出版社2001），获得上海交通大学优秀教材一等奖。</div>
				</div>
				<div id="teacher14" class="teacher rltv">
					<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/teacher14.jpg" class="pointer" />
					<div class="tch_name">曹显兵</div>
					<div class="tch_slogen">数学高分杰作大师</div>
					<div class="tch_lesson">授课：考研概率统计</div>
					<div class="tch_intro hide abs">北京市精品课程《概率统计》负责人、美国《数学评论》评论员、北京市数学会理事，北京工商大学理学院院长、教授，全国考研数学领军人物。<br/>著作：《考研数学经典冲刺5套卷》《概率论语梳理统计辅导讲义》《考研数学高分复习全书》《考研理解数学真题题型解析》《考研数学最精选600题》《概率论与梳理统计过关与提高》《考研数学线性代数过关于提高》等</div>
				</div>

			</div>		
		</div>
		<a id="g14prev" class="abs pointer"></a>
		<a id="g14next" class="abs pointer"></a>
	</div>
	<div id="g15" class="rltv lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g15.jpg" style="background:0 0 no-repeat;">
		<a id="g151" class="abs sqiao pointer"></a>
		<div id="g15nav" class="abs">
			<div id="g15navw" class="rltv">
				<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/student01.jpg" class="pointer sqiao" />
				<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/student02.jpg" class="pointer sqiao" />
				<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/student03.jpg" class="pointer sqiao" />
				<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/student04.jpg" class="pointer sqiao" />
				<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/student05.jpg" class="pointer sqiao" />
				<img data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/student06.jpg" class="pointer sqiao" />
			</div>
		</div>
		<a id="g15prev" class="abs pointer"></a>
		<a id="g15next" class="abs pointer"></a>
	</div>
	<div id="g16" class="sqiao lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g16.jpg" style="background:0 0 no-repeat;"></div>
	<div id="g17" class="sqiao lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g17.jpg" style="background:0 0 no-repeat;"></div>
	<div id="g18" class="rltv lz" data-original="http://z.zhuanyeke.cn/Public/Images/event/golden/g18.jpg" style="background:0 0 no-repeat;">
		<a id="g181" class="abs sqiao pointer"></a>
		<div id="g184" class="abs">
			<a id="g182" class="abs pointer"></a>
			<a id="g183" class="abs pointer"></a>
		</div>
	</div>
	<div id="g19" class="rltv">
		<a id="g191" class="abs sqiao pointer"></a>
	</div>
	<div id="g20" class="rltv">
		<a id="g201" class="abs sqiao pointer"></a>
	</div>
	<div id="g21"></div>
	<div id="fixright">
		<div id="totop" class="pointer"><div style="font-size:18px;" class="hide">^</div>回顶部</div>
	</div>
	<div id="wx"><img src="http://z.zhuanyeke.cn/Public/Images/event/golden/wx.jpg" /></div>
<script>
  $(function() {
     $(".lz").lazyload({
       effect : "fadeIn",
       effectspeed: 100
     });
     $("img").lazyload({
     	effect : "fadeIn"
     })
  });
</script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fed448570a55d6fd83b85bbd2b16e0618' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
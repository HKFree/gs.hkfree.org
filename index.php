<?php
  require_once("ts3/ts.php");
  if(isset($_GET["p"])) {$page=$_GET["p"];} else {$page="prazdno";}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GameServer HKFree.org</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="http://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans|Montserrat:300,400,700" rel="stylesheet" type="text/css" />
  <link href="default.css" rel="stylesheet" type="text/css" media="all" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
  <div id="wrapper" class="container">
  	<div id="header">
  		<div id="logo">
  			<h1><a href="./">GameServer HKFree.org</a></h1>
  		</div>
  		<div id="menu">
  			<ul>
  				<li<?php if($page=="teamspeak") echo(' class="current_page_item" '); ?>><a href="?p=teamspeak">TeamSpeak</a></li>
  				<li<?php if($page=="wolfenstein") echo(' class="current_page_item" '); ?>><a href="?p=wolfenstein">Wolfenstein ET</a></li>
  				<li<?php if($page=="minecraft") echo(' class="current_page_item" '); ?>><a href="?p=minecraft">Minecraft</a></li>
  				<li<?php if($page=="kontakt") echo(' class="current_page_item" '); ?>><a href="?p=kontakt">Kontakt</a></li>
  			</ul>
  		</div>
  	</div>
  	<div id="banner"><img src="topfoto/logo.png" width="1100" height="250" alt="" /></div>
  	<div id="page">
  
  <div id="sidebar">
  
  			<div id="box1">
  				<h2 class="title">TeamSpeak status</h2>
  				<p>Aktuálně je online <span style="color:#FE801C;" id="tscount"><?php echo(getCount()); ?></span> lidí z 256.</p>
  			</div>
  
  			<div id="box2">
  				<h2 class="title">Novinky</h2>
  				<ul class="style3">
				        <li><img src="images/img03.jpg" width="78" height="78" alt="">
  						<p>Dostali jsme Non-profit licenci na teamspeak, takže máme 512 volných slotů!</p>
  						<p class="posted">16. února 2013</p>
  					</li>
  					<li class="first"><img src="images/img02.jpg" width="78" height="78" alt="">
  						<p>Rozjeli jsme tyhle nové cool webovky. </p>
  						<p class="posted">13. února 2013</p>
  					</li>
  				</ul>
  				<!--<p><a href="#" class="link-style">Read More</a></p>-->
  			</div>
  		</div>
  		
  		<div id="content">
  			<div id="cbox1">
          <?php
            if($page=="minecraft") {include('minecraft.inc.php');}
            elseif($page=="wolfenstein") {include('wolfenstein.inc.php');}
            elseif($page=="teamspeak") {include('teamspeak.inc.php');}
            elseif($page=="kontakt") {include('kontakt.inc.php');}
            else {include('main.inc.php');}
          ?>
  			</div>
      
      <!--  
  			<div id="two-column">
  				<div id="tbox1">
  					<h2 class="title2">Mauris vulputate dolor</h2>
  					<ul class="style2">
  						<li class="first">
  							<h3><a href="#">Maecenas luctus lectus</a></h3>
  							<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
  						</li>
  						<li>
  							<h3><a href="#">Integer gravida nibh</a></h3>
  							<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
  						</li>
  						<li>
  							<h3><a href="#">Fusce ultrices fringilla</a></h3>
  							<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
  						</li>
  					</ul>
  				</div>
  				<div id="tbox2">
  					<h2 class="title2">Nulla luctus eleifend purus</h2>
  					<ul class="style2">
  						<li class="first">
  							<h3><a href="#">Maecenas luctus lectus</a></h3>
  							<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
  						</li>
  						<li>
  							<h3><a href="#">Integer gravida nibh</a></h3>
  							<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
  						</li>
  						<li>
  							<h3><a href="#">Fusce ultrices fringilla</a></h3>
  							<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
  						</li>
  					</ul>
  				</div>
  			</div>     -->
        
  		</div>
  		
  	</div>
  	<div id="footer">
  		<p>Copyright (c) 2013 gameserver.hkfree.org. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Spravuje <a href="mailto:bkralik@hkfree.org">bkralik</a><br>
      Status TeamSpeaku se automaticky obnovuje každých 20 sekund.</p>
  	</div>
  </div>
  <script type="text/javascript">
    function loadcount()
    {
      $.get('ts3/ts.php', { s: "count" }, function(data) {
        $('#tscount').html(data);
      });
      setTimeout("loadcount()", 20000);
    }
    setTimeout("loadcount()", 10000);
  </script>
</body>
</html>

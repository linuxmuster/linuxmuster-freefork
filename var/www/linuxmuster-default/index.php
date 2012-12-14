<?php
$servername = $_SERVER['SERVER_NAME'];
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>linuxmuster.net interne Startseite</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta name="copyright" content="linuxmuster.net">
    <meta name="description" content="linuxmuster.net interne Startseite">
  </head>
  <body>
   <div id="box">
	<div id="innerbox">
<div id="header">
<h1>Willkommen auf <?php echo $servername;?></h1>
</div>

<div class="ddgfield"> 
<form method=GET action="https://duckduckgo.com/">
    <input class="lst" type="text" name="q" value="" /> 
    <input class="lsb" type="submit" name="btnG" value="DuckDuckGo Suche" /> 
</form>
</div>

	<ul>
	   <li>
		<a href="https://<?php echo $servername;?>:242">Schulkonsole</a><br/>
	   </li>
	   <li>
		<a href="http://<?php echo $servername;?>/moodle">Moodle</a><br/>
	   </li>
	   <li>
		<a href="https://<?php echo $servername;?>/horde3">Webmail</a><br/>
	   </li>
	   <li>
		<a href="http://www.linuxmuster.net/">linuxmuster.net Projektseite</a><br/>
	   </li>
	   <li>
		<a href="http://www.lehrerfortbildung-bw.de/netz/muster/linux/">LFB-Server</a><br/>
	   </li>
	   <li>
		<a href="http://mail.schule-bw.de/cgi-bin/mailman/listinfo/linuxmuster">Mailing-Liste</a>
	   </li>
        </ul>
       </div>
      </div>
</body>
</html>

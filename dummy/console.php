<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unporte
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('ses.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Breakout | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Breakout</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
						   			</ul>
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="console.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Control Server</a>
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                                    <li>
                            <a href="../../index.php"><i class="fa fa-flask nav_icon"></i>Home</a>

                        </li>
                           </ul>

<!-- /.nav-second-level -->

                                                    <li>
                            <a href="../../createserv.php"><i class="fa fa-flask nav_icon"></i>New Sever</a>

                        </li>
                           </ul>

</ul>
                            <!-- /.nav-second-level -->
                        </li>
                                                    <li>
                            <a href="../../logout.php"><i class="fa fa-flask nav_icon"></i>Logout</a>
                        </li>
                           </ul>

                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	        	<div class="clearfix"> </div>
      </div>
<div class="app-cam">
<?php
if(isset($_POST['back'])) {
header('location: index.php');
}
// read the textfile
$file = 'logs/latest.log';
$text = file_get_contents($file);
require_once ('rcon.php');
$host = 'localhost'; // Server host name or IP
$port = RCONPORTT;                      // Port rcon is listening on
$password = 'RCONPASSS'; // rcon.password setting set in server.properties
$timeout = 3;                       // How long to timeout.
 
$rcon = new Rcon($host, $port, $password, $timeout);
if(isset($_POST['cmdsend'])){
if ($rcon->connect())
{
	$rcon->send_command($_POST['cmd']);
	//echo $rcon->get_response();
	//echo preg_replace("/??./", "", $rcon->get_response()); //remove some invalid char
	 if($commandbox = "stop")
        {
             exec('rm -rf running');
        }
}
}

?>
<!-- HTML form -->
<form action="" method="post">
<textarea name="text"><?php echo htmlspecialchars($text); ?> </textarea>
<textarea name="cmd"></textarea>
<input type="submit" name="back" value="Back" />
<input type="submit" name="cmdsend" value="Send Command" />
<input type="submit" name="refcon" value="Refresh Console" />
</form>







  </div>
      <div class="col_1">
<!???-EDIT HERE -->
<?php
foreach (glob("servers/*") as $filename) {
echo  "\n";++$ctr;
}
?>
<center>

		    <div class="col-md-4 span_7">
		    </div>
		    <div class="col-md-4 span_8">
		       
		    </div>
			<div class="col-md-4 stats-info">
                           <div class="clearfix"> </div>

		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
<!-- //map -->
       </div>
       <div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
    
	   </div>
	   <div class="col-md-4 span_4">
				<div class="clearfix"> </div>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>




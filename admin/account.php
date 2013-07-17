<?php
session_start();
if (ISSET($_SESSION['username'])){
}else{
header("location:login.php");
}
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="../source/lib/bootstrap/css/bootstrap.css">  
    <link rel="stylesheet" type="text/css" href="../source/stylesheets/theme.css">
    <link rel="stylesheet" href="../source/lib/font-awesome/css/font-awesome.css">
    <script src="../source/lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 http-error"> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 http-error"> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 http-error"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class="http-error"> 
  <!--<![endif]-->
    


    

    
        <div class="row-fluid">
    <div class="http-error">
        <div class="http-error-message">
          <div align="left" class="error-message">
          <h3 align="center">Account Setting </h3>
          <table width="536" border="0">
            <?php 
			include 'koneksi.php';
                   $dd = $_SESSION['username'];
$querys = "SELECT * FROM admin WHERE username='$dd'";
                    $exes = mysql_query($querys);
                    while($rows = mysql_fetch_assoc($exes)){
                       
                        $a = $rows['id'];
                        $b = $rows['first_name'];
                        $c = $rows['last_name'];
                        $d = $rows['username'];
					}
					?>
  <tr>
    <td width="114">First Name :</td>
    <td width="51"><?php echo $b; ?></td>
    <td width="165" align="right">Username :</td>
    <td colspan="2" align="left"><?php echo $d; ?></td>
  </tr>
  <tr>
    <td>Last Name :</td>
    <td><?php echo $c; ?></td>
    <td colspan="2" align="right"><h6><a href="index.php">Back to the home page</a></h6></td>
    </tr>
</table>

            </div>
        </div>
    </div>
</div>





    


    <script src="../source/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>



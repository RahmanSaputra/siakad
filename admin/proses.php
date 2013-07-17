<?php 
session_start();
require("koneksi.php");
$encrypt_pass = $_POST['password'];
$cek = "Select * from admin where username='$_POST[username]' and password='$encrypt_pass'";
$hasil = mysql_query($cek);
$hasil_cek = mysql_num_rows($hasil);
if ($hasil_cek==0){}
else
{
$_SESSION['username'] = $_POST['username'];
header("location: index.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="../source/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="../source/stylesheets/theme.css">
    <link rel="stylesheet" href="../source/lib/font-awesome/css/font-awesome.css">

    <script src="../source/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	function ilang() {
$("#pesan").hide();
}
function nongol() {
$("#pesan").show();
var t = setTimeout("ilang()", 5000);
}

</script>

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
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head> 
  <body class=""> 
 
    
<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Sistem Akademik</span> <span class="second">Login</span></a>
        </div>
    </div>
    


    

    
        <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">Sign In</p>
            <div class="block-body">
            	<div id="pesan">
                  
                    <div class="alert alert-error">
    Username & Password Salah
    </div>
                </div>
                <form action="proses.php" method="post" id="form2">
                    <label>Username</label>
                    <input name="username" type="text" class="span12" id="username">
                  <label>Password</label>
                    <input name="password" type="password" class="span12" id="password">
                   <div align="right">  
                  <button type="submit" class="btn btn-primary">Log In</button></div>
              <label class="remember-me"><input type="checkbox"> Remember me</label>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p class="pull-right" style=""><a href="http://www.portnine.com" target="blank">RahmanSaputra</a></p>
        <p><a href="reset-password.html">Forgot your password?</a></p>
    </div>
</div>


    


    <script src="../source/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
function ilang() {
$("#pesan").hide();
}
function nongol() {
$("#pesan").show();
var t = setTimeout("ilang()", 5000);
}

</script>
    
  </body>
</html>



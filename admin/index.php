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
    <title>Sistem Akademik</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.ico" />
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
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> 
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
							<?php echo $b, " ", $c ;

?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li><a tabindex="-1" href="update_account.php">My Account</a></li>
                            <li class="divider"></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php"><span class="first">Sistem Akademik</span> <span class="second">SMKN 9 Malang</span></a>
        </div>
    </div>
    


    
    <div class="sidebar-nav">
        <form class="search form-inline">
            <input type="text" placeholder="Search...">
        </form>

        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="index.php">Home</a></li>
            <li ><a href="berita.php">Berita</a></li>
            <li ><a href="">Pendaftaran</a></li>
            <li ><a href="">Hasil Seleksi</a></li>
            <li ><a href="">Pengumuman</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-cog"></i>Setting<span class="label label-info">+3</span></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="update_account.php">Profile</a></li>
            <li ><a href="logout.php">Log Out</a></li>
            <li ><a href="reset-password.html">Reset Password</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-user-md"></i>Guru <i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="guru.php">Data Guru</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-user"></i>Siswa</a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="privacy-policy.html">wow</a></li>
            <li ><a href="">wew</a></li>
        </ul>
		<a href="#kelas-menu" class="nav-header" data-toggle="collapse"><i class="icon-sitemap"></i>Kelas</a>
        <ul id="kelas-menu" class="nav nav-list collapse">
            <li ><a href="">Kelas X</a></li>
            <li ><a href="">Kelas XI</a></li>
            <li ><a href="">Kelas XII</a></li>
        </ul>
        
        <a href="" class="nav-header" ><i class="icon-edit"></i>Mata Pelajaran</a>
        
        <a href="#keuangan-menu" class="nav-header" data-toggle="collapse"><i class="icon-money"></i>Keuangan</a>
        <ul id="keuangan-menu" class="nav nav-list collapse">
            <li ><a href="">SPP</a></li>
            <li ><a href="">DPP</a></li>
        </ul>
        <a href="#bk-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Bimbingan Konseling</a>
        <ul id="bk-menu" class="nav nav-list collapse">
            <li ><a href="">wew</a></li>
            <li ><a href="">wow</a></li>
        </ul>
        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-envelope-alt"></i>SMS Gateway<span class="label label-info">Premium</span></a>
        <a href="" class="nav-header" ><i class="icon-file"></i>Report<span class="label label-info">Premium</span></a>
        <a href="" class="nav-header" ><i class="icon-comment"></i>Help</a>
        
        
        
        </ul>

        
    </div>
    

    
    <div class="content">
        
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="number">12</span>Karyawan</p>
     <?php 
			include 'koneksi.php';
                   
                  $queryjumlahguru = "SELECT COUNT(NIP) FROM `guru`";
                  $exejumlahguru = mysql_query($queryjumlahguru);
     while($id_jumlahguru = mysql_fetch_assoc($exejumlahguru)){
                       
                        $jumlahguru=$id_jumlahguru['COUNT(NIP)'];
					} ?>
    <p class="stat"><span class="number"><?php echo $jumlahguru; ?></span>Guru</p>
    <p class="stat"><span class="number">350</span>Siswa</p>
</div>

            <h1 class="page-title">Dashboard</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Dashboard</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    

<div class="row-fluid">

    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Butuh Bantuan:</strong> sms or call : 081-555-369-300 ( Dwi Rahman H )
    </div>

    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">Data</a>
        <div id="page-stats" class="block-body collapse in">

            <div class="stat-widget-container">
                <div class="stat-widget">
                    <div class="stat-button">
                     <?php 
			include 'koneksi.php';
                   
                  $querypengumuman = "SELECT COUNT(id) FROM `pengumuman`";
                  $exepengumuman = mysql_query($querypengumuman);
          while($id_pengumuman = mysql_fetch_assoc($exepengumuman)){
                       
                        $idpengumuman=$id_pengumuman['COUNT(id)'];
					} ?>
                        <p class="title"><?php echo $idpengumuman ?></p>
                        <p class="detail">Pengumuman</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                    <?php 
			include 'koneksi.php';
                   
                  $queryberita = "SELECT COUNT(id) FROM `berita`";
                  $exeberita = mysql_query($queryberita);
          while($id_berita = mysql_fetch_assoc($exeberita)){
                       
                        $id=$id_berita['COUNT(id)'];
					} ?>
                        <p class="title"><?php echo $id; ?></p>
                        <p class="detail">Berita Sekolah</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                    <?php 
			include 'koneksi.php';
                  $queryjumlahmapel = "SELECT COUNT(kode_mapel)FROM `mata_pelajaran` ";
                  $exejumlahmapel = mysql_query($queryjumlahmapel);
     while($id_jumlahmapel = mysql_fetch_assoc($exejumlahmapel)){
                       
                        $jumlahmapel=$id_jumlahmapel['COUNT(kode_mapel)'];
					} ?>
                        <p class="title"><?php echo $jumlahmapel; ?></p>
                        <p class="detail">Mata Pelajaran</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                    <?php 
			include 'koneksi.php';
                   
                  $queryjumlahguru = "SELECT COUNT(NIP) FROM `guru`";
                  $exejumlahguru = mysql_query($queryjumlahguru);
     while($id_jumlahguru = mysql_fetch_assoc($exejumlahguru)){
                       
                        $jumlahguru=$id_jumlahguru['COUNT(NIP)'];
					
                   echo     "<p class=title>". $jumlahguru ."</p>"; } ?>
                        <p class="detail">Guru</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">Users<span class="label label-warning">+10</span></a>
        <div id="tablewidget" class="block-body collapse in">
            <table class="table">
           
					
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
               <?php 
			include 'koneksi.php';
                   
                    $query = "SELECT *
FROM `admin`
LIMIT 4";
                    $exe = mysql_query($query);
                    while($row = mysql_fetch_assoc($exe)){
                       
                        $a = $row['id'];
                        $b = $row['first_name'];
                        $c = $row['last_name'];
                        $d = $row['username'];
              echo  "<tr>";
             echo      "<td>".$b."</td>";
              echo     "<td>".$c."</td>";
              echo    "<td>".$d."</td>";
             echo    "</tr>";
        }
                        ?>
              </tbody>
            </table>
            <p><a href="users.php">More...</a></p>
        </div>
    </div>
    <div class="block span6">
        <a href="#widget1container" class="block-heading" data-toggle="collapse">Berita Sekolah </a>
        <div id="widget1container" class="block-body collapse in">
           <?php 
			include 'koneksi.php';
                   
                    $query1 = "SELECT *
FROM `berita`
ORDER BY `berita`.`id` DESC
LIMIT 1 ";
                    $exe1 = mysql_query($query1);
                    while($row1 = mysql_fetch_assoc($exe1)){
                       
                        $aa = $row1['judul'];
                        $bb = $row1['isi'];
         echo   "<h2>".$aa."</h2>";
          echo  "<p>".$bb."</p>";
            
					}?>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="block span6">
        <div class="block-heading">
            <span class="block-icon pull-right">
                <a href="#" class="demo-cancel-click" rel="tooltip" title="Click to refresh"><i class="icon-refresh"></i></a>
            </span>

            <a href="#widget2container" data-toggle="collapse">Detail Guru</a>
        </div>
        <div id="widget2container" class="block-body collapse in">
            <table class="table list">
              <tbody>
               <?php 
			include 'koneksi.php';
                   
                    $query1 = "SELECT *
FROM `guru`
ORDER BY `guru`.`NIP` ASC
LIMIT 4 ";
                    $exe1 = mysql_query($query1);
                    while($row1 = mysql_fetch_assoc($exe1)){
                       
                        $aa = $row1['nama'];
                        $bb = $row1['telp'];
						$cc = $row1['jabatan'];
             echo     "<tr>";
             echo          "<td>";
      echo    "<p><i class=icon-user></i> ".$aa."</p>";
               echo       "</td>";
               echo        "<td>";
              echo             "<p> ".$bb."</p>";
               echo        "</td>";
                echo       "<td>";
                 echo          "<p> " . $cc ."</p>";
                   echo        "<a href=#>Detail</a>";
                 echo      "</td>";
              echo     "</tr> ";    
					} ?>
              </tbody>
            </table>
        </div>
    </div>
    <div class="block span6">
        <p class="block-heading">Pengumuman Sekolah</p>
        <div class="block-body">
         <?php 
			include 'koneksi.php';
                   
                    $query1 = "SELECT *
FROM `pengumuman`
ORDER BY `pengumuman`.`id` DESC
LIMIT 1 ";
                    $exe1 = mysql_query($query1);
                    while($row1 = mysql_fetch_assoc($exe1)){
                       
                        $aa = $row1['judul'];
                        $bb = $row1['isi'];
         echo   "<h2>".$aa."</h2>";
          echo  "<p>".$bb."</p>";
            
					}?>
        
    
            <p><a class="btn btn-primary btn-large">Lainya &raquo;</a></p>
        </div>
    </div>
</div>


                    
                    <footer>
                        <hr>
                        <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                        <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                        

                        <p>&copy; 2012 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                    </footer>
                    
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



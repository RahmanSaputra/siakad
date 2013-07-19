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
	<script src="../source/lib/jquery-1.8.3.js" type="text/javascript"></script>
    <script src="../source/lib/combo.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../source/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../source/stylesheets/datepicker.css">
    <link rel="stylesheet" type="text/css" href="../source/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="../source/stylesheets/combo.css">
    <link rel="stylesheet" href="../source/lib/font-awesome/css/font-awesome.css">
	<script src="../source/lib/bootstrap-datepicker.js" type="text/javascript"></script>
	 <script src="../source/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  

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
                              <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
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
            
            <h1 class="page-title">Pelajaran</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Pelajaran</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    

  </div>
</div>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab">Data Pelajaran</a></li>
    </ul>
    <form action="pelajaransearch.php" method="post" class="search form-inline" id="form-search">
                <input name="search" type="text" class="typeahead" id="search" placeholder="Search..">
               <script>
        $(document).ready(function(){
            $('#search').typeahead({
                source: function(query, process) {
                    $.ajax({
                        url: 'searchpelajaran.php',
                        type: 'POST',
                        data: 'query=' + query,
                        dataType: 'JSON',
                        async: true,
                        success: function(data) {
                            process(data);
                                           
                        }
                    });
                }
            });
        });
    </script>
       <a class="btn btn-primary" onclick="document.getElementById('form-search').submit();">
      <i class="icon-search icon-large"></i> Search</a>
      </form>
        <div>
         <div class="well">
        <table class="table">
          <thead>
            <tr>
           
             <th>No</th>
              <th>NIP</th>
              <th>Nama Guru</th>
              <th>Mata Pelajaran</th>
              <th style="width: 26px;"></th>
            </tr>
          </thead>
          <tbody>
         <?php                    
   include 'koneksi.php';
    $query = $_POST['search'];
    $sql = mysql_query("SELECT pembelajaran.id_pembelajaran, guru.NIP, guru.nama, mata_pelajaran.nama_mapel, mata_pelajaran.kode_mapel
FROM guru
RIGHT JOIN pembelajaran 
ON guru.NIP = pembelajaran.NIP
RIGHT JOIN mata_pelajaran 
ON pembelajaran.kode_mapel = mata_pelajaran.kode_mapel
WHERE nama LIKE '%{$query}%'");
    $array = array();
    while ($row = mysql_fetch_assoc($sql)) {
                           $e = $row['kode_mapel'];
                            $d = $row['NIP'];  
							$b = $row['nama'];
                            $c = $row['nama_mapel'];
							$a = $row['id_pembelajaran']; ?>
              <tr>
                 <td><?php echo $a; ?></td>
                 <td><?php echo $d; ?></td>
                 <td><?php echo $b; ?></td>
                 <td><?php echo $c; ?></td>
                  
                 <td>
    <a href=update_pendaftaran.php?no_daftar=<?php echo $a; ?>><i class=icon-pencil></i></a>
    <a href="#myModal" role="button" data-toggle="modal" id="<?php echo $a; ?>"><i class=icon-remove></i></a>
          </td>
         </tr>
                                    <?php   } ?>
                    
   </tbody>
     </table>
    </form>
      </div>
<div class="pagination">
    <ul>
        <li><a href="pelajaran.php"><-- Back</a></li>
    </ul>
</div>

    <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the guru?</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
          <a class="btn btn-primary" a href="remove_pendaftaran.php?no_daftar=<?php echo $a; ?>" id="modal-delete-button">
      <i class="icon-search icon-large"></i> Delete</a>
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
    


    <script type="text/javascript">
	 $(document).ready(function(){
    $('.combobox').combobox();
  });
	$('#dp3').datepicker();
	
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
  
  </body>
</html>



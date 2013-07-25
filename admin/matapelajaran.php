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
                            <i class="icon-user"></i> Jack Smith
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Sistem Akademik</span> <span class="second">SMKN 9 Malang</span></a>
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
            
            <h1 class="page-title">Mata Pelajaran</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Mata Pelajaran</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    <form class="search form-inline">
            <input type="text" placeholder="Search...">
            <a class="btn btn-primary" href="#">
  <i class="icon-search icon-large"></i> Search</a>
        </form>     
<div class="btn-toolbar">
<a href="#Modalbaru" role="button" data-toggle="modal" class="btn btn-primary">
      <i class="icon-plus-sign icon-large"></i> New MataPelajaran</a>    <button class="btn">Import</button>
    <button class="btn">Export</button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div>
         <div class="well">
        <table class="table">
            <tr>
           		<th>No</th>
              <th>NIP</th>
              <th>Nama Guru</th>
              <th>Mata Pelajaran</th>
              <th style="width: 26px;"></th>
            </tr>
            <tr>
              	<td></td>
                </tr>
         <?php include 'koneksi.php';
                       
    $dataPerPage=4;
     
    if(isset($_GET['page']))
    {
    $noPage=$_GET['page'];
    }
    else
    {
    $noPage=1;
    }
     
    $offset=($noPage-1) * $dataPerPage;
    $query = "SELECT pembelajaran.id_pembelajaran, guru.NIP, guru.nama, mata_pelajaran.nama_mapel, mata_pelajaran.kode_mapel
FROM guru
RIGHT JOIN pembelajaran 
ON guru.NIP = pembelajaran.NIP
RIGHT JOIN mata_pelajaran 
ON pembelajaran.kode_mapel = mata_pelajaran.kode_mapel
ORDER BY `pembelajaran`.`id_pembelajaran` ASC
LIMIT $offset,$dataPerPage";
                        $exe = mysql_query($query);
                        while($row = mysql_fetch_assoc($exe)){
            				$e = $row['kode_mapel'];
                            $d = $row['NIP'];  
							$b = $row['nama'];
                            $c = $row['nama_mapel'];
							$a = $row['id_pembelajaran'];
 ?>
              <tr>
              	
              	<td><?php echo $a; ?></td>
                 <td><?php echo $d; ?></td>
                 <td><?php echo $b; ?></td>
                 <td><?php echo $c; ?></td>
                  
                 <td>
    <a href=update_pendaftaran.php?no_daftar=<?php echo $e; ?>><i class=icon-pencil></i></a>
    <a href="#myModal" role="button" data-toggle="modal" id="<?php echo $e; ?>"><i class=icon-remove></i></a>
          </td>
         </tr>
                                    <?php   } ?>
                    <?php
                                    include 'koneksi.php';
                       
    $dataPerPage=4;
     
    if(isset($_GET['page']))
    {
    $noPage=$_GET['page'];
    }
    else
    {
    $noPage=1;
    }
     
    $offset=($noPage-1) * $dataPerPage;
                    $query=mysql_query("select count(*) jumData from mata_pelajaran");
    $data=mysql_fetch_array($query);
     
    $jumData=$data['jumData'];
    $jumPage=ceil($jumData/$dataPerPage);
      echo  "</table>";
      echo "</div>";
      echo "<div class=pagination>";
     echo "<ul>";
    if($noPage >1)
    {
    echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a></li>";
    }
     
    for($page = 1; $page <= $jumPage; $page++)
    {
    if ((($page >= $noPage - 2) && ($page <= $noPage + 2)) || ($page == 1) || ($page == $jumPage))
    {
     
    if ($page == $noPage) echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a></li>";
    else echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a></li> ";
    $showPage=$page;
    }
    }
     
     
    if ($noPage < $jumPage) echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &gt;&gt;</a></li>";
    echo "</ul>";
    echo "</div>";
    ?>
        </div>
    </form>
      </div>
  </div>

</div>

<!---- MODAL delete UNTUK delete GURU --->
    <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Menghapus mata pelajaran ?</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
          <a class="btn btn-primary" a href="remove_pelajaran.php?kode_mapel=<?php echo $e; ?>" id="modal-delete-button">
      <i class="icon-search icon-large"></i> Delete</a>
        </div>
    </div>     
    
    
          <form action="savematapelajaran.php" method="post" id="saveguru">
    <div class="modal small hide fade" id="Modalbaru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="ModalbaruLabel">Add Mata Pelajaran</h3>
        </div>
        <div class="modal-body">
         <table width="500" border="0" align="center">
      <tr>
        <td align="left" valign="middle">Mata Pelajaran :</td>
        <td valign="middle"><?php
		include 'koneksi.php';
		$que = "SELECT kode_mapel
FROM `mata_pelajaran`
GROUP BY kode_mapel;";
                        $kelas = mysql_query($que);
                       
     echo "<select class=combobox name=kode_mapel required=required>";
	  while($rowss = mysql_fetch_assoc($kelas))
		 {
      echo"<option name=".$rowss['kode_mapel'].">".$rowss['kode_mapel']."</option>";
         } 
          echo   "</select>"; ?>
      </tr>
      <tr>
        <td>Nama Guru :</td>
        <td valign="middle"><?php
		include 'koneksi.php';
		$que = "SELECT NIP, nama
FROM `guru`";
                        $kelas = mysql_query($que);
                       
     echo "<select class=combobox name=NIP required=required>";
	  while($rowss = mysql_fetch_assoc($kelas))
		 {
      echo"<option name=".$rowss['NIP'].">".$rowss['NIP']."</option>";
         } 
          echo   "</select>"; ?>
      </tr>
      <tr>
        <td>Nama Kelas :</td>
        <td valign="middle"><?php
		include 'koneksi.php';
		$que = "SELECT kode_kelas
FROM `kelas`";
                        $kelas = mysql_query($que);
                       
     echo "<select class=combobox name=kode_kelas required=required>";
	  while($rowss = mysql_fetch_assoc($kelas))
		 {
      echo"<option name=".$rowss['kode_kelas'].">".$rowss['kode_kelas']."</option>";
         } 
          echo   "</select>"; ?>
      </tr>
    </table>
      </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <a class="btn btn-primary" onclick="document.getElementById('saveguru').submit();">
      <i class="icon-save icon-large"></i> Simpan</a>
        </div>
    </div>
    </form>
    <!---  -->
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



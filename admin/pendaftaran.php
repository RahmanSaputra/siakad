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
            <li ><a href="pendaftaran.php">Pendaftaran</a></li>
            <li ><a href="">Hasil Seleksi</a></li>
            <li ><a href="pengumuman.php">Pengumuman</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-cog"></i>Setting<span class="label label-info">+3</span></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="account.php">Profile</a></li>
            <li ><a href="logout.php">Log Out</a></li>
            <li ><a href="">Reset Password</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-user-md"></i>Guru <i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="guru.php">Data Guru</a></li>
            <li ><a href="matapelajaran.php">Data Pengajar</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-user"></i>Siswa</a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="privacy-policy.html">wow</a></li>
            <li ><a href="">wew</a></li>
        </ul>
		<a href="#kelas-menu" class="nav-header" data-toggle="collapse"><i class="icon-sitemap"></i>Kelas</a>
        <ul id="kelas-menu" class="nav nav-list collapse">
            <li ><a href="kelas.php">Data Kelas</a></li>
        </ul>
        
        <a href="#pelajaran-menu" class="nav-header" data-toggle="collapse" ><i class="icon-edit"></i>Mata Pelajaran</a>
        <ul id="pelajaran-menu" class="nav nav-list collapse">
            <li ><a href="pelajaran.php">Data Pelajaran</a></li>
            <li ><a href="matapelajaran.php">Mata Pelajaran</a></li>
        </ul>
        
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
        <a href="" class="nav-header" ><i class="icon-tasks"></i>Absensi<span class="label label-info">Premium</span></a>
        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-envelope-alt"></i>SMS Gateway<span class="label label-info">Premium</span></a>
        <a href="" class="nav-header" ><i class="icon-file"></i>Report<span class="label label-info">Premium</span></a>
        <a href="" class="nav-header" ><i class="icon-comment"></i>Help</a>   
        </ul>  
    </div>
    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Pendaftaran</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Pendaftaran</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
<a href="home.php" data-toggle="modal" class="btn">Back</a>
    <button class="btn btn-primary" onclick="document.getElementById('save-pendaftaran').submit();"><i class="icon-save"></i> Save</button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Daftar</a></li>
      <li><a href="#profile" data-toggle="tab">Data Pendaftaran</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    <form action="savependaftaran.php" method="post" id="save-pendaftaran">
        <label>Nama</label>
        <input name="nama" type="text" class="input-xlarge" placeholder="Nama" >
        <label>Kelamin</label>
        <input name="kelamin" type="text" class="input-xlarge" placeholder="Laki / Perempuan" id="nama">
        <label>Tempat Lahir</label>
        <input name="tempat_lahir" type="text"  placeholder="Tempat Lahir" class="input-xlarge">
        <label>Tanggal Lahir</label>
      	<input name="tgl_lahir" type="text" value="2013-04-14" data-date-format="yyyy-mm-dd" id="dp3" class="input-xlarge">
         <label>Asal Sekolah</label>
        <input name="asal_sekolah" type="text" placeholder="Asal Sekolah" class="input-xlarge">
        <label>No. Ijasah</label>
        <input name="no_ijasah" type="text" placeholder="No Ijasah" class="input-xlarge">
        <label>Nama Ortu</label>
        <input name="nama_orgtua" type="text" placeholder="Nama Orang Tua" class="input-xlarge">
        <label>Pekerjaan</label>
        <input name="pekerjaan" type="text" placeholder="Pekerjaan" class="input-xlarge">
        <label>Alamat</label>
        <textarea rows="3" name="alamat" class="input-xlarge" placeholder="Alamat"></textarea>
        <label>Telp / HP </label>
        <input name="telp" type="text" placeholder="Telp / HP" class="input-xlarge">
        <label>Nilai UN</label>
        <input name="nilai_un" type="text" placeholder="Nilai Ujian" class="input-xlarge">
        <label>Alasan</label>
        <input name="alasan" type="text" placeholder="Alasan" class="input-xlarge">
        <label>Keterangan</label>
        <input name="keterangan" type="text" placeholder="Keterangan" class="input-xlarge">
        <label>Kode Kelas</label>
        <?php
		include 'koneksi.php';
		$que = "SELECT kode_kelas
FROM `kelas`
GROUP BY kode_kelas;";
                        $kelas = mysql_query($que);
                       
     echo "<select class=combobox name=kode_kelas required=required>";
	  while($rowss = mysql_fetch_assoc($kelas))
		 {
      echo"<option name=".$rowss['kode_kelas'].">".$rowss['kode_kelas']."</option>";
         } 
          echo   "</select>"; ?>
    </form>
      </div>
      <div class="tab-pane fade" id="profile">
    <form action="pendaftaransearch.php" method="post" class="search form-inline" id="form-search">
                <input name="search" type="text" class="typeahead" id="search" placeholder="Search..">
               <script>
        $(document).ready(function(){
            $('#search').typeahead({
                source: function(query, process) {
                    $.ajax({
                        url: 'searchpendaftaran.php',
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
              <th>Nama</th>
              <th>Kelamin</th>
              <th>Tgl Lahir</th>
              <th>Asal Sekolah</th>
              <th>Nama Ortu</th>
              <th>Pekerjaan</th>
              <th>Alamat</th>
              <th>Kelas</th>
              <th>Nilai</th>
              <th style="width: 26px;"></th>
            </tr>
          </thead>
          <tbody>
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
    $query = "SELECT *
FROM `pendaftaran`
ORDER BY `pendaftaran`.`nilai_un` DESC
LIMIT $offset,$dataPerPage";
                        $exe = mysql_query($query);
                        while($row = mysql_fetch_assoc($exe)){
                           
                            $a = $row['no_daftar'];  
							$b = $row['nama'];
                            $c = $row['kelamin'];
                            $d = $row['tempat_lahir'];
							$e = $row['tgl_lahir'];
                            $f = $row['asal_sekolah'];
							$g = $row['no_ijasah'];
							$h = $row['nama_orgtua'];
							$i = $row['pekerjaan'];
							$j = $row['alamat'];
							$k = $row['telp'];
							$l = $row['nilai_un'];
							$m = $row['alasan'];
							$n = $row['keterangan'];
							$o = $row['kode_kelas']; ?>
              <tr>
                 <td><?php echo $a; ?></td>
                 <td><?php echo $b; ?></td>
                 <td><?php echo $c; ?></td>
                  <td><?php echo $e; ?></td>
                  <td><?php echo $f; ?></td>
                  <td><?php echo $h; ?></td>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $j; ?></td>
                  <td><?php echo $o; ?></td>
                  <td><?php echo $l; ?></td>
                  
                 <td>
    <a href=update_pendaftaran.php?no_daftar=<?php echo $a; ?>><i class=icon-pencil></i></a>
    <a href="#myModal" role="button" data-toggle="modal" id="<?php echo $a; ?>"><i class=icon-remove></i></a>
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
                    $query=mysql_query("select count(*) jumData from pendaftaran");
    $data=mysql_fetch_array($query);
     
    $jumData=$data['jumData'];
    $jumPage=ceil($jumData/$dataPerPage);
    echo "</tbody>";
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
                        <p class="pull-right">Sistem Akademik by <a href="http://www.oksigenoffice.com" target="_blank">Team Oksigen</a></p>
                        <p>&copy; 2013 <a href="http://www.oksigenoffice.com" target="_blank">OksigenOffice</a></p>
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



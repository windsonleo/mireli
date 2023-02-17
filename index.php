<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="CryptoDash admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, CryptoDash Cryptocurrency Dashboard Template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="ThemeSelection">
    <title>Index</title>
    <link rel="apple-touch-icon" href="../images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../images/ico/logo_mi.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" type="text/css" href="../css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="../css/pages/dashboard-ico.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-bg-color">
      <div class="navbar-wrapper">
        <div class="navbar-header d-md-none">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item d-md-none"><a class="navbar-brand" href="index.php"><img class="brand-logo d-none d-md-block" alt="CryptoDash admin logo" src="../images/logo/logo_mi.png"><img class="brand-logo d-sm-block d-md-none" alt="CryptoDash admin logo sm" src="../images/logo/logo_mi.png"></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v">   </i></a></li>
          </ul>
        </div>
        <div class="navbar-container">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Pesquise...">
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         

              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="../images/portrait/small/images_user.png" alt="avatar"></span><span class="mr-1">Usuario<span class="user-name text-bold-700">Padrão</span></span></a>
                <div class="dropdown-menu dropdown-menu-right">             <a class="dropdown-item" href="account-profile.html"><i class="ft-award"></i>Usuario Padrão</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="account-profile.html"><i class="ft-user"></i> Profile</a><a class="dropdown-item" href="wallet.html"><i class="icon-wallet"></i> My Wallet</a><a class="dropdown-item" href="transactions.html"><i class="ft-check-square"></i> Transactions              </a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="account-login.html"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-dark menu-bg-default rounded menu-accordion menu-shadow">
      <div class="main-menu-content"><a class="navigation-brand d-none d-md-block d-lg-block d-xl-block" href="index.php"><img class="brand-logo" alt="CryptoDash admin logo" src="../images/logo/logo_mi.png"/></a>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="active"><a href="index.php"><i class="icon-grid"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="consultass.php"><i class="icon-support"></i><span class="menu-title" data-i18n="">Consultas</span></a>
          </li>
          <li class=" nav-item"><a href="pacientess.php"><i class="icon-user-following"></i><span class="menu-title" data-i18n="">Pacientes</span></a>
          </li>
          <li class=" nav-item"><a href="psicologoss.php"><i class="icon-user"></i><span class="menu-title" data-i18n="">Psicologos</span></a>
          </li>

                              <li class="nav-item"><a href="servicos.php"><i class="la la-dashcube"></i><span class="menu-title" data-i18n="">Serviços</span></a>
          </li>

          <li class=" nav-item"><a href="usuarios.php"><i class="la la-users"></i><span class="menu-title" data-i18n="">Usuarios</span></a>
          </li>


          


        </ul>
      </div>
    </div>

    <?php 
//include "conexao.php";
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname="agenda";*/
    
$servername = "hcontainers-us-west-31.railway.app";
$username = "root";
$password = "lW8y65JQW7StMH5N2aGL";
$dbname="railway";

// Create connection
$conn = mysqli_connect($servername, $username);
$banco = mysqli_select_db($conn,$dbname);
mysqli_set_charset($conn,'utf8');
// Check connection
if (!$conn) {
  die("Falha na Conexao: " . mysqli_connect_error());
}

$sql = mysqli_query($conn,"select * from paciente") or die("Erro");
$sql2 = mysqli_query($conn,"select * from psicologo") or die("Erro");
$sql3 = mysqli_query($conn,"select * from consulta") or die("Erro");


$dados = mysqli_num_rows($sql);
$dados2 = mysqli_num_rows($sql2);
$dados3 = mysqli_num_rows($sql3);

 ?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- ICO Token &  Distribution-->






<div class="row match-height">

    <div class="col-xl-3 col-lg-6">
  <div class="card">
        <div class="card-header">
            <h6 class="card-title text-center">Pacientes</h6>            
        </div>
        <div class="card-content collapse show">
            <div class="card-body">

                <div class="text-center row clearfix mb-2">
                  <div class="col-12">
                    <i class="icon-user-following font-large-3 bg-success bg-glow white rounded-circle p-3 d-inline-block"></i>
                  </div>
                </div>
                <h3 class="text-center"><?php echo $dados;?></h3>

                                      <div class="col-md-2 col-12 py-1">
       <a href="pacientess.php" class="mb-0 btn-sm btn btn-outline-success round">Ver</a>
                            </div>
            </div>

        </div>
    </div>
    </div>

        <div class="col-xl-3 col-lg-6">
  <div class="card">
        <div class="card-header">
            <h6 class="card-title text-center">Psicologos</h6>            
        </div>
        <div class="card-content collapse show">
            <div class="card-body">

                <div class="text-center row clearfix mb-2">
                  <div class="col-12">
                    <i class="icon-user font-large-3 bg-primary bg-glow white rounded-circle p-3 d-inline-block"></i>
                  </div>
                </div>
                <h3 class="text-center"><?php echo $dados2;?></h3>

                                      <div class="col-md-2 col-12 py-1">
    <a href="psicologoss.php" class="mb-0 btn-sm btn btn-outline-primary round">Ver</a>
                            </div>

            </div>

        </div>
    </div>
    </div>

        <div class="col-xl-3 col-lg-6">
  <div class="card">
        <div class="card-header">
            <h6 class="card-title text-center">Consultas</h6>            
        </div>
        <div class="card-content collapse show">
            <div class="card-body">

                <div class="text-center row clearfix mb-2">
                  <div class="col-12">
                    <i class="icon-support font-large-3 bg-warning bg-glow white rounded-circle p-3 d-inline-block"></i>
                  </div>
                </div>
                <h3 class="text-center"><?php echo $dados3;?> </h3>

                          <div class="col-md-2 col-12 py-1">
                 <a href="consultass.php" class="mb-0 btn-sm btn btn-outline-warning round">Ver</a>
                            </div>



            </div>

        </div>
    </div>
    </div>

          <div class="col-xl-3 col-lg-6">
  <div class="card">
        <div class="card-header">
            <h6 class="card-title text-center">Serviços</h6>            
        </div>
        <div class="card-content collapse show">
            <div class="card-body">

                <div class="text-center row clearfix mb-2">
                  <div class="col-12">
                    <i class="la la-dashcube font-large-3 bg-primary white bg-lighten-2 white rounded-circle p-3 d-inline-block"></i>
                  </div>
                </div>
              
   <h3 class="text-center"> 6 </h3>
                          <div class="col-md-2 col-12 py-1">
                 <a href="#" class="  mb-0  btn-sm btn btn-outline bg-primary white bg-lighten-2 round">Ver</a>
                            </div>



            </div>

        </div>
    </div>
    </div>
    <div class="col-xl-8 col-12">
        <div class="card card-transparent">
            <div class="card-header card-header-transparent py-20">
                <div class="btn-group dropdown">
                    <h6>Consultas por Trimestre</h6>
                </div>
            </div>
            <div id="ico-token-supply-demand-chart" class="height-300"></div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card card-transparent">
            <div class="card-header card-header-transparent">
                <h6 class="card-title">Status das Consultas</h6>
            </div>
            <div class="card-content">
                <div id="token-distribution-chart" class="height-200 donut donutShadow"></div>
                <div class="card-body">
                    <div class="row mx-0">
                        <ul class="token-distribution-list col-md-6 mb-0">
                            <li class="crowd-sale">Finalizada <span class="float-right text-muted">41%</span></li>
                            <li class="team">Pendente <span class="float-right text-muted">18%</span></li>
                            <li class="advisors">Cancelada <span class="float-right text-muted">15%</span></li>
                        </ul>
                        <ul class="token-distribution-list col-md-6 mb-0">
                            <li class="project-reserve">Confirmada <span class="float-right text-muted">10%</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">
    <div id="recent-transactions" class="col-12">
        <h6 class="my-2">Consultas Hoje</h6>
        <div class="card">
            <div class="card-content">
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">Id</th>
                                <th class="border-top-0">Ativo</th>
                                <th class="border-top-0">Paciente</th>
                                <th class="border-top-0">Psicologo</th>
                                <th class="border-top-0">Data</th>
                                <th class="border-top-0">Hora</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Data Registro</th>
                                <th class="border-top-0">Visualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php 
//include "conexao.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname="agenda";

// Create connection
$conn = mysqli_connect($servername, $username);
$banco = mysqli_select_db($conn,$dbname);
mysqli_set_charset($conn,'utf8');
// Check connection
if (!$conn) {
  die("Falha na Conexao: " . mysqli_connect_error());
}

$sql = mysqli_query($conn,"select * from consulta where dataconsulta =  CURDATE()") or die("Erro");


  while($dados = mysqli_fetch_assoc($sql)){
  $id = $dados['id'];
  $ativo = $dados['ativo'];
  $paciente = $dados['paciente_id'];
  $datan = $dados['dataconsulta'];
  $hora = $dados['horaconsulta'];
  $psicologo = $dados['psicologo_id'];
  $status = $dados['status'];
  $datareg = $dados['dataregistro'];

   ?>


                            <tr>
                                <td class="text-truncate"> <?php echo $id; ?></td>
                                <td class="text-truncate"><a href="#"> <?php 
if ($ativo = 1): ?>
   <i class="la la-thumbs-up success float-right"></i>
<?php else: ?>
      <i class="la la-thumbs-up danger float-right"></i>

<?php endif; ?></a> </td>
                                <td class="text-truncate"><a href="#"><?php echo $paciente; ?></a><?php $paciente; ?></td>
                                <td class="text-truncate">
                                    <a href="#" ><?php echo $psicologo; ?></a>
                                </td>
                                <td class="text-truncate p-1"><?php echo $datan; ?></td>
                                <td>
                                    <?php echo $hora ?>
                                </td>
                                <td class="text-truncate">
                                    <i class="la la-thumbs-up warning float-right"></i>
                                  <?php echo $status; ?></td>
                                <td><?php echo $datareg; ?></td>
                                <td><a href="#"><i class="la la-cog primary float-right"></i> </a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Recent Transactions -->
<!-- Basic Horizontal Timeline -->

<!--/ Basic Horizontal Timeline -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-transparent">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; <script>
          document.write(new Date().getFullYear())
          </script> <a class="text-bold-800 grey darken-2" href="https://themeselection.com/" target="_blank">ThemeSelection </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <script src="../vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
    <script src="../vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="../js/core/app-menu.js" type="text/javascript"></script>
    <script src="../js/core/app.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../js/scripts/pages/dashboard-ico.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

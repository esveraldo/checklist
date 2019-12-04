<?php require_once '../vendor/autoload.php'; ?>
<?php
ob_start();

use App\DI\Container;

$ses = Container::getSes();
if ($ses->ses()) {
    header("Location: /checklist/public/login");
}

set_time_limit(0);
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="../assets/css/home.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>Checklist Office Total</title>
    </head>
    <body>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/checklist/public/home"><img src="../assets/images/logo-officetotal.png" width="100px" /></a>
                    </div>
                    <!--                    <ul class="nav navbar-nav">
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="#">Page 1</a></li>
                                            <li><a href="#">Page 2</a></li>
                                        </ul>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> <?php echo $_SESSION['nome']; ?> <span class="caret"></span></a>
                        </li>
                        <li><a href="logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- /container -->
        </div>

        <!-- /Header -->

        <!-- Main -->

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12" style="border: 1px solid #EEEEEE; padding: 10px; border-top-right-radius: 25px; border-bottom-right-radius: 25px; background: #EEEEEE;">

            <ul class="nav nav-pills nav-stacked">
                <!--<li class="nav-header"></li>-->
                <li><a href="/checklist/public/home"><i class="fa fa-home"></i> Página inicial</a></li>
                <li><a href="/checklist/public/checklists/listagem"><i class="fa fa-list"></i> Checklist</a></li>
                <!--<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-tags"></i> Referal Code</a></li>
                <li><a href="#"><i class="fa fa-history"></i> Redeem History</a></li>
                <li><a href="#"><i class="fa fa-lock"></i> Change Password</a></li>-->

            </ul>
        </div><!-- /span-3 -->
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
            <!-- Right -->


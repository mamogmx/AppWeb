<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../login.php';

$conn = new PDO(DSN,DB_USER,DB_PWD);
extract($_REQUEST);
$sql = utils::dsprintf("SELECT data FROM sue.%(form)s WHERE pratica=?",$_REQUEST);
$stmt = $conn->prepare($sql);
if($stmt->execute(Array($pratica))){
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    for($i=0;$i<count($res);$i++){
        $data[]=json_decode($res[$i]["data"]);
    }
}
else{
    echo sprintf("<p>%s</p>",DSN);
    echo "<p>$sql</p>";
    echo $pratica;
    print_r($conn->errorInfo());
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SueWeb-1.0 Scrivania</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script>
            var data = <?php echo json_encode($data);?>;
        </script>
    </head>
    <body class="skin-blue">

        <div class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AppWeb-1.0
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">
                                    <?php
                                        /**/
                                    ?>
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->

                                        </li><!-- end message -->

                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have no notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>

                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have no tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->

                                            </a>
                                        </li><!-- end task item -->

                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Marco Carbone<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">

                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">

                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profilo</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Esci</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">

                        <div class="pull-left info">
                            <p>Benvenuto, Marco Carbone</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#" data-plugins="loadContent">
                                <i class="fa fa-dashboard"></i> <span>Procedimento</span>
                                <i class="fa fa-angle-left pull-right"></i>

                                <ul class="treeview-menu">
                                    <li class="active">
                                        <a href="#" data-plugins="loadContent" data-form="avvio_procedimento" data-mode="view">
                                            <i class="fa fa-play"></i> <span>Avvio Procedimento</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-plugins="loadContent" data-form="riferimenti" data-mode="view">
                                            <i class="fa fa-link"></i> <span>Pratiche Collegate</span>
                                        </a>
                                    </li>
                                    <li class="treeview">
                                        <a href="#" data-plugins="loadContent">
                                            <i class="fa fa-male"></i>
                                            <span>Soggetti</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#" data-plugins="loadContent" data-form="soggetti" data-mode="list" data-subjecttype=""><i class="fa fa-angle-double-right"></i> Richiedenti</a></li>
                                            <li><a href="#" data-plugins="loadContent" data-form="soggetti" data-mode="list" data-subjecttype=""><i class="fa fa-angle-double-right"></i> Professionisti</a></li>
                                            <li><a href="#" data-plugins="loadContent" data-form="soggetti" data-mode="list" data-subjecttype=""><i class="fa fa-angle-double-right"></i> Esecutori</a></li>
                                            <li><a href="#" data-plugins="loadContent" data-form="soggetti" data-mode="list" data-subjecttype=""><i class="fa fa-angle-double-right"></i> Altre Tipologie</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#" data-plugins="loadContent">
                                            <i class="fa fa-location-arrow"></i>
                                            <span>Ubicazione</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#" data-plugins="loadContent" data-form="indirizzi" data-mode="list"><i class="fa fa-angle-double-right"></i> Indirizzi</a></li>
                                            <li><a href="#" data-plugins="loadContent" data-form="catasto_terreni" data-mode="list"><i class="fa fa-angle-double-right"></i> Catasto Terreni</a></li>
                                            <li><a href="#" data-plugins="loadContent" data-form="catasto_urbano" data-mode="list"><i class="fa fa-angle-double-right"></i> Catasto Urbano</a></li>
                                            <li><a href="#" data-plugins="loadContent" data-form="mappa" data-mode="list"><i class="fa fa-angle-double-right"></i> Mappa</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#" data-plugins="loadContent" data-parameters='{}'><i class="fa fa-file"></i> Allegati</a></li>
                                    <li><a href="#" data-plugins="loadContent" data-parameters='{}'><i class="fa fa-send"></i> Integrazioni</a></li>
                                    <li><a href="#" data-plugins="loadContent" data-parameters='{}'><i class="fa fa-hourglass"></i> Sospensioni</a></li>
                                    <li><a href="#" data-plugins="loadContent" data-parameters='{}'><i class="fa fa-stop"></i> Conclusione Procedimento</a></li>
                                </ul>
                            </a>
                        </li>


                        <li class="treeview">
                            <a href="#" data-plugins="loadContent">
                                <i class="fa fa-laptop"></i>
                                <span>Istr. Tecnica</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> Dati di Progetto</a></li>
                                <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Relazione Tecnica</a></li>


                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" data-plugins="loadContent">
                                <i class="fa fa-edit"></i> <span>Istr. Amministrativa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" data-plugins="loadContent">
                                <i class="fa fa-paperclip"></i> <span>Titolo</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> Rilascio Titotlo</a></li>
                                <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Proroga</a></li>
                                <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Voltura</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" data-plugins="loadContent">
                                <i class="fa fa-wrench"></i> <span>Lavori</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Date Lavori</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Proroghe</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-eye"></i> <span>Sopralluoghi</span>

                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#" data-plugins="loadContent"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                    </div><!-- /.row -->

                    <!-- top row -->
                    <div class="row">


                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div id = "main-content" class="row">
                        
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <script src="/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->

        <!--<script src="/js/plugins/morris/morris.min.js" type="text/javascript"></script>-->
        <!-- Sparkline -->
        <script src="/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/js/AdminLTE/dashboard.js" type="text/javascript"></script>
        <script src="/js/init.js" type="text/javascript"></script>
        <script src="/js/app.controller.js" type="text/javascript"></script>
    </body>
</html>
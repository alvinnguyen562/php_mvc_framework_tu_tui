<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?= Config::get('site_name'); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../webroot/css/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../webroot/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?= Config::get('site_name'); ?></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        
                        <li><a <?php if(App::getRouter()->getController() == 'pages') {?>class="active"<?php } ?> href="/pages/">Pages</a></li>
                        <li><a <?php if(App::getRouter()->getController() == 'contacts') {?>class="active"<?php } ?> href="/contacts/">Contact us</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">

            <div class="starter-template">
                <?= $data['content']; ?>
            </div>

        </div><!-- /.container -->


        <h3>FOOTER WILL be HERE</h3>

        <script src="../webroot/js/jquery.js" type="text/javascript"></script>
        <script src="../webroot/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

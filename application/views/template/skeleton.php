<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="<?php echo $description ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="author" content="<?php echo $author ?>" />
        <link rel="shortcut icon" href="resources/img/favicon.png">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."cover.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."navstyle.css");?>">
    </head>
    <title> <?php echo $title ?> </title>
    <!-- Body -->
    <body class="site-background">
        <div class="cover-container">
             <div class="masthead clearfix">
                 <div class="inner">
                    <?php echo $body ?>
                 </div>
             </div>
        </div>
    </body>
    <!-- Scripts -->
        <script src="<?php echo base_url(JS."jquery-2.1.1.min.js");?>"></script>
        <script src="<?php echo base_url(JS."bootstrap.min.js");?>"></script>
        <script src="<?php echo base_url(JS."testing.js");?>"></script>
        <script src="<?php echo base_url(JS."randomID.js");?>"></script>
        <script src="<?php echo base_url(JS."indexnav.js");?>"></script>

</html>

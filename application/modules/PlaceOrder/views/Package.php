
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Package Allocation</title>

        <!-- Bootstrap core CSS -->
        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Documentation extras -->
        <link href="http://getbootstrap.com/assets/css/docs.min.css" rel="stylesheet">




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body role="document">

        <!-- Fixed navbar -->


        <div class="container theme-showcase" role="main">
            <h1>Package Details</h1>
            <?php
            foreach ($packages as $k => $pkg) {
                ?>
                <div class="bs-callout bs-callout-warning" style="border-left-color: #337ab7 !important;">
                    <h4 style="color:#337ab7 !important;"><?php echo "Package " . ($k + 1); ?></h4>
                    <p><b>Items - <?php echo $pkg->getItemList(); ?></b></p>
                    <p>Total weight <?php echo $pkg->getTotalWeight(); ?></p>
                    <p>Total price <?php echo $pkg->getPackageTotalPrice(); ?></p>
                    <p>Courier price <?php echo $pkg->getCurierPrice(); ?></p>
                </div>
                <?php
            }
            ?>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src=".http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=".http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

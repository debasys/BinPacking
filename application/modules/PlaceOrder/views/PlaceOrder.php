
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Place Order</title>

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


            <div class="page-header">
                <h1>Place Order</h1>
            </div>
            <form action="" method="post" name="frmPlaceOrder">
                <div class="row">

                    <div class="col-md-6" style="width:100% !important;">
                        <table class="table table-striped">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Add to Order</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($items as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->price; ?></td>
                                        <td><input type="checkbox" id="chk_" name="item[]" value="<?php echo $row->id; ?>" /></td>
                                    </tr>

                                    <?php
                                }
                                ?>              

                            </tbody>

                        </table>
                    </div>
                </div>
                <div><button type="submit" class="btn btn-primary">Place Order</button></div>
            </form>

        </div> <!-- /container -->
        <br/>
        <br/>
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

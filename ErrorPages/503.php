<!DOCTYPE html>
<html lang="en">

<head>
 <?php 
    include('../meta.php');
    ?>
    <title>503</title>
    <?php include('../style_css.php');?>

</head>

<body class="error">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <div class="logo">
                <h1>503</h1>
            </div>
            <p class="lead text-muted">Oops, an error has occurred. Service unavailable!</p>
            <div class="clearfix"></div>
            <div class="col-lg-6 col-lg-offset-3">
                <form action="index.html">
                    <div class="input-group">
                        <input type="text" placeholder="search ..." class="form-control">
                        <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
            <div class="sr-only">
                &nbsp;
            </div>
            <br>
            <div class="col-lg-6 col-lg-offset-3">
                <div class="btn-group btn-group-justified">
                    <a href="dashboard.html" class="btn btn-info">Return Dashboard</a>
                    <a href="index.html" class="btn btn-warning">Return Website</a>
                </div>
            </div>
        </div>
        <!-- /.col-lg-8 col-offset-2 -->
    </div>
</body>

</html>
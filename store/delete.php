<?php

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Store</h1>
                    </div>
                    <form action="../functions.php" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="empID" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this store?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="all.php" class="btn btn-default">No</a>
                            </p>


                            <input type="hidden" name="source" class="form-control" value="store">
                            <input type="hidden" name="type" class="form-control" value="delete">
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <?php require 'header.php';?>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h1>Column 1 </h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="success">
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr class="danger">
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr class="info">
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                        <tr class="warning">
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Indicates a successful or positive action.
                    </div>
                    <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong></strong><?php echo $_SESSION['uname'];?>
</div>
                </div>
                 <div class="col-md-4">
                    <button id="mybtn"  type="button" class="btn btn-primary">Default</button>
                    <br>
                    <br>
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="" value="">
                </div>
                 <div class="col-md-4">
                    <h1>Column 3 </h1>
                </div>
            </div>
        </div>
    </body>
</html>

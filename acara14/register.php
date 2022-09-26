<?php 
require ('koneksi.php');
require ('query.php');
$obj = new crud;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    $name = $_POST['txt_nama'];
    if($obj->inserData($email, $pass, $name)):
        echo '<div class="alert alert-success">Data berhasil disimpan</div>';
    else:
        echo '<div class="alert alert-danger">Data gagal disimpan</div>';
    endif;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
    .register-form {
        width: 340px;
        margin: 50px auto;
        font-size: 15px;
    }
    .register-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .register-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <div class="register-form">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2 class="text-center">Register</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="txt_email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="txt_pass">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama" required="required" name="txt_nama">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
        </div>     
    </form>
    <p class="text-center"><a href="login.php">Login</a></p>
</body>
</html>
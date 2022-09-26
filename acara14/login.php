<?php 
$koneksi = mysqli_connect("localhost","root","","user");
if(isset($_POST['submit'])){
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user_detail WHERE user_email='$email'";
        $result = mysqli_query($koneksi,$query);
        $num = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result)){
            $userVal = $row['user_email'];
            $passVal =$row['user_password'];
            $userName = $row['user_fullname'];
        }
        if($num != 0){
            if($userVal==$email && $passVal==$pass){
                header('Location: home.php?user_fullname='.urlencode($userName));
            }else{
                $error = 'user atau password salah!!';
                header('Location: login.php');
            }
        }else{
            $error = 'user tidak ditemukan!!';
            header('Location: login.php');
        }
    }else{
        $error = 'Data tidak boleh kosong!!';
        echo $error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
    .login-form {
        width: 340px;
        margin: 50px auto;
        font-size: 15px;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
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
    <div class="login-form">
    <form action="login.php" method="POST">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="txt_email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="txt_pass">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Log in</button>
        </div>     
    </form>
    <p class="text-center"><a href="register.php">Buat akun</a></p>
</div>
</body>
</html>
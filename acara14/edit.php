<?php 
require('koneksi.php');
if(isset($_POST['update'])){
    $userId = $_POST['txt_id'];
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_name'];

    $query = "UPDATE user_detail SET user_password='$userPass', user_fullname='$userName' WHERE id='$userId'";
    echo $query;
    $result = mysqli_query($koneksi,$query);
    header('Location: home.php?user_fullname='.urlencode($userName));
}
$id = $_GET['id'];
$query = "SELECT * FROM user_detail WHERE id='$id'";
$result = mysqli_query($koneksi,$query);
while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $userMail = $row['user_email'];
    $userPass = $row['user_password'];
    $userName = $row['user_fullname'];

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
    .edit-form {
        width: 340px;
        margin: 50px auto;
        font-size: 15px;
    }
    .edit-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .edit-form h2 {
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
    <div class="edit-form">
    <form action="edit.php" method="POST">
    <p><input type="hidden"name="txt_id" value="<?= $id; ?>"></p>
        <h2 class="text-center">Edit</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="txt_email" value="<?= $userMail; ?>" readonly>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Password" name="txt_pass" value="<?= $userPass; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama" name="txt_name" value="<?= $userName; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
        </div>     
    </form>
    <p class="text-center"><a href="home.php">Kembali</a></p> 
</body>
</html>
<?php } ?>
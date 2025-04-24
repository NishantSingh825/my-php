
<?php 
        $showAlert = false;
        $showError = false;

   if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "partials\_dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
      //$exists = false;
 
      //check whether this username exisits..
      $exitSql = "SELECT * FROM `users` WHERE username='$username'";
      $result = mysqli_query($conn, $exitSql);
      $numExitstRow = mysqli_num_rows($result);
    if($numExitstRow >0){
        $showError = "User Already Exists!";
    }else{
//$exists = true;
    if(($password == $cpassword)){
        $hash = password_hash($password, PASSWORD_DEFAULT,  ['cost' => '15']);
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;

        }
    
        }else{
        $showError = "passwor not match";
    }
}
}

   

?>  


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php require 'partials/_nav.php' ?>
<?php
if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success..!</strong> Your account is now created and you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error..! </strong> '.$showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

    <div class="container">
        <h1 class="text-center my-4">SignUp to our website</h1>
        <form action="/loginProjectPHP/signup.php" method="post">
            <div class="mb-3 col-md-6 container">
                <label for="username" class="form-label">username</label>
                <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" maxlength="23" class="form-control" id="password" name="password" required>  
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">confirm Password</label>
                    <input type="password" maxlength="23" class="form-control" id="password" name="cpassword" required>
                </div>
                <div id="emailHelp" class="form-text">Make sure your password are confirm</div>

                <button type="submit" class="btn btn-primary  container">SignUp</button>
            </div>
        </form>

    </div>







    <!-- ------------------------------------JS BOOSTSTRAP-------------------------------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
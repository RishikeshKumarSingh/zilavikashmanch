<?php include "../include/dbConfig.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Project | Officer Pannel - Zila Vikash Manch</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body class="bg-light">
        <?php include "../include/navbar.php"; ?>
        <!--you can add bann here-->

        <div class="container mt-4">
                <div class="row">
                        <div class="col-5 mx-auto">
                                <div class="card">
                                        <div class="card-header">Login Here For Adminstration</div>
                                        <div class="card-body">
                                                <form action="" method="post">
                                                        <div class="mb-2">
                                                                <div class="form-floating">
                                                                        <input type="text" placeholder="email/username" name="email" class="form-control">
                                                                        <label for="">Email/Username</label>
                                                                </div>
                                                        </div>
                                                        <div class="mb-2">
                                                                <div class="form-floating">
                                                                        <input type="password" placeholder="password" name="password" class="form-control">
                                                                        <label for="">Password</label>
                                                                </div>
                                                        </div>
                                                        <div class="mb-2">
                                                                <input type="submit" name="login" class="btn btn-primary w-100" value="Login">
                                                        </div>
                                        </form>
                                        <?php
                                        if(isset($_POST['login'])){
                                                $email = $_POST['email'];
                                                $password = $_POST['password'];

                                                $query = mysqli_query($connect, "select * from admin where email='$email' AND password = '$password'");
                                                $count = mysqli_num_rows($query);

                                                if($count > 0){
                                                        $_SESSION['admin'] = $email;
                                                        redirect();
                                                }
                                                else{
                                                        alert("username and password incorrect");
                                                }
                                        }
                                        ?>
                                </div>
                                <div class="card-footer">
                                        <a href="register.php" class="nav-link float-start p-0 m-0 small text-muted">New User?</a>
                                        <a href="" class="nav-link float-end p-0 m-0 small text-muted">Forgot Password?</a>
                                </div>
                        </div>
                </div>
        </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
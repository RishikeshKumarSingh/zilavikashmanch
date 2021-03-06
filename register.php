<?php include "include/dbConfig.php"?>
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
        <?php include "header.php"; ?>
        <!--you can add bann here-->

        <div class="container mt-3">
               <div class="row">
                       <div class="col-5 mx-auto">
                               <div class="row mb-3">
                                       <div class="col-6">
                                               <div class="card bg-success">
                                                       <div class="card-body bg-success text-white">
                                                               <h5 class="text-center h3 mb-0"><i class="bi bi-building"></i></h5>
                                                               <a href="registerInstitute.php" class="stretched-link nav-link m-0 text-white text-center p-0">Register As Institute</a>
                                                       </div>
                                               </div>
                                       </div>
                                       <div class="col-6">
                                               <div class="card bg-success">
                                                       <div class="card-body bg-dark text-white">
                                                               <h5 class="text-center h3 mb-0"><i class="bi bi-person"></i></h5>
                                                               <a href="register.php" class="stretched-link nav-link m-0 text-white text-center p-0">Register  As Candidate</a>
                                                       </div>
                                               </div>
                                       </div>
                               </div>
                               <div class="card">
                                       <div class="card-header">Register Here For as Candidate</div>
                                       <div class="card-body">
                                               <form action="" method="post">
                                                       <div class="mb-2">
                                                               <div class="form-floating">
                                                                       <input type="text" placeholder="Name" name="name" class="form-control">
                                                                       <label for="">Name</label>
                                                               </div>
                                                       </div>
                                                       <div class="mb-2">
                                                               <div class="form-floating">
                                                                       <input type="text" placeholder="Email" name="email" class="form-control">
                                                                       <label for="">Email</label>
                                                               </div>
                                                       </div>
                                                       <div class="mb-2">
                                                               <div class="form-floating">
                                                                       <input type="text" placeholder="Contact" name="contact" class="form-control">
                                                                       <label for="">Contact</label>
                                                               </div>
                                                       </div>
                                                       <div class="mb-2">
                                                               <div class="form-floating">
                                                                       <input type="password" placeholder="password" name="password" class="form-control">
                                                                       <label for="">Password</label>
                                                               </div>
                                                       </div>
                                                       <div class="mb-2">
                                                               <input type="submit" name="create" class="btn btn-primary w-100" value="Login">
                                                       </div>
                                               </form>
                                               <?php
                                               if(isset($_POST['create'])){
                                                       $name = $_POST['name'];
                                                       $email = $_POST['email'];
                                                       $contact = $_POST['contact'];
                                                       $password = sha1($_POST['password']);
                                                       $query=mysqli_query($connect, "insert into accounts (name,email,contact,password) value ('$name','$email','$contact','$password')");
                                                       if($query){
                                                               redirect('login');
                                                       }
                                               }
                                               ?>
                                       </div>
                                       <div class="card-footer">
                                               <a href="login.php" class="nav-link float-start p-0 m-0 small text-muted">Already Register User?</a>
                                       </div>
                               </div>
                       </div>
               </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
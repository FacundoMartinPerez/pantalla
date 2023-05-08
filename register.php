<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
   <style>
      @import url("https:fonts.googleapis.com/css2?family=Poppins");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body{
    background: url('bosque oscuro login.jpg');
   
}
.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 92%;
    height: 640px;
    background: url('images.jpg') no-repeat;
    backdrop-filter: blur(15px);
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    margin-top: 20px;
    animation: animateBg 5s linear infinite;
}
.container .content {
    position: absolute;
    top: 0;
    left: 0;
    width: 53%;
    height: 100%;
    background: transparent;
    padding: 80px;
    color: #e4e4e4;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
}
.content .logo{
    font-size: 70px;
}
.content h2{
    font-size: 40px;
}
.content h2 span{
    font-size: 25px;
}
.text-sci p{
    font-size: 16px;
    margin: 20px;
}
.social-icons a{
    color:white;
}
.social-icons a i{
    font-size: 22px;
    color: white;
    padding: 0 2px 0 20px;
    transition: .5s ease;
}
.social-icons a:hover i{
    transform: scale(1.2);
    color:blueviolet;
}
.container .logreg-box{
    position: absolute;
    top: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 53%);
    height: 100%;
}
.login-box{
   margin-top:40px;
    position: relative;
    width: 400px;
    height: 490px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(15px);
}
.login-box a{
    display: flex;
    font-size: 2rem;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    justify-content: center;
    align-items: center;

}

.login-box a:hover{
   color: blueviolet;

}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
a{
    color:#fff;
}
h1{
   margin-top: 50px;
   font-size: 2em;
    color: white;
    text-align: center;
}
.input-box{
    position: relative;
    width: 350px;
    margin: 30px 0;
    border-bottom: 2px solid #fff;

}
.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
}
.input-box input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    padding: 0 35px 0 5px;
}
.button input{
    padding:10px;
    width: 100%;
    height: 100%;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1.4em;
    color: #000000;
    font-weight: 300;
}
.button a{
    color: #fff;
}
.button input:hover{
color:blueviolet;
}
.register-link{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin-bottom:10px;
    
}
.register-link a{
   font-size: 1.5rem;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.register-link a:hover{
    text-decoration: underline;
}
@media (max-width: 360px){
    .login-box{
        width: 100%;
        height: 150vh;
        border: none;
        border-radius: 0;
    }
    .input-box{
        width: 190px;
    }
}
   </style>
   <div class="container">
        <div class="content">
            <h2 class="logo"><i class="bx bxl-firebase"></i>TTech</h2>
          <div class="text-sci">
            <h2>Bienvenidos a Nuestra<br><span>Nueva Página Web.
            </span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dolores doloribus consequuntur soluta, inventore eos. Velit, illo commodi debitis iste in culpa totam pariatur consequatur nesciunt tempore facilis, ad voluptates.</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/facundo-martin-perez-591483201/">
                    <i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx 
                    bxl-facebook'></i></a>
                <a href="#"><i class='bx 
                    bxl-instagram'></i></a>
                <a href="#"><i class='bx 
                    bxl-twitter'></i></a>
            </div>
          </div>
        </div>
<div class="logreg-box">
<div class="login-box">  
   <form action="" method="post" enctype="multipart/form-data">
   <a href="">Regístrese</a>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <div class="input-box"> 
      <input type="text" name="name" placeholder="enter username" class="box" required>
      </div>
      <div class="input-box">
      <input type="email" name="email" placeholder="enter email" class="box" required>
      </div>
      <div class="input-box">
      <input type="password" name="password" placeholder="enter password" class="box" required>
      </div>
      <div class="input-box">
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      </div>
      <div class="input-box">
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="button">
      <input type="submit" name="submit" value="Regístrese" class="btn">
      </div>
      <br>
      <div class="register-link">
      <p>Ya tenés una cuenta?</p><a href="login.php">Iniciar Sesión</a>
      </div>
   </form>
</div>
</div>
</div>

</body>
</html>
<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        :root {
  --background-rgb: 29 30 34;
  
  --blue-rgb: 33 150 243;
  --primary-rgb: var(--blue-rgb);
  
  --blob-color-1: rgb(var(--blue-rgb));
  --blob-color-2: dodgerblue;
}

* {
  box-sizing: border-box;
}

body {
  height: 100vh;
  display: grid;
  place-items: center;
  background-color: rgb(var(--background-rgb));
  margin: 0rem;
  overflow: hidden;
}

.screen {
  width: 500px;
  display: flex;
  border: 3px solid rgb(var(--primary-rgb) / 80%);
  aspect-ratio: 10 / 16;
  border-radius: 1rem;
  background-color: rgb(var(--primary-rgb) / 15%);
  overflow: hidden;
  position: relative;
  z-index: 10;
}

.screen:after,
.screen:before {
  content: "";
  height: 5px;
  position: absolute;
  z-index: 4;
  left: 50%;
  translate: -50% 0%;
  background-color: white;
}

.screen:before {
  width: 15%;
  top: 0rem;
  border-bottom-left-radius: 1rem;
  border-bottom-right-radius: 1rem;
}

.screen:after {
  width: 25%;
  bottom: 0rem;
  border-top-left-radius: 1rem;
  border-top-right-radius: 1rem;
}

@keyframes pan-overlay {
  from {
    background-position: 0% 0%;
  }
  
  to {
    background-position: 0% -100%;
  }
}

.screen-overlay {    
  background: linear-gradient(
    rgb(var(--primary-rgb) / 0.15),
    rgb(var(--primary-rgb) / 0.15) 3px,
    transparent 3px,
    transparent 9px
  );
  background-size: 100% 9px;
  height: 100%;
  width: 100%;
  animation: pan-overlay 22s infinite linear;
  position: absolute;
  z-index: 2;
  left: 0px;
  top: 0px;
}

@keyframes pan-image {  
  0% {
    background-position: 36% 42%;
    background-size: 200%;
  }
  
  20% {
    background-position: 30% 35%;
    background-size: 200%;
  }
  
  20.0001% { /* -- View 2 -- */
    background-position: 60% 85%;
    background-size: 500%;
  }
  
  40% {
    background-position: 49% 81%;
    background-size: 500%;
  }
  
  40.0001% { /* -- View 3 -- */
    background-position: 80% 42%;
    background-size: 300%;
  }
  
  60% {
    background-position: 84% 33%;
    background-size: 300%;
  }
  
  60.0001% { /* -- View 4 -- */
    background-position: 0% 0%;
    background-size: 300%;
  }
  
  80% {
    background-position: 15% 4%;
    background-size: 300%;
  }
  
  80.0001% { /* -- View 5 -- */
    background-position: 80% 10%;
    background-size: 300%;
  }
  
  100% {
    background-position: 72% 14%;
    background-size: 300%;
  }
}

.screen > .screen-image {
  background-image: url("https://images.unsplash.com/photo-1515266591878-f93e32bc5937?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2574&q=80");
  height: 100%;
  width: 100%;
  position: absolute;
  z-index: 1;
  left: 0px;
  top: 0px;
  background-size: 300%;
  background-position: 0% 0%;
  filter: sepia(100%) hue-rotate(160deg);
  opacity: 0.6;
  animation: pan-image 15s linear infinite;
}

.screen > .screen-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  flex-grow: 1;
  gap: 4rem;
  position: relative;
  z-index: 3;
  margin: 1rem;
  padding-bottom: 6rem;
  border: 1px solid rgb(var(--primary-rgb) / 50%);
  border-radius: 0.6rem;
}

.screen > .screen-content > .screen-icon {
  color: white;
  font-size: 4rem;
  text-shadow: 0px 0px 0.5rem white;
}

.screen > .screen-content > .screen-user{
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  position: relative;
}

.screen > .screen-content > .screen-user:before,
.screen > .screen-content > .screen-user:after {
  content: "";
  position: absolute;
  top: 0px;
  background-color: rgb(var(--primary-rgb));
  border-radius: 1rem;
  box-shadow: 0px 0px 8px 3px rgb(var(--primary-rgb) / 60%);
}

.screen > .screen-content > .screen-user:before {
  height: 2px;
  width: 50px;
  translate: -20px -1rem;
  opacity: 0.75;
}

.screen > .screen-content > .screen-user:after {
  height: 3px;
  width: 30px;
  translate: 26px calc(-1rem - 0.5px);
}

.screen > .screen-content > .screen-user > :is(.name, .link) {
  font-family: "Source Code Pro", monospace;
  color: white; 
  text-align: center;
  text-transform: uppercase; 
}

.screen > .screen-content > .screen-user > .name {
  position: relative;
  font-size: 4.25rem;
  font-weight: 400;
}

.screen > .screen-content > .screen-user > .name:before,
.screen > .screen-content > .screen-user > .name:after {
  content: "";
  height: 4px;
  width: 4px;
  position: absolute;
  border: 2px solid white;
  border-radius: 2px;
}

.screen > .screen-content > .screen-user > .name:before {
  top: 55%;
  right: -1.5rem;
}

.screen > .screen-content > .screen-user > .name:after {
  top: 45%;
  left: -1.5rem;  
}

.screen > .screen-content > .screen-user > .link {  
  opacity: 0.8;
  font-size: 1.5rem;
  text-shadow: 0px 0px 0.5rem white;
  font-weight: 400;
  letter-spacing: 0.3rem;
  text-decoration: none;
}

.screen > .screen-content > .screen-user > .link:is(:hover, :focus) {  
  text-decoration: underline; 
}

@media(max-width: 700px) {
  .screen {
    scale: 0.6;
    margin-bottom: 0rem;
  }
}

/* -- Blob effect -- */

@keyframes rotate {
  from {
    rotate: 0deg;
  }
  
  50% {
    scale: 1 1.5;
  }
  
  to {
    rotate: 360deg;
  }
}

#blob {
  background-color: white;
  height: 34vmax;
  aspect-ratio: 1;
  position: absolute;
  left: 50%;
  top: 50%;
  translate: -50% -50%;
  border-radius: 50%;
  background: linear-gradient(to right, var(--blob-color-1), var(--blob-color-2));
  animation: rotate 20s infinite;
  opacity: 0.5;
}

#blur {
  height: 100%;
  width: 100%;
  position: absolute;
  z-index: 2;
  backdrop-filter: blur(12vmax);
}

/* -- Links -- */

#links {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: 10;
  padding: 1rem;
}

.meta-link {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.meta-link > :is(span, a) {
  font-family: "Rubik", sans-serif;
  font-size: 0.9rem;
  color: white;
}

.meta-link > .label {
  width: 160px; 
  text-align: right;
}

.meta-link > a {
  text-decoration: none;
  outline: none;
}

.meta-link > a.source {
  color: rgb(94, 106, 210);
}

.meta-link > a:is(:hover, :focus) > i {
  color: white;  
}

.meta-link > a.youtube {
  color: rgb(239, 83, 80);
}

.meta-link > a.youtube > i {
  padding-top: 0.2rem; 
}

.meta-link > a > i {
  height: 1rem;
  line-height: 1rem;
}
.logreg-box{
    position: center;
    top: 0;
    right: 0;
    justify-content: center;
    align-items: center;
}
.login-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(15px);
}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
a{
    color:#fff;
}
.input-box{
    position: relative;
    width: 310px;
    margin: 30px 0;
    border-bottom: 2px solid #fff;

}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    pointer-events: none;
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
.input-box .icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    line-height: 57px;
}
.remember-forgot{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;
}
.remember-forgot label input {
    margin-right: 3px;
}
.remember-forgot a{
    color: #fff;
    text-decoration: none;
}
.remember-forgot a:hover{
    text-decoration: underline;
}
.button input{
    width: 100%;
    height: 40px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #000000;
    font-weight: 500;
}
.button a{
    color: #fff;
}
.register-link{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}
@media (max-width: 360px){
    .login-box{
        width: 100%;
        height: 100vh;
        border: none;
        border-radius: 0;
    }
    .input-box{
        width: 290px;
    }
}

    </style>
<div class="screen">  
  <div class="screen-image"></div>  
  <div class="screen-overlay"></div>  
  <div class="screen-content">
    <i class="screen-icon fa-brands fa-codepen"></i>
    <div class="screen-user">
      <span class="name" data-value="TTech">TTech</span>
      <a class="link" href="https://www.linkedin.com/in/facundo-martin-perez-591483201/" target="_blank">@Facundo Perez</a>
<div class="logreg-box">
    <div class="login-box">

   <form action="" method="post" enctype="multipart/form-data">
      <h2>login now</h2>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <div class="input-box"> 
      <span class="icon"><ion-icon name="mail"></ion-icon></span>
      <input type="email" name="email"  class="box" required>
      <label>Email</label>
      </div>
      <div class="input-box">
      <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
      <input type="password" name="password"  class="box" required>
      <label>Contraseña</label>
      </div>
      <div class="remember-forgot">
      <label><input type="checkbox">Remember me</label>
      <a href="#">Forgot Password?</a>
      </div>
      <div class="button">
      <input type="submit" name="submit" value="Login" class="btn">
      </div>
      <div class="register-link">
      <a href="register.php">Signup</a>
      </div>
   </form>
</div>
</div>

    </div>
  </div>
</div>

<div id="blob"></div>
<div id="blur"></div>


<script src="pantalla.js"></script>
    
</body>
</html>
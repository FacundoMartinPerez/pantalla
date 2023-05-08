<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTech Login</title>
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

@keyframes animatedBg {
    100%{
        filter: hue-rotate(360deg);
    }
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
 <div class="container">
        <div class="content">
            <h2 class="logo"><i class="bx bxl-firebase"></i>TTech</h2>
          <div class="text-sci">
            <h2>Bienvenido/a a Nuestra<br><span>Nueva Página Web.
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
        <form method="post">
            <h2>Login</h2>
            <div class="input-box"> 
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="text" required id="mail" name="user_name">
            <label>username</label>
            </div>
            <div class="input-box">
            <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                </span>
            <input type="password" required id="password" name="password">
            <label>password</label>
            </div>
            <div class="remember-forgot">
                  <label><input type="checkbox">Remember me
                </label>
                <a href="#">Forgot Password?</a>
               </div>
            <div class="button">
            <input type="submit" value="Login">
            </div>
            <div class="register-link">
            <a href="signup.php">Signup</a>
            </div>
        </form>

       </div>
       </div>
 </div>
     
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">

    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
        
    </script>
   
</body>
</html>
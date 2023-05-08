<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TTech</title>
   <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
   <link rel="icon" href="Logo Empresas.jpg" alt="Logo de la empresa" type="Logo Empresas.jpg">
  
 
    
</head>
<body>
<style>

:root{
    --primary: #eeeeee;
    --secondary: #227c70;
    --green: #82cd47;
    --secondary-light: rgb(34, 124, 112, 0.2);
    --secondary-light-2: rgb(127, 183, 126, 0.1);
    --white: #fff;
    --black: #393e46;

    --shadow: 0px 2px 8px 0px var(--secpndary-light);
}
*{
    box-sizing: border-box;
    list-style-type:none;
        
}
html{
    scroll-behavior: smooth;
}
h1{font-size: 3.5em;}
h2{font-size: 2.7em;}
h3{font-size: 1.5em;}
p{font-size: 1.25em;}
body{
    font-family: "Roboto", sans-serif;
margin: 0;
}

button{
    font-size: 1.5em;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 10px;
    border: 1px solid rgba(0,0,0,0.5);
    box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    color: white;
    background-color: blueviolet;
    
}
button:hover{
background-color: rgb(113, 40, 182);
}
.color-acento{
    color: blueviolet;
}
.container{
    max-width: 1400px;
    margin: auto;
}
header{
    background-color:  rgb(27, 27, 27);
}
header .logo{
margin: 0;
padding: 0;
font-weight: bold;
color: rgb(145, 77, 209);
font-size: .7em;
}

header .container{
display: flex;
flex-direction: column;
align-items: center;
}
header nav{
display: flex;
flex-direction: column;
text-align: center;
flex-direction: column;
}
header a{
    padding: 5px 12px;
    text-decoration: none;
    font-weight: bold;
    color: rgb(255, 255, 255);

}
header a:hover{
    color: blueviolet;
}
#hero{
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    height: 100vh;
    
    background-image: linear-gradient(
    0deg,
    rgba(0,0,0,0.5),
    rgba(0,0,0,0.5)
    ),url("Logo Empresas.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
#hero h1{
    color: white;
}
#hero a{
    color:white;
}
#Nosotros{
    text-align: center;
    padding: 200px 12px;
}

#servicios{
    text-align: center;
    color: #fff;
    background-color: #1b1b1b;
}
#servicios .container {
   
    padding: 150px 12px;
    
}
#servicios h2{
    margin-top: 0;
}
#servicios p{
display: none;
}
#servicios .carta{
    background-size: cover;
    background-position: center center;
    padding: 50px 0px;
    margin: 30px;
    border-radius: 15px;


}
.carta:first-child{
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url("Logo Empresas.jpg");
        
}
.carta:nth-child(2){
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url("Logo Empresas.jpg");
       

}
.carta:nth-child(3){
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url("Logo Empresas.jpg");
        

}
.carta:nth-child(4){
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url("Logo Empresas.jpg");
        

}
#empleo{
    text-align: center;
    
    color: #fff;
    background-color: #ffffff;
}
#empleo .container{
    padding: 150px 12px;
}
#contacto{
    text-align: center;
    
    color: #fff;
    background-color: #2b2563;
}
#contacto .container{
    padding: 150px 12px;
    
}




footer {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
  }
@media(min-width: 720px) {
    header{
        position: fixed;
        width: 100%;
    }
    header .container{
        flex-direction: row;
        justify-content: space-between;
    }
    header .container .img{
        padding:0;
        margin:0;
    }
    .containers .profile-dropdown .profile-dropdown-btn .profile-usuario{
        font-family: "Roboto", sans-serif;
        color: white;
        padding: 0px 20px 3px 2px;
     
        font-size: 3em;
        font-weight: bold;
        text-align: center;
        flex-direction: row;
        justify-content: space-between:none;
        align-items: center;
        color: white;
        display:flex;
        justify-content: space-between:none;
       
        height: 60px;
        width: 0px;
        
    
      
        border: 0px solid #EFEEF1;
        
    }
    header .containers .profile-dropdown .profile-dropdown-btn .profile-usuario .usuario{
        margin: 0;
        font-size: 0.9rem;
        padding: 0;
    }
    .profile-dropdown-btn{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-right: 1rem;
        font-size:0.5rem;
        font-weight: 600;
        border:2px solid var(--secondary);
        border-radius: 100px;
        cursor: pointer;
        width: 240px;
        transition: box-shadow 0.2s, background-color 0.2s;

    }
    .profile-dropdown-btn:hover{
        background-color: var(--secondary-light-2);
        box-shadow: var(--shadow)
    }
    header .containers .profile-dropdown .profile-dropdown-btn .profile-usuario i{
      color: white;
      font-weight: bold;
      font-size: 1em;
     
      justify-content: space-between:none;
     
      height: 40px;
      min-width: 20px;
    }
    header .containers .profile-dropdown .profile-dropdown-btn .profile-usuario img{
        position:relative;
        height: 3.5rem;
        width: 3.5rem;
        object-fit: cover;
        border-radius: 50%;
        background-size:cover;
    }
    .profile-dropdown-list{
        
        position: absolute;
        top: 68px;
        width: 230px;
        right: 125px;;
        background: transparent;
        border-radius:15px;
        box-shadow: red;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s;
    }
    .profile-dropdown-list.active{
        max-height: 500px;
    }
    .profile-dropdown-list hr{
        border: .5px solid var(--black);

    }
    .profile-dropdown-list-item{
        padding: 0.2rem 0 0.2rem .2rem;
        transition: background-color 0.2s, padding-left 0.2;
    }
    .profile-dropdown-list-item:hover{
        padding-left:0;
        background-color:var(--secondary-light);
    }
    .profile-dropdown-list-item a{
        display:flex;
        align-items: center;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 600;
        color: white;
    }
    .profile-dropdown-list-item a i{
        margin-right: 1rem;
        font-size: 1.1rem;
        width: 2.3rem;
        height:2.3rem;
        background-color: blueviolet;
        color: var(--white);
        line-height: 2rem;
        text-align: right;
        border-radius: 50%
    }
    header nav{
        flex-direction: row;
        padding-bottom: 0;
        padding-right: 20px;
    } 
    .navbar-list {
        padding: 0 15px 0 2px;
        margin-top: 14px;
    }
    .navbar-list li{
        display: inline-block;
        margin: 0 .4rem; 
        padding: 0 15px 0 2px;
    }
    .navbar-list li a{
        font-size: 1.1rem;
        font-weight: 500;
        padding: 0 15px 0 2px;
    } 
    #Nosotros .container {
        display: flex;
        justify-content: space-evenly;
    }
    #Nosotros .texto{
        width: 50%;
        max-width: 600px;
        text-align: initial;
        
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    #Nosotros .img-container {
        background-image: url('Empleo.jpg');  
        background-size: cover;
        background-position: center center;
        height: 500px;
        width: 400px;
    }
    #Nosotros h2{
        margin-top: 0px;
    }
    #hero h1{
        font-size: 5em;
    }
    #servicios .programas{
        display: flex;
        justify-content: center;
    }
    #servicios h3{
        margin-top: 0;
        
    }
    
    #servicios .carta{
        padding: 50px;
        background-size: 100% 150px;
        background-repeat: no-repeat;
        background-position-y: 0;
        background-color: rgba(50,50,50,0.5);
        box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }
    #servicios button{
        position: center center;
    }
    .carta:first-child{
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ),url("gestion empresarial.jpg");
            
    }
    .carta:nth-child(2){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ),url("Logo Empresas.jpg");
           
    
    }
    .carta:nth-child(3){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ),url("Logo Empresas.jpg");
            
    
    }
    .carta:nth-child(4){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ),url("gestion empresarial.jpg");
            
    
    }
    #empleo{
        text-align: center;
        background-image: url('bosque.jpg');
        background-size: cover;
        height: 800px;
        width: 1583px;
    }
    #empleo .container{
        padding: 150px 12px;
    }
    #empleo .container .color-acento{
        text-align: center;
        margin-top: 100px; 
    }
    #contacto{
        text-align: center;
        
        color: #fff;
        background-color: #2b2563;
    }
    #contacto .container{
        padding: 150px 12px;
        
    }
    #contacto .container .Empleo{
        text-align: center;
        align-items: center;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 40px 30px;
        
    } 
    
    

}
    </style>
<header>
<div class="container">
            
    <div class="logo">
        <a href="home.php">
                    
        <h1>TTech</h1>
                  
        </a>
    </div>
            
    <div>
                
    </div>
    <nav>
                
    <ul class="navbar-list">
    <li><a href="#hero">Inicio</a></li>
    <li><a href="#Nosotros">Conocenos</a></li>
    <li><a href="#servicios">Servicios</a></li>
    <li><a href="#empleo">Empleos</a></li>
    <li><a href="#contacto">Contacto</a></li>
    <li> <a href="login2.php" >Soluciones Tecnológicas</a></li>
    </ul>


<div class="containers">
<div class="profile-dropdown">
    <div class="profile-dropdown-btn" onclick="toggle()">
                        
   <div class="profile-usuario">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/images.jpg">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
       <a><span class="usuario">Bienvenido,<?php echo $fetch['name']; 
      ?></span></a>
      <i class="bx bx-chevron-down"></i>
      
      </div>
</div>
      <ul class="profile-dropdown-list">
        <li class="profile-dropdown-list-item">
        <a href="update_profile.php" class="btn">
        <i class="fa-regular fa-user"></i>
        Editar Perfil
        </a>
        </li>
        <hr>
        <li class="profile-dropdown-list-item">
        <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        Cerrar Sesión
        </a>
        </li>
</div>
</div>
</nav>
</div>
</header>
<section id="hero">
        <h1>Aprendé a Programar<br>con Nosotros</h1>
        <form action="">
            <button>
                <div clase="aplica">
                <a href="#contacto">
                APLICA YA!
                </a>
                </div>
            </button>
        </form>
        
    </section>
    <section id="Nosotros">
        <div class="container">
            <div class="img-container"></div>
                <div class="texto">
                    <h2>Somos <span class="color-acento">TTech</span> </h2>
                </div>
            </div>
    </section>
    <section id="servicios">
        <div class="container">
           <h2>Nuestros Servicios</h2>
           <div class="programas">
            <div class="carta">
                <h3>Plataformas educativas</h3>
                <button> + info </button>
           </div>
           <div class="carta">
                <h3>Aplicaciones para el sector salud</h3>
                <button> + info </button>
           </div>
           <div class="carta">
                <h3>Software de seguridad informática</h3>
                <button> + info </button>
           </div>
           <div class="carta">
              <h3>Sistemas de gestión empresarial</h3>
              <button> + info </button>
           </div>
           </div>
           
        </div>
		</section>
        <section id="empleo">
            <div class="conteiner">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <h3> <span class="color-acento">Si quieres trabajar con nosotros primero contáctanos.
                    <br>
                    Luego te enviaremos instrucciones para que nos envíes tu CV.</span>
                </h3>
                <h2><span class="color-acento">Envía tu CV.
                    <form action="procesar_archivo.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="archivo">
                        <input type="submit" value="Enviar archivo">
                      </form>
                </span>
                  
                  
              </h2>
            </div>
            
        </section>
        <section id="contacto">
            <div class="container">
                <h1>Contáctanos</h1>
                <div class="Empleo">
                <form>
                    <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <br>
                    <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    </div>
                    <br>
                    <div>
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                    <br>
                    <br>
                    <button type="submit">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
        </section>
        
        <footer>
        
            <p>Derechos reservados &copy; TTech 2023</p>
        
        </footer>

<script src="script.js"></script>



</body>
</html>
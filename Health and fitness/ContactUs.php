<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us page</title>
  </head>
  <link rel="stylesheet" href="contact.css" />
  <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <body>
    <style>
      .container-2 header{
    background-color: black;
    height:20px;
    padding: 40px;
    position: absolute;
    top: 0;
    left: 0;
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 100px;
}
.container-2 header .logo{
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
    font-size: 1.8rem;
    text-decoration: none;
}
.container-2 header ul{
    position: relative;
    display: flex;    
}
.container-2 header ul li{
    list-style: none;
    margin: 0 20px;
}
.container-2 header ul li a{
    position: relative;
    text-decoration: none ;
    font-size: 20px;
    color: #fff
}
    .dropbtn {
 
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
     }
     
     .dropdown {
      position: relative;
      display: inline-block;
     }
     .menuIcon{
         display: none;
     }
     
     .dropdown-content {
      display: none;
      position: absolute;
      background-color: black;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
     }
     
     .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
     }
     
     .dropdown-content a:hover {background-color: #ddd;}
     
     .dropdown:hover .dropdown-content {display: block;}
     
     .dropdown:hover .dropbtn {background-color: red;}
       
     /*Responsive phase*/
     @media (max-width:991px){
         .container-2{
             padding: 20px;
         }
         .container-2::before{
             width: 100%;
         }
        
         
         .footer {
         background: #000;
         text-align: center;
         width: 111%;
         }
      
         .container-2 header ul {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 112vh;
         background: rgb(223, 45, 45);
         z-index: 1000;
         display: none;
         align-items: center;
         justify-content: center;
         flex-direction: column;
     }
         .container-2 header.active ul{
             display: flex;
         }
         .fa-bars:before {
         content: "\f0c9";
         position: relative;
         right: -12px;
         top: 9px;
     }
         .container .header ul li{
             text-align: center;
             margin: 10px;
         }
         .container .header ul li a{
             color: #333;
             font-size: 2rem;
         }
         .container .header ul li a:hover{
             color: #f00;
         }
         .menuIcon{
             position: fixed;
             top: 05px;
             right: 0;
             width: 40px;
             height: 40px;
             display: initial;
             z-index: 10000;
             background-size: 30px;
             
             background-repeat: no-repeat;
             background-position: center;
             background-color: white;
             cursor: pointer;
         }
         .menuIcon.active{
             
             background-size: 45px;
             background-repeat: no-repeat;
             background-position: center;
         }
     
     
     }
     
     </style>
     <body>
     <div class="container-2">
       <header id="navbar" class="active">
         <a href="main.php" class="logo">World</a>
         <ul>
           <li><a href="main.php" >Home</a></li>
           <li>
           <div class="dropdown">
           <a class="dropbtn">Destinations</a>
           <div class="dropdown-content">
             <a href="Egypt.php"> Egypt</a>
             <a href="India.php">India</a>
             <a href="Maldives.php">Maldives</a>
             <a href="Kuwait.php">Kuwait</a>
             <a href="Qatar.php">Qatar</a>
             <a href="Singapore.php">Singapore</a>
           </div>
           </div>
           </li>
           <li><a href="login/index.php">Plan Your Trip</a></li>
           <li><a href="login/register.php">Sign Up</a></li>
           <li><a href="ContactUs.php" >Contact</a></li>
         </ul>
       </header>
     </div>
     
     <span class="menuIcon" onclick="toogleMenu();"><i class="fas fa-bars" id="bar" ></i></span>
     
    <section class="background firstsection">
      <div class="box-main">
        <div class="firstHalf">
          <!-- The class text-big is used to make
					the text bigger than the text which
					will be written after this -->
          <p class="text-big" style="color:white;">Contact Us</p>


          <p class="text-small" style="color:white;">You can Contact Us if you face any problem</p>

          <!-- To make the text appear little below
					the text that has the class of
					text-small -->
          <br>
         
        </div>
      </div>
    </section>

    <section class="service">
      <!-- Heading-->
      <h1 class="h-primary center" style="margin-top: 30px; color:darkslategray">
       Click on any options to Contact
      </h1>

      <div id="service">
        <div class="box">
          <!-- Form -->
          <img
            src="https://pucho.net/wp-content/uploads/2019/03/Form-logo.jpg"
          />
          <!-- To make the text of the image be
					seprateable we will use br -->
          <br>

          <!-- To make the text to be displayed at
					the center of the box, we will use
					center class -->
          <p class="center">
            People can fill up the form and send us the problem
          </p>
        </div>

        <div class="box">
          <!-- Email -->
          <a href="mailto:travelandtour@gmail.com">
          <img
            src="https://www.nicepng.com/png/detail/10-101780_icons-logos-emojis-mailing-list.png"
          />
        </a>
          <!-- To make the text of the image be
					seperatable we will use br -->
          <br />

          <!-- To make the text to be displayed at
					the center of the box, we will use
					center class -->
          <p class="center">
            Use this Email to send us about the problem faced
          </p>
        </div>

        <div class="box">
          <!-- Toll Free Number -->
          <img src="https://www.logolynx.com/images/logolynx/d5/d56dbfa262cc6addb700c89434c200c8.jpeg">
          <!-- To make the text of the image
					be seperatable we will use br -->
          <br />

          <!-- To make the text to be displayed at
					the center of the box, we will use
					center class -->
          <p class="center">Toll Free No.:+218 200 300 400 <br> &ensp; &emsp; &ensp; &emsp; &ensp; &emsp; +218 200 300 401</p>
        </div>
      </div>
    </section>
  </body>
  <script>
  function toogleMenu(){
    const menuIcon = document.querySelector('.menuIcon');
    const navbar = document.getElementById('navbar');
    menuIcon.classList.toggle('active');
    navbar.classList.toggle('active');
}

</script>
</html>

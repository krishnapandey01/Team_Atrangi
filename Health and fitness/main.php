<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and Fitness </title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{overflow-x:hidden;}
.heading span{
    color: red;
}
section{
    background: #111;
    min-height: 100vh;
}
section .bannerVideo{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
section .bannerVideo video{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
}section .bannerVideo video.active{
    opacity: 1;
}
.services .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.services .box-container .box{
  flex: 1 1 30rem;
  border-radius: .5rem;
  padding:1rem;
  text-align: center;
}

.services .box-container .box i{
  padding:1rem;
  font-size: 5rem;
  color:orange;
}

.services .box-container .box h3{
  font-size: 2.5rem;
  color:red;
}

.services .box-container .box p{
  font-size: 1.5rem;
  color:#e1e6f9;
  padding:1rem 0;
}

.services .box-container .box:hover{
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
}
.container{
    position: relative;
    padding: 0 100px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    min-height: 100vh;
}
.container::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    
    backdrop-filter:blur(10px) ;
    box-shadow: 10px 0 15px rgba(0, 0, 0, 0.05);
}
.container header{
    background-color: black;
    padding: 40px;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 100px;
}
.container header .logo{
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
    font-size: 1.8rem;
    text-decoration: none;
}
.container header ul{
    position: relative;
    display: flex;    
}
.container header ul li{
    list-style: none;
    margin: 0 20px;
}
.container header ul li a{
    position: relative;
    text-decoration: none ;
    font-size: 20px;
    color: #fff
}
.popular .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    }
    
    .popular .box-container .box{
    padding:2rem;
    background:#fff;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    border:.1rem solid rgba(0,0,0,.3);
    border-radius: .5rem;
    text-align: center;
    flex:1 1 30rem;
    position: relative;
    }
    
    .popular .box-container .box img{
    height:25rem;
    object-fit: cover;
    width:100%;
    border-radius: .5rem;
    }
    
    .popular .box-container .box .price{
    position: absolute;
    top:3rem; left:3rem;
    background:red;
    color:#fff;
    font-size: 2rem;
    padding:.5rem 1rem;
    border-radius: .5rem;
    }
    
    .popular .box-container .box h3{
    color:#333;
    font-size: 2.5rem;
    padding-top: 1rem;
    }
    
    .popular .box-container .box .stars i{
    color:gold;
    font-size: 1.7rem;
    padding:1rem .1rem;
    }

    .popular .box-container .box .price{
        position: absolute;
        top:3rem; left:3rem;
        background:red;
        color:#fff;
        font-size: 2rem;
        padding:.5rem 1rem;
        border-radius: .5rem;
        }
        
.container header ul li a:hover,.container header ul li a.active{
        background-color: red;
        
        color: #111;
}.container .content{
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.container .content .bannerText{
    position: relative;
    max-width: 700px;
}
.container .content .bannerText div{
    display: none;
    transition: 0.5s ease-in-out;
}
.container .content .bannerText div.active{
    display: initial;
}
.container .content .bannerText div h2{
    color: #fff;
    font-size: 6rem;
    line-height: 1rem;
    font-weight: 700;
}
.container .content .bannerText div p{
    color: #fff;
    font-size: 18px;
    padding: 20px;
    margin:20px 0;
}
.sci{
    position: absolute;
    bottom: 0;
    left: 0;
    display: flex;
    flex-direction: column;
}
.sci li{
    list-style:none;
}
.sci li a{
    width: 60px;
    height: 60px;
    justify-content: center;
    align-items: center;
    
}
#icon{
    color: #fff;
    display: inline-block;
    max-height: 12px;
    padding: 10px;
}
.sci li a:hover{
    background: #f5f5f5;
}
.controls{
    position: absolute;
    bottom: 0;
    right: 0;
    display: flex;
}
.controls li{
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
    cursor: pointer;
}
.controls li:hover{
    background: #f5f5f5;
}
.menuIcon{
    display: none;
}
#bar{
    position: relative;
    top: 10px;
    left: 12px;
    height: 50px;
}
.review .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}
.review .heading{
    
    margin: 10px;
}
.review .box-container .box{
    text-align: center;
    padding: 0.2rem;
    border: 1rem solid #fff;
    box-shadow: 0.5rem 1rem rgba(0, 0, 0, 0.3);
    border-radius: 0.5rem;
    flex: 1 1 30rem;
    background: #d62e2e;
    margin-top: 6rem;
}
.review .box-container .box img{
    height: 12rem;
    width: 12rem;
    border-radius: 50%;
    border: 1rem solid #fff;
    margin-top: -8rem;
    object-fit: cover;
}
.review .box-container .box h3{
    font-size: 2.5rem;
    color: #fff;
    padding: 5rem 0;
}
.review .box-container .box .stars i{
    font-size: 2rem;
    color:red;
    padding: 0.5rem 0;
}
.review .box-container .box p{
    font-size:1.5rem;
    color: #eee;
    padding: 1rem 0;
}
.review .box-container .box .stars i{
    font-size: 2rem;
    color:rgb(196, 196, 66);
    padding: 0.5rem 0;
    color:gold;
font-size: 1.7rem;
padding:1rem .1rem;
}


.box-container{
    margin-top: 80px;
}
.gallery .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.gallery .box-container .box{
height:25rem;
flex:1 1 30rem;
border:1rem solid #fff;
box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
border-radius: .5rem;
position: relative;
overflow: hidden;
}

.gallery .box-container .box img{
height:100%;
width:100%;
object-fit: cover;
}

.gallery .box-container .box .content{
position: absolute;
top:-100%; left:0;
height: 100%;
width:100%;
background:rgba(255,255,255,.9);
padding:2rem;
padding-top: 5rem;
text-align: center;
}

.gallery .box-container .box .content h3{
    font-size: 2.5rem;
    color:#333;
}

.gallery .box-container .box .content p{
    font-size: 1.5rem;
    color:#666;
    padding:1rem 0;
}

.gallery .box-container .box:hover .content{
    top:0;
}
*::selection{
    background: red;
    color: #fff;
}
.btn{
    display: inline-block;
    padding:.8rem 3rem;
    border:.2rem solid red;
    color:red;
    cursor: pointer;
    font-size: 1.7rem;
    border-radius: .5rem;
    position: relative;
    overflow: hidden;
    z-index: 0;
    margin-top: 1rem;
  }
  
  .btn::before{
    content: '';
    position: absolute;
    top:0; right: 0;
    width:0%;
    height:100%;
    background:red;
    transition: .3s linear;
    z-index: -1;
  }
  
  .btn:hover::before{
    width:100%;
    left: 0;
  }
  
  .btn:hover{
    color:#fff;
  }
  .order .row{
    padding:2rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    background:#fff;
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    border-radius: .5rem;
    }
    .heading{
        text-align: center;
        font-size: 3.5rem;
        padding: 1rem;
        color: #666;
    }
    .order .row .image{
    flex:1 1 30rem;
    }
    
    .order .row .image img{
    height: 100%;
    width:100%;
    object-fit: cover;
    border-radius: .5rem;
    }
    
    .order .row form{
        padding-top: 10px;
    flex:1 1 50rem;
    padding:1rem;
    }
    
    .order .row form .inputBox{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    }
    
    .order .row form .inputBox input, .order .row form textarea{
    padding:1rem;
    margin:1rem 0;
    font-size: 1.7rem;
    color:#333;
    text-transform: none;
    border:.1rem solid rgba(0,0,0,.3);
    border-radius: .5rem;
    width:49%;
    }
    
    .order .row form textarea{
    width:100%;
    resize: none;
    height:15rem;
    }
    
    .order .row form .btn{
    background:none;
    }
    
    .order .row form .btn:hover{
    background:red;
    }

  .footer{
    background: ##333131;
    text-align: center;
}
.footer .share{
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
}
.footer .credit{
    padding:2.5rem 1rem;
    color: #fff;
    font-weight: normal;
    font-size: 2rem;
}
.footer .credit span{
    color: red;
}

.loader-container{
position: fixed;
top:0; left:0;
z-index: 10000;
background:#fff;
display: flex;
align-items: center;
justify-content: center;
height:100%;
width:100%;
}

.loader-container.fade-out{
top:-120%;
}

#scroll-top{
    position: fixed;
    top:-150%;
    
    right:2rem;
    padding:.5rem 1.5rem;
    font-size: 2rem;
    background:red;
    color:#fff;
    border-radius: .5rem;
    transition: 1s linear;
    z-index: 1000;
  }
  
  #scroll-top.active{
    top:calc(100% - 12rem)
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
    .container{
        padding: 20px;
    }
    .container::before{
        width: 100%;
    }
    .container header{
        padding: 10px 20px;
    }
    .container .content .bannerText div h2{
        font-size: 3rem;
    }
    .container .content .bannerText{
        text-align: center;
    }
    .container header ul{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: rgb(223, 45, 45);
        z-index: 1000;
        display: none;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .container header.active ul{
        display: flex;
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
        top: 02px;
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
        
        background-size: 30px;
        background-repeat: no-repeat;
        background-position: center;
    }
    .sci li a{
        width: 50px;
        height: 50px;
    }

}
</style>
<body>
    <section>
        <div class="bannerVideo" id="slideShow">
            <video src="video1.mp4" autoplay muted loop class="active"></video>

        </div>
        <div class="container">
            <header id="navbar" class="active">
                <a href="#" class="logo">Health</a>
                <ul>
                    <li><a href="#" >Home</a></li>
                    <li><a href="medicine/medicine.html">Drugs & Medicine</a></li>
                    <li><a href="ecart/shop.html">E-cart</a></li>
                    <li>
                    <div class="dropdown">
                    <a class="dropbtn">GymKhana</a>
                    <div class="dropdown-content">
                        <a href="gymkhana/beginner.html"> Beginner level</a>
                        <a href="gymkhana/intermediate.html">Intermediate level</a>
                        <a href="gymkhana/advance.html">Advance level</a>
                    </div>
                    </div>
                    </li>
    
                    <li><a href="login/index.php">Plan Your Exercise</a></li>
                    <li><a href="login/register.php">Sign Up</a></li>
                    <li><a href="feedback/feedbackform.html">Feedback</a></li>
                    <li><a href="experience/experience.html">Satisfied Customers</a></li>
                    <li><a href="ContactUs.php" >Contact</a></li>
                </ul>
                <span class="menuIcon" onclick="toogleMenu();"><i class="fas fa-bars" id="bar" ></i></span>
            </header>
            <div class="content">
                <div class="bannerText" id="slideShowText">
                    <div class="active">
                        <h2>Fitness</h2>
                        <p>Move More, Stay Strong</p>
                    </div>
                </div>
            </div>
            <ul class="sci">
                <li><a href="https://www.facebook.com/traveltours.in/"><i id="icon" class="fab fa-facebook-square fa-4x"></i></a></li>
                <li><a href="https://twitter.com/unwto?lang=en"><i id="icon" class="fab fa-twitter-square fa-4x"></i></a></li>
                <li><a href="https://www.instagram.com/traveltours.in/?hl=en"><i id="icon" class="fab fa-instagram fa-4x"></i></a></li>
            </ul>
          
        </div>
    </section>
  
<!-- services section starts  -->

<section class="gallery" id="gallery">
    <h1 class="heading"> Explore <span> Our </span> Services </h1>
    <center> <h1 style="color: lightgray;"> Learn more about how we can make a difference to your health </h1> </center>
    

    <div class="box-container">
    <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTN_ToXZFgCceoH_z1UlgsgtbQQdHyxI8c-Zw&usqp=CAU" alt="">
            <div class="content">
                <h3>E-cart</h3>
                <p>This section is for shopping through E-cart.</p>
                <a href="ecart/shop.html" class="btn">Explore</a>
            </div>
        </div>
     
     >
        <div class="box">
            <img src="https://img-drugabuse-com.s3.amazonaws.com/wp-content/uploads/Drugs-vs.-Supplements-What%E2%80%99s-the-difference-1.jpg" alt="">
            <div class="content">
                <h3>Drugs/Medicines</h3>
                <p>Different medicines available for different people.</p>
                <a href="medicine/medicine.html" class="btn">Explore</a>
            </div>
        </div>
        <div class="box">
            <img src="https://static.vecteezy.com/system/resources/previews/002/212/368/original/line-icon-for-experience-vector.jpg" alt="">
            <div class="content">
                <h3>Experience</h3>
                <p>This page shares the experience of previous recent users.</p>
                <a href="experience/experience.html" class="btn">Explore</a>
            </div>
        </div>
        <div class="box">
            <img src="https://isha.sadhguru.org/yoga/wp-content/uploads/2017/04/Scienc-of-meditation-49951022-c.jpg" alt="">
            <div class="content">
                <h3>Yoga/Meditation</h3>
                <p>Explore an activities for yoga and meditate.</p>
                <a href="https://mindworks.org/blog/ " class="btn">Explore</a>
            </div>
        </div>
        <div class="box">
            <img src="https://www.hdfcergo.com/images/default-source/default-album/shutterstock_1198357255.jpg" alt="">
            <div class="content">
                <h3>Symptoms Checker</h3>
                <p>This section will take input from user for their medical check-up.</p>
                <a href="login/indexf.php" class="btn">Explore</a>
            </div>
        </div>
        <div class="box">
            <img src="https://media.istockphoto.com/photos/empty-gym-picture-id1132006407?k=20&m=1132006407&s=612x612&w=0&h=Z7nJu8jntywb9jOhvjlCS7lijbU4_hwHcxoVkxv77sg=" alt="">
            <div class="content">
                <h3>GymKhana</h3>
                <p>Physical Fitness & Gym Services</p>
                <a href="homecard.html" class="btn">Explore</a>
            </div>
        </div>

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmB1w_UOKEHsTpk1Yy1CyRk-A2FBNILA5v1Q&usqp=CAU" alt="">
            <div class="content">
                <h3>HeathMyCare: Find a doctor</h3>
                <p>Pich up a phone and call doctor for any problems.</p>
                <a href="https://www.1mg.com/online-doctor-consultation" class="btn">Explore</a>
            </div>
        </div>

      
        <div class="box">
            <img src="https://www.helpguide.org/wp-content/uploads/calories-counting-diet-food-control-and-weight-loss-concept-calorie-768.jpg" alt="">
            <div class="content">
                <h3>Food and Eatings</h3>
                <p>Healthy Diet food for workout and fitness</p>
                <a href="https://www.runtastic.com/blog/en/category/nutrition/" class="btn">Explore</a>
            </div>
        </div
    
   

    </div>

</section>

<!-- Services section ends -->
  
<!-- Doctor section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> Our <span>Experienced</span> Doctors </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://www.pngitem.com/pimgs/m/490-4900474_3-transparent-female-doctor-png-png-download.png" alt="">
            <h3>Dr. Emma Watson</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="login/index.php" class="btn" >Contact Now</a>
        </div>
        <div class="box">
            
            <img src="https://media.istockphoto.com/photos/happy-healthcare-practitioner-picture-id138205019?k=20&m=138205019&s=612x612&w=0&h=KpsSMVsplkOqTnAJmOye4y6DcciVYIBe5dYDgYXLVW4=" alt="">
            <h3>Dr. Bora Bora</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="login/index.php" class="btn">Contact Now</a>
        </div>
        <div class="box">
           
            <img src="https://thumbs.dreamstime.com/b/smiling-female-doctor-holding-medical-records-lab-coat-her-office-clipboard-looking-camera-56673035.jpg" alt="">
            <h3>Dr. Nimi Jackson</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="login/index.php" class="btn">Contact Now</a>
        </div>
        <div class="box">
           
            <img src="https://media.istockphoto.com/photos/handsome-young-doctor-man-over-grey-grunge-wall-happy-face-smiling-picture-id1042772646?k=20&m=1042772646&s=612x612&w=0&h=_lI1eyWg2pz3FkMcKgkNzslZ8TP97Yj34UFavWzd904=" alt="">
            <h3>Dr. Brave Stone</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="login/index.php" class="btn">Contact Now</a>
        </div>

    </div>

</section>

<!-- Doctors section ends -->
<!-- mentor section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> Fitness <span> Trainers </span>  & Nutritionist </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://i.pinimg.com/originals/f0/d4/be/f0d4becb597ccdbcde6a5153054a8e42.jpg" alt="">
            <h3>Stuart Jhonson</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="login/index.php" class="btn" onclick="openLink()" >Contact Now</a>
        </div>
        <div class="box">
            
            <img src="https://www.arhantayoga.org/wp-content/uploads/2019/05/yin-yoga-training-course.jpg" alt="">
            <h3>Redlie Hodge </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="login/index.php" class="btn">Contact Now</a>
        </div>
        <div class="box">
           
            <img src="https://media.istockphoto.com/photos/photo-of-a-young-man-stock-image-picture-id1131220731?k=20&m=1131220731&s=612x612&w=0&h=TBMaffQses78Fz1Q8rW46vTYNWzpYT8g2-rwFZdw_ws=" alt="">
            <h3>Lucipher fright</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="login/index.php" class="btn">Contact Now</a>
        </div>
        <div class="box">
           
            <img src="https://www.thinkific.com/wp-content/uploads/2020/06/Cinderella-de-groot-yoga-pose-1024x1022.jpg" alt="">
            <h3>Hermione Granger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="login/index.php" class="btn">Contact Now</a>
        </div>

    </div>

</section>

<!-- Mentors section ends -->


<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading"> <span>Feedback</span> Form </h1>
    <div class="row">
        
        <div class="image">
            <img src="data:image/jpeg;base64,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" alt="">
        </div>

        <form action="result.php">

            <div class="inputBox">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="Number">
                <input type="text" placeholder="Tour Name">
            </div>

            <textarea placeholder="Comments" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="Submit" class="btn">

        </form>

    </div>

</section>

<!-- order section ends -->
<!-- footer section  -->

<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/traveltours.in/" class="btn">facebook</a>
        <a href="https://twitter.com/unwto?lang=en" class="btn">twitter</a>
        <a href="https://www.instagram.com/traveltours.in/?hl=en" class="btn">instagram</a>
        <a href="https://www.pinterest.com/ideas/travel/908182459161/" class="btn">pinterest</a>
        <a href="https://in.linkedin.com/company/travel-and-tour-world" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> created by <span> Team Atrangi </span> | all rights reserved! </h1>

</section>

<!--footer section ends-->

<!--loader section starts-->

<div class="loader-container">
    <img src="loader.gif" alt="">
</div>

<!--loader section ends-->
<!-- scroll top button  -->
<a href="#navbar" class="fas fa-angle-up" id="scroll-top"></a>



<script>
    const slideShow =document.getElementById('slideShow');
    const slides = slideShow.getElementsByTagName('video');
    var index=0;

    function nextSlide(){
        slides[index].classList.remove('active');
        index = (index+1) %slides.length;
        slides[index].classList.add('active');
    }
    function prevSlide(){
        slides[index].classList.remove('active');
        index = (index - 1 + slides.length) % slides.length;
        slides[index].classList.add('active');
    }
const slideShowText =document.getElementById('slideShowText');
const slidesText = slideShowText.getElementsByTagName('div');
var i=0;

    function nextSlideText(){
        slidesText[i].classList.remove('active');
        i = (i+1) %slidesText.length;
        slidesText[i].classList.add('active');
    }
    function prevSlideText(){
        slidesText[i].classList.remove('active');
        i = (i - 1 + slides.length) % slidesText.length;
        slidesText[i].classList.add('active');
    }
    function toogleMenu(){
        const menuIcon = document.querySelector('.menuIcon');
        const navbar = document.getElementById('navbar');
        menuIcon.classList.toggle('active');
        navbar.classList.toggle('active');
    }

    function loader(){
    document.querySelector('.loader-container').classList.add('fade-out');
    }

    function fadeOut(){
    setInterval(loader, 3000);
    }

    window.onload = fadeOut();


window.onscroll = () =>{



if(window.scrollY > 60){
  document.querySelector('#scroll-top').classList.add('active');
}else{
  document.querySelector('#scroll-top').classList.remove('active');
}

}


function openLink() {
  window.open("Egypt.html");
}


</script>
<script>(function(w, d) { w.CollectId = "61d8139db104f43d8bab4886"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</body>
</html>
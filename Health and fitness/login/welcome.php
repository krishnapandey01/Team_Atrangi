<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
    <header><a href="logout.php" class="logout"><h2>Logout</h2></a></header>
    </div>
    <title>Plan Your Trip</title>

    <style type="text/css">
      * {
        margin: 0px;
        padding: 0px;
      }

      body {
        background-image: url(aa.png);
        background-position: center;
        background-size: cover;
        font-family: sans-serif;
        margin-top: 40px;
        background-repeat: no-repeat;
      }
        .container header{
      background-color: rgb(0, 0, 0);
      padding: 40px;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 5px 100px;
      }
      .pyt {
        width: 800px;
        background-color: rgb(0, 0, 0, 0.6);
        margin: 5% 32.64% 0%;
        color: #ffffff;
        padding: 10px 0px 10px 0px;
        text-align: center;
        border-radius: 15px 15px 0px 0px;
      }
    
      .main {
        background-color: rgb(0, 0, 0, 0.8);
        width: 1000px;
        margin: 18% auto;
        display: block;
      }
      form {
        padding: 10px;
      }
      h1{
        padding-bottom:40px;
        text-align:center;
        color:white;
      }
      .logout {
      position: relative;
      float: right;
      right: -85%;
      top: 0px;
      width: 90px;
      color: #fff;
      text-decoration: none;
    }
      #name {
        width: 100%;
        height: 50px;
      }
      .name {
        margin-left: 25px;
        margin-top: 30px;
        width: 125px;
        color: white;
        font-size: 18px;
        font-weight: 700;
      }

      .firstname {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
      }
      .lastname {
        position: relative;
        left: 470px;
        top: -80px;
        line-height: 40px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
      }
 
      .company {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 90px;
        width: 480px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
      }
      .email {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 480px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
      }
      .code {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 95px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
      }
      .code1 {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 150px;
        border-radius: 6px;
        padding: 0 5px;
        font-size: 16px;
        color: #555;
      }
      .number {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 230px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
      }
      .number1 {
        position: relative;
        left: 154px;
        top: -37px;
        line-height: 40px;
        width: 80px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
      }
      .number2{
        position: relative;
        left: 103px;
        top: -37px;
        line-height: 40px;
        width: 100px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
      }
      .area-code {
        position: relative;
        color: #e5e5e5;
        text-transform: capitalize;
        font-size: 16px;
        left: 80px;
        top: -4px;
      }
      .phone-number {
        position: relative;
        color: #e5e5e5;
        text-transform: capitalize;
        font-size: 16px;
        left: -10px;
        top: -3px;
      }
      .phone-number1 {
        position: relative;
        color: #e5e5e5;
        text-transform: capitalize;
        font-size: 16px;
        left: 60px;
        top: -3px;
      }
      .phone-number2 {
        position: relative;
        color: #e5e5e5;
        text-transform: capitalize;
        font-size: 16px;
        left: -30px;
        top: -3px;
      }
      .option {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 532px;
        height: 40px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
        outline: none;
        overflow: hidden;
      }
      .option option {
        font-size: 20px;
      }
      #gender {
        margin-left: 25px;
        color: white;
        font-size: 18px;
      }
      .radio {
        display: inline;
        padding-right: 0px;
        font-size: 15px;
        margin-left: 250px;
        margin-top: 0px;
        color: white;
      }
      .radio input {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        cursor: pointer;
        outline: none;
      }

      button {
        background-color: #3baf9f;
        display: block;
        margin: 20px 0px 0px 20px;
        text-align: center;
        border-radius: 12px;
        border: 2px solid #366473;
        padding: 14px 110px;
        outline: none;
        color: white;
        cursor: pointer;
        transition: 0.25px;
      }
      button:hover {
        background-color: #5390f5;
      }
    </style>
  </head>

  <body>
    <div class="main">
      <form  action="data.php"  method="GET">
        <div id="name">
          <h2 class="name">Name</h2>
          <input class="firstname" id="firstname" type="text" name="first_name" placeholder="first name"><br>
          <input class="lastname" id="lastname" type="text" name="last_name" placeholder="last name">
        </div>

        <h2 class="name">Country</h2>
        <select class="option" name="country">
          <option disabled="disabled" selected="selected">
            --choose Your country--
          </option>
          <option>Afganistan</option>
          <option>Australia</option>
          <option>Bangladesh</option>
          <option>China</option>
          <option>England</option>
          <option>France</option>
          <option>India</option>
          <option>Japan</option>
          <option>Nepal</option>
          <option>Pakistan</option>
          <option>Russia</option>
          <option>Sri Lanka</option>
        </select>

        <h2 id="gender">Gender</h2>
        <label class="radio">
          <input class="radio-one" type="radio" name="gender">
          <span class="checkmark"></span>
          Male
        </label>
        <label class="radio">
          <input class="radio-two" type="radio" name="gender">
          <span class="checkmark"></span>
          Female
        </label>

        

        <h2 class="name">Email</h2>
        <input class="email" type="text" name="email" placeholder="type your email" >

        <h2 class="name">Mobile No.</h2>
        <input class="code" type="text" name="area_code" placeholder="e.g.  +91" >
        <label class="area-code">Country Code</label>
        <input class="number" type="text" name="phone" placeholder="type your number...">
        <label class="phone-number"> Mobile Number</label>

        <h2 class="name">BMI</h2>
        <input class="code1" type="text" name="area_code">
        <label class="area-code">Height</label>
        <input class="number1" type="text" name="phone">
        <label class="phone-number1">Weight</label>
        <input class="number2" type="text" name="phone">
        <label class="phone-number2">Calculated BMI</label>


        <h2 class="name">Allergies</h2>
        <input class="email" type="text" name="allergies" placeholder="type here" >
        
        <h2 class="name">Medical Problems</h2>
        <input class="company" type="text" name="Medical_Problems" placeholder="type your description here">

        

       <center><button type="submit" onclick="handleSubmit()" value="submit">Submit</button></center> 
      </form>
    </div>

</body>
</html>
<?php
session_start();

require_once("dbconnection.php"); 
if (isset($_POST['regist'])){




$insert_data = [
  'firstname' => $_POST['fname'],
  'lastname'  => $_POST['lname'],
  'email'    => $_POST['emaill'],
  'password' => $_POST['password'],
  'confirmpassword' => $_POST['conpassword'],
  'gender' => $_POST['gender'],
  'country' => $_POST['state'],
  // 'check'   => $_POST['check']


];
// echo "<pre>";
// print_r($insert_data);

$cols = implode(',',array_keys($insert_data));
$val = implode("','", array_values($insert_data));

 $sql = "INSERT INTO web_table ($cols) VALUES('$val')"; 

 $insert = $con1->query($sql);
 if ($insert) {
echo "<div class='alert alert-secondary' role='alert'>
  Data successfuly Instert
</div>";
 }else{
  echo "<div class='alert alert-secondary' role='alert'>
  Something wents wrong!
</div>";
header("refresh:3;url:web1.php");
 }


}



?>







<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

	/*.form-group i{
	font-size: 18px;
	position: absolute;
	border-right: 1px solid #cccccc;
}
.email{
	padding: 8px;*/

	.form-container{
	background-color: #ffff;
	width: 400px;
	padding: 17px;
	margin: 20px auto 4px;
	border-top: 5px solid yellow;
	box-shadow: 0 0 5px;
  


}
.btn{
	width: 100%;
	background-color: yellow;
	border:none;
	font-size: 18px;
}
.container h2{
	font-size: 24px;
	line-height: 24px;
	padding: 20px;
	text-align: center;

}





</style>










<body>
        <div class="container">
        	<div class="form-container"> 
        		<h2>Responsive Registration Form</h2>

  <form action="#" name="myform" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()" autocomplete="off">
     <form class="myform" role="form" method="post" action="login3.php" >
    <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-envelope"></span></span>
          <input class="form-control left-border-none" placeholder="Email" type="text" name="emaill" required="">
      </div><br>
    


     <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-lock"></span></span>
          <input class="form-control left-border-none" id="pass" placeholder="Password" type="text" name="password" >
      

      </div>
        <span id="pwsd" style="color: red; font-size: 10px;"></span>
      

      <br>

  
       <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-lock"></span></span>
          <input class="form-control -border-none" id="conpass" placeholder="Re-type Password" type="text" name="conpassword" >
        </div>
      <span id="conpwsd" style="color: red; font-size: 10px; text-align: right;"></span>
      <br>

 <div class="input-group">
  <div class="row">
    <div class="col">
       <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-user"></span></span>
          <input class="form-control -border-none" placeholder="First Name" type="text" name="fname" required="">
      </div>
      
    </div>
    <div class="col">
       <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-user"></span></span>
          <input class="form-control -border-none" placeholder="Last Name" type="text" name="lname" required="">
      </div>
      
    </div>
    
  </div>
   
 </div>
    <br>

  <div>

	<input type="radio" name="gender" value="Male " required="" >
	<label style="margin-right: 10px;">Male</label>
	<input type="radio" name="gender" value="Female " required="">
	<label style="margin-right: 10px;">Female </label>
</div>
<br>
  

 <div class="form-group">
    
    <select class="form-control  form-control-lg" name="state" id="exampleFormControlSelect1" required="">
      <option>select a country</option>
      <option>India</option>
      <option>Napal</option>
      <option>Japan</option>
      <option>china</option>
    </select>
  </div>





  <div class="form-check form-check-inline">
    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" style="margin-right:10px; " required="">
    <label class="form-check-label" for="exampleCheck1" >I agree with term and condition</label>
  </div><br><br>

   <div class="form-check form-check-inline">
    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" style="margin-right:10px; " required="">
    <label class="form-check-label" for="exampleCheck1" >I want to receive the newsletter</label>
  </div><br>


<br>
  <div>
  <button type="submit" name="regist" class="btn btn-primary">Register</button>
    </div>
    
	



	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script type="text/javascript">
   
          function  validateForm(){
            var pwsd1 = document.getElementById('pass').value;
            var conpwsd1 = document.getElementById('conpass').value;
           

            if (  pwsd1 == "") {
               document.getElementById('pwsd').innerHTML="Enter Your Password";  
               return false;

            } if (pwsd1.length<8) {
                document.getElementById('pwsd').innerHTML="* Password Should be 8 Characters*";
                return false; 
              }

                if ( conpwsd1  == "") {
               document.getElementById('conpwsd').innerHTML="Enter Your ConfirmPassword"; 
               return false;
             }
         if ( conpwsd1 != pwsd1) {
               document.getElementById('conpwsd').innerHTML="Your Password doesn't match";  
               return false;
}

         
          }

  </script>


</body>
</html>
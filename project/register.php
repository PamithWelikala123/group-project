<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

//something was posted
$First_Name = $_POST['first_name'];
$Last_Name = $_POST['last_name'];
$Address = $_POST['address'];
$Postal_Code = $_POST['postal_code'];
$City = $_POST['city'];
$Contact_No = $_POST['contact_no'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Confirm_Password = $_POST['confirm_password'];

if((!empty($First_Name)) && (!empty($Last_Name)) && (!empty($Address)) && (!empty($Postal_Code)) && (!empty($City)) && (!empty($Email)) && (!empty($Password)) && (!empty($Confirm_Password)) && (!empty($Contact_No)) )
{ 
$user_id = random_num(20);
$query = "insert into register (first_name,last_name,address,postal_code,city,contact_no,email,password,confirm_password) values('$First_Name','$Last_Name','$Address','$Postal_Code','$City','$Contact_No','$Email','$Password','$Confirm_Password')";

mysqli_query($con,$query);
header("Location: login.php");
die;

}  
else{
  echo "Please Enter Some Valid Information!";
}
        
}

?>



<!DOCTYPE html>
<html>
    <head>
        
        <title>
           Register Page
        </title>
        <link rel="Stylesheet" href="Register.css">
        
    </head>
    <body>

        <div class="logo">
               <img class="img1"  src="pics\logo.png">
        </div>

        <div class="Register">
              <p class="letter">Register to CropFello</p>
        </div>

        <div style="display : grid; grid-template-columns: 60% 40%">
              <div>
                <form method="post">

                     <div style="display : grid; grid-template-columns: 50% 50%"> 

                              <div>
                                <input class="firstname" type="text" placeholder="  First Name" name="first_name"> 
                              </div>
                              <div>
                                <input class="lastname" type="text" placeholder="  Last Name" name="last_name"> 
                              </div>

                     </div>
                    
                     <div>
                        <label class="Address-name">Address</Address></label>
                        <label class="Address-name1">*</label>
                        <br>
                           <input class="Address" type="text" name="address"> 
                     </div>
                     
                     <div style="display : grid; grid-template-columns: 50% 50%">
                      
                            <div> 
                              <label class="Postal-code-name">Postal code</Address></label>
                              <label class="Postal-code-name1">*</label>
                              <br>
                              <input class="Postal-code" type="text" name="postal_code"> 
                            </div>

                            <div>
                              <label class="City-name">City</Address></label>
                              <label class="City-name1">*</label>
                              <br>
                              <input class="City" type="text" name="city">
                            </div>
                     </div>

                     <div>
                           <label class="ContactNo-name">Contact No</Address></label>
                            <label class="ContactNo-name1">*</label>
                             <br>
                             <img class="srilanka"  src="pics\Sri Lanka.png">
                             <label class="ContactNo-name2">|</label>
                             <label class="ContactNo-name3">+94</label>
                            <input class="ContactNo" type="text" name="contact_no">
                     </div>


              </div>
              <div>
                      <div>
                        <label class="Email-name">Email</label>
                        <label class="Email-name1">*</label>
                        <br>
                        <input class="Email" type="text" name="email">
                      </div>

                      <div>
                        <label class="Password-name">Passsword</label>
                        <label class="Password-name1">*</label>
                        <br>
                        <input class="Password" type="password" name="password">
                      </div>

                      <div>
                        <label class="Confirm-Password-name">Confirm Passsword</label>
                        <label class="Confirm-Password-name1">*</label>
                        <br>
                        <input class="Confirm-Password" type="password" name="confirm_password">
                      </div>

                      <div>
                          <input id="button" class="Register-but" type="submit" value="Register">
                          
                      </div>
</form>


            </div>
        </div>

        <div>
          <img class="img2" src="pics\register-corner2.png">
          <img class="img3" src="pics\register-corner.png">
        </div>


    </body>

</html>

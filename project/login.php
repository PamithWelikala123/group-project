<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{

			//read from database
			$query = "select * from register where Email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: feed.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
                {
                    echo "wrong username or password!";
                }
	}

?>


<!DOCTYPE html>
<html>
    <head>
        
        <title>
            login page
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="nikan.css">
    </head>
    <body>
  <div style="display : grid;
      grid-template-columns:50% 50%;">

        <div class="back">
                <div class="mainletter">
                          <p class="letters">Don't have an account? <a style="font-weight: 600%; color: black;" href="register.php">Register</a></p>
                          
               </div>
            
                <div class="corner">
              
                          <img class="img" src="pics\Vector.png">
                          <img class="img1" src="pics\Vector-1.png">
                 </div>  
          </div>  

        <div>
                  <div>
                         <img class="logo"  src="pics\logo.png">
                  </div>

                  <div>
                  <form method="post">

                        <input class="search1" type="textbox" id="email" placeholder="  Enter your email address" name="email">
                        <label class="tag1">Email</label>
                        <input class="search2" type="textbox" placeholder="  Enter your password" name="password">
                        <label class="tag2">Password</label>
                        <input class="search3" type="checkbox">
                        <label class="tag3">Remember me</label>
                        <button class="button">Login</button>
                        <a class="link" href="url">Forgot password</a>

                  </form>
                        


                  </div>
        </div>



   </div>



    </body>

</html>


<?php
        // put your code here
        if(isset($_POST['submit'])){
        $email = $_POST['email'];	       
        $password = $_POST['password'];        
        $con = mysqli_connect("localhost","root","","petcare");       
        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " .mysqli_connect_error();
                    }		
			$query = "SELECT * FROM registration WHERE email='$email' and password='$password'";
                        $result = mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                session_start();
                                $_SESSION['email'] = $email;  
                                
                                header("Location: userdetails.html");
                            }
                            else{
                                echo("Invalid credenatials");
                            }                            
                        }                     
                        else{
                            echo("Invalid credenatials");
                        }
	      }      
        ?>
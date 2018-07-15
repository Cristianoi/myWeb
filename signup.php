<?php
    session_start();
?>

<!doctype html>
<html lang="en">

	<head>
		<title>Restock Bay</title>
        <link rel="stylesheet" href="css/styles.css">
	</head>
	
	<body>
        
        <div id="wrapper">  
            
            <!--------------------------- Header Starts --------------------------->
            <header>
                
                
            </header>
            <!--------------------------- Header Ends --------------------------->

            
            <!--------------------------- Section Starts --------------------------->
            <section>
                
                <h1>Sign Up</h1>
                
                
                
                <?php
                    if(isset($_POST['submit'])) 
                    {
                        $fn = $_POST["first_name"];
                        $ln = $_POST["last_name"];
                        $e = $_POST["email"];
                        $u = $_POST["username"];
                        $p = $_POST["password"];


                        $conn = new PDO ("mysql:host=localhost; dbname=databape;", "palace", "supreme");
                        $sql= "
                        INSERT INTO users (first_name, last_name, email, username, password)
                        VALUES ('$fn', '$ln', '$e', '$u', '$p')";
                        $conn->query($sql);

                        echo "$u have been signed up";
                    }
                        else               
                    {
                ?>   
                    <div id='signup_form'>
                        <form method='post' action="signup.php">
                            <label for='first_name'>First Name</label><br>
                            <input name='first_name' id='first_name' class='inputbox'/> <br/> 
                            <label for='last_name'>Last Name</label><br>
                            <input name='last_name' id='last_name' class='inputbox'/> <br/>
                            <label for='email'>Email Address</label><br>
                            <input name='email' id='email' class='inputbox'/> <br/>
                            <label for='username'>Username</label><br>
                            <input name='username' id='username' class='inputbox'/> <br/>
                            <label for='password'>Password</label><br>
                            <input name='password' id='password' type='password' class='inputbox'/> <br/>
                            <button name ='submit' class='button'>Sign Up</button>
                        </form>         
                    </div>
                <?php
                    }
                ?>
                
                
                
                
                
            </section>
            <!--------------------------- Section Ends --------------------------->

            
            
            
            <!--------------------------- Footer Starts --------------------------->
            
            <!--------------------------- Footer Ends --------------------------->
            
        </div>
		
		
	</body>
	
</html>

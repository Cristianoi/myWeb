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
                
            <h1>Log In</h1>
    
                
                <?php
                    if(isset($_POST['submit'])) 
                    {
                        $un = $_POST["username"];
                        $pw = $_POST["password"];


                        $conn = new PDO ("mysql:host=localhost; dbname=databape;", "palace", "supreme");
                        
                        $results = $conn->query("select * from users where username='$un' and password='$pw'");
                        $row = $results->fetch();

                        if ($row == false) {
                            echo "Wrong credentials";
                            
                            ?>   
                            <div id='login_form'>
                                <form method='post' action='login.php'>
                                    <label for='username'>Username</label><br>
                                    <input name='username' id='username' class='inputbox'/> <br/>
                                    <label for='password'>Password</label><br>
                                    <input name='password' id='password' type='password' class='inputbox'/> <br/>
                                    <button name='submit' class='button'>Log In</button>
                                </form>
                            </div>
                            <?php
                            
                            
                        } else {
                            echo "Your are logged in as $un";
                            $_SESSION["gatekeeper"] = $un;
                        }
                
                    } else {
                        
                ?>
                        <div id='login_form'>
                        <form method='post' action='login.php'>
                            <label for='username'>Username</label><br>
                            <input name='username' id='username' class='inputbox'/> <br/>
                            <label for='password'>Password</label><br>
                            <input name='password' id='password' type='password' class='inputbox'/> <br/>
                            <button name='submit' class='button'>Log In</button>
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

<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devcodes - Login</title>
    <link rel="stylesheet" href="main.css">    
    <script src="login_script.js"></script>
</head>

<body>
    <div class="">
       <div class="split left-content">
       		<div class="centered">
            <div class="illustration"></div>
            <div class="text-content">
                <h1>Team DevCodes</h1>
                <p>Dev Codes is a team of developers from HNG
                    Internship working assiduously together to
                    become worldclass devs.
                </p>
            </div>
            </div>
        </div>
    </div>

        <div class="split right-content">
            <h1 class="name"><center>DevCodes</center></h1>
                
                <form action="" class="form-content">
                    <h2>Login</h2>
                    <div class="centered input">
                                            
                        <input id="email" type="text" placeholder="Email or Username" required>
                        <input id="password" type="password" placeholder="Password" required>
                    

                        <a href="#" style="text-decoration: none;"><p class="f-password">Forgot Password?</p></a>
                        <button id="loginBtn" type= "submit" class="signin">Sign In</button>
                             
                        <a href="signup.html" style="text-decoration: none;">  <p class="signup">Don't have an account yet? Sign Up</p></a>
                    </div>
                </form> 

               
        </div>
            
     

    </body>

</html>

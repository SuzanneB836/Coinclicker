<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="styles/login.css">
<body>
    <div class="background">
        <div class="Login">
           <div class="text1"><h1>Login</h1></div>
           <div class="text2"><h2>(register)</h2></div>
           <div class="Inlog_Methode">
           <form action="login2.php" method="post">	<!-- default="get" -->		
            <input type="E-mail" id="E-mail" name="E-mail" placeholder="E-mail">
            <!-- <input type="Username" id="Username" name="Username" value="Username"> -->
            <input type="Password" id="Password" name="Password" placeholder="Password">
            <div class="button">
                <button type="submit" >Login</button>
                </div>
                <div class="text3"><h2>Dont have an account yet? Register</h2></div>
                <div class="text4"><h2>By signing up I agree to the Terms of Service</h2>
                <div class checkbox></div>
                 <input type="checkbox" id="myCheckbox">
                 <label for="myCheckbox"></label>
               </div>      
           </form >
           </div>
          </div>
        </div>
        </div>      
</body>

</html>
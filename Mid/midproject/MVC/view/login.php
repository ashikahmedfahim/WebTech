<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>User Login</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('header.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">User Login</p>
                    <?php
                        require('../controller/loginVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="id" class="mainDivFormLabel">User Id</label>
                        <br>
                        <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>" class="mainDivFormInput">
                        <br>
                        <label for="idErr" class="mainDivFormLabelError"><?php echo $idErr;?></label>
                        <br>
                        <label for="password" class="mainDivFormLabel">Password</label>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>" class="mainDivFormInput">
                        <br>
                        <label for="passwordErr" class="mainDivFormLabelError"><?php echo $passwordErr;?></label>
                        <label for="loginErr" class="mainDivFormLabelError"><?php echo $loginErr;?></label>
                        <br>
                        <input type="checkbox" id="rm" name="rm" checked class="">
                        <label for="rm"class="mainDivFormRememerMe">Remember me</label>
                        <br>
                        <br>
                        <a href="forgotPassword.php"class="mainDivFormA">Forgot Password?</a>
                        
                        <input type="submit" value="Login" name="login" class="mainDivFormButton">
                    </form>
                </div>
            
            </main>
            <footer class="footer">
                <?php  include('footer.php');  ?>
            </footer>
        </div>
    </div>
</body>
</html>
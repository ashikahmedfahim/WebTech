<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/forgotPassword.css">
    <title>Document</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header>
            
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Forgot Password?</p>
                    <?php
                        require('../controller/forgotPasswordVerfication.php');
                    ?>
                    <p class="mainDiv1P"><?php echo $passwordText;?></p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="id" class="mainDivFormLabel">User Id</label>
                        <br>
                        <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>" class="mainDivFormInput">
                        <br>
                        <label for="idErr" class="mainDivFormLabelError"><?php echo $idErr;?></label>
                        <br>
                        <label for="mobileNumber" class="mainDivFormLabel">Mobile Number</label>
                        <br>
                        <input type="text" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number" value="<?php echo $mobileNumber?>" class="mainDivFormInput">
                        <br>
                        <label for="mobileNumberErr" class="mainDivFormLabelError"><?php echo $mobileNumberErr;?></label></label>
                        <br>
                        <input type="submit" value="Submit" class="mainDivFormButton">
                    </form>
                </div>
            
            </main>
            <footer>
            
            </footer>
        </div>
    </div>
</body>
</html>
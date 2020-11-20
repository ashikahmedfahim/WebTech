<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="bodyBG">
        <div class="container">
            <header>
            
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Profile Update</p>
                    <?php
                        require('../controller/profileUpdateVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="mobile" class="mainDivFormLabel">Enter New Mobile No</label>
                        <br>
                        <br>
                        <input type="text" name="mobile" id="mobile" placeholder="Enter New Mobile No" value="<?php echo $mobile ?>" class="mainDivFormInput">
                        <br>
                        <label for="mobileErr" class="mainDivFormLabelError"><?php echo $mobileErr;?></label>
                        <label for="mobileOk" class="mainDivFormLabelOk"><?php echo $mobileOk;?></label>
                        <br>
                        <br>
                        <input type="submit" value="Submit" name="submit" class="mainDivFormButton">
                    </form>
                </div>
            
            </main>
            <footer>
            
            </footer>
        </div>
    </div>
</body>
</html>
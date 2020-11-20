<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Change Password</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header>
            
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Change Passowrd</p>
                    <?php
                        require('../controller/changePasswordVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="currentPassword" class="mainDivFormLabel">Enter Current Password</label>
                        <br>
                        <input type="password" name="currentPassword" id="currentPassword" placeholder="Enter Current Password" value="<?php echo $currentPassword;?>" class="mainDivFormInput">
                        <br>
                        <label for="currentPasswordErr" class="mainDivFormLabelError"><?php echo $currentPasswordErr;?></label>
                        <br>
                        <label for="newPassword" class="mainDivFormLabel">Enter New Password</label>
                        <br>
                        <input type="text" name="newPassword" id="newPassword" placeholder="Enter New Password" value="<?php echo $newPassword;?>" class="mainDivFormInput">
                        <br>
                        <label for="newPasswordErr" class="mainDivFormLabelError"><?php echo $newPasswordErr;?></label>
                        <br>
                        <label for="confirmPassword" class="mainDivFormLabel">Confirm Password</label>
                        <br>
                        <input type="text" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" value="<?php echo $confirmPassword;?>" class="mainDivFormInput">
                        <br>
                        <label for="confirmPasswordErr" class="mainDivFormLabelError"><?php echo $confirmPasswordErr;?></label>
                        <label for="mainDivFormLabelOk" class="mainDivFormLabelOk"><?php echo $updatePassword;?></label>
                        <br>
                        <input type="submit" value="Confirm" name="confirm" class="mainDivFormAdd">
                        <br>
                    </form>
                </div>

            </main>
            <footer>
            
            </footer>
        </div>
    </div>
</body>
</html>
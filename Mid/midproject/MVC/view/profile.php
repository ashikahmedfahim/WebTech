<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/profile.css">
    <title>Document</title>
</head>
<body>
<div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('header.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Profile</p>
                    <?php
                        require('../controller/profileCheck.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="name" class="mainDivFormLabel">Name</label>
                        <br>
                        <br>
                        <label for="name" class="mainDivFormLabelValue">Ashik Ahmed</label>
                        <br>
                        <br>
                        <label for="designation" class="mainDivFormLabel">Designation</label>
                        <br>
                        <br>
                        <label for="designation" class="mainDivFormLabelValue">Admin (Accountant)</label>
                        <br>
                        <br>
                        <label for="salary" class="mainDivFormLabel">Salary</label>
                        <br>
                        <br>
                        <label for="salary" class="mainDivFormLabelValue">50,000/=</label>
                        <br>
                        <br>
                        <label for="mobile" class="mainDivFormLabel">Mobile No</label>
                        <br>
                        <br>
                        <label for="mobile" class="mainDivFormLabelValue"><?php echo $mobileNumber;?></label>
                        <br>
                        <br>
                        <input type="submit" value="Update" name="update" class="mainDivFormButton">
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
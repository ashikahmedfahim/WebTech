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
            <div class="">
                <p class="mainDiv1P">Salary</p>
                <?php
                    require('../view/generateSalary.php');
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="salaryMainDivForm">
                    <input type="submit" value="Generate Salary" name="login" class="salaryMainDivFormButton">
                    <input type="submit" value="Generate Bonus" name="login" class="salaryMainDivFormButton">
                    <input type="submit" value="Send to Admin" name="login" class="salaryMainDivFormButton">
                </form>
            </div>
        
        </main>
        <footer>
        
        </footer>
        </div>
    </div>
</body>
</html>
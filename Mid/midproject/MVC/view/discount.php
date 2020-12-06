<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/discount.css">
    <title>Discount</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('header.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Discount</p>
                    <?php
                        require('../controller/discountVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="discount" class="mainDivFormLabel">Enter Percentage</label>
                        <br>
                        <input type="text" name="discount" id="discount" placeholder="Enter discount Percentage - Only numbers" value="<?php echo $addDiscount?>" class="mainDivFormInput">
                        <br>
                        <label for="discountErr" class="mainDivFormLabelError"><?php echo $addDiscountErr;?></label>
                        <label for="addDiscountSuccessful" class="mainDivFormLabelOk"><?php echo $addDiscountSuccessful;?></label>
                        <br>
                        <input type="submit" value="Add Discount" name="addDiscountButton" class="mainDivFormAdd">
                        <br>
                    </form>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivFormDis">
                        <label for="removeDiscount" class="mainDivFormLabel">Remove Previous Discount?</label>
                        <br>
                        <label for="discountErr" class="mainDivFormLabelError"><?php echo $removeDiscountErr;?></label>
                        <label for="removeDiscountSuccessful" class="mainDivFormLabelOk"><?php echo $removeDiscountSuccessful;?></label>
                        <input type="submit" value="Remove Discount" name="removeDiscount" class="mainDivFormRemove">
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
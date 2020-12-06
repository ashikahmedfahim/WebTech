<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/refund.css">
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
                    <p class="mainDiv1P">Refund Requests</p>
                    <?php
                        require('../controller/refundCheck.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="refundRequest" class="mainDivFormLabel">Total Refund Requests</label>
                        <br>
                        <br>
                        <label for="refundRequest" class="mainDivFormLabelValue"><?php echo $refundRequest;?></label>
                        <br>
                        <br>
                        <label for="refundErr" class="mainDivFormLabelError"><?php echo $refundErr;?></label>
                        <label for="refundSuccessful" class="mainDivFormLabelOk"><?php echo $refundSuccessful;?></label>
                        <br>
                        <br>
                        <input type="submit" value="Refund All" name="refundAll" class="mainDivFormButton">
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
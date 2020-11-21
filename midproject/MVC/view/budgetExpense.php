<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/budgetExpense.css">
    <link rel="stylesheet" href="../asset/css/discount.css">
    <title>Budget And Expenses</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header>
            
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Budget And Expenses</p>
                    <?php
                        require('../controller/budgetExpenseVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="budget" class="mainDivFormLabel">Enter Budget Amount</label>
                        <br>
                        <input type="text" name="budget" id="budget" placeholder="Enter Budget Amount - Only numbers" value="<?php echo $addBudget?>" class="mainDivFormInput">
                        <br>
                        <label for="budgetErr" class="mainDivFormLabelError"><?php echo $budgetErr;?></label>
                        <label for="budgetSuccessful" class="mainDivFormLabelOk"><?php echo $budgetSuccessful;?></label>
                        <br>
                        <input type="submit" value="Add Budget" name="addBudget" class="mainDivFormAdd">
                        <br>
                    </form>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivFormDis">
                        <label for="budget" class="mainDivFormLabel">Remaining Amount</label>
                        <br>
                        <br>
                        <label for="budget" class="mainDivFormLabelValue"><?php echo $budget;?></label>
                        <br>
                        <br>
                        <label for="expense" class="mainDivFormLabel">Enter Expense Amount</label>
                        <br>
                        <input type="text" name="expense" id="expense" placeholder="Enter Expense Amount - Only numbers" value="<?php echo $addExpense?>" class="mainDivFormInput">
                        <br>
                        <label for="expenseErr" class="mainDivFormLabelError"><?php echo $expenseErr;?></label>
                        <label for="expenseSuccessful" class="mainDivFormLabelOk"><?php echo $expenseSuccessful;?></label>
                        <br>
                        <input type="submit" value="Add Expense" name="addExpense" class="mainDivFormAdd">
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
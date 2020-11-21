<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/salary.css">
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
                    require('../controller/salaryVerification.php');
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="salaryMainDivForm">
                    <input type="submit" value="Generate Salary" name="salary" class="salaryMainDivFormButton">
                    <input type="submit" value="Generate Bonus" name="bonus" class="salaryMainDivFormButton">
                    <input type="submit" value="Sent to Admin" name="SOA" class="salaryMainDivFormButton">
                </form>
                <div class="salaryMainDivForm">
                    <table class="MainDivTable ">
                        <tr class="MainDivTableRow">
                            <th class="MainDivTableCol mainDivTableHeader">Designation</th>
                            <th class="MainDivTableCol mainDivTableHeader">Month</th>
                            <th class="MainDivTableCol mainDivTableHeader">Salary</th>
                            <th class="MainDivTableCol mainDivTableHeader">Bonus</th>
                        </tr>
                        <tr class="MainDivTableRow">
                            <td class="MainDivTableCol">Admin</td>
                            <td class="MainDivTableCol"><?php echo date('M'); ?></td>
                            <td class="MainDivTableCol"><?php echo $adminSalary; ?></td>
                            <td class="MainDivTableCol"><?php echo $adminBonus; ?></td>
                        </tr>
                        <tr class="MainDivTableRow">
                            <td class="MainDivTableCol">Accountant</td>
                            <td class="MainDivTableCol"><?php echo date('M'); ?></td>
                            <td class="MainDivTableCol"><?php echo $accountantSalary; ?></td>
                            <td class="MainDivTableCol"><?php echo $accountantBonus; ?></td>
                        </tr>
                        <tr class="MainDivTableRow">
                            <td class="MainDivTableCol">Officer</td>
                            <td class="MainDivTableCol"><?php echo date('M'); ?></td>
                            <td class="MainDivTableCol"><?php echo $officerSalary; ?></td>
                            <td class="MainDivTableCol"><?php echo $officerBonus; ?></td>
                        </tr>
                    </table>
                    <label for="SOA" class="mainDivFormLabelOk"><?php echo $SOA;?></label>
                </div>
            </div>
        
        </main>
        <footer>
        
        </footer>
        </div>
    </div>
</body>
</html>
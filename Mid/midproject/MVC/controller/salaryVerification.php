<?php
    $adminSalary = $accountantSalary = $officerSalary = "";
    $adminBonus = $accountantBonus = $officerBonus = "";
    $SOA = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['salary'])) {
            $adminSalary = 150000;
            $accountantSalary = 50000;
            $officerSalary = 80000;
        }
        if (isset($_POST['bonus'])) {
            $adminSalary = 150000;
            $accountantSalary = 50000;
            $officerSalary = 80000;
            $adminBonus = 15000;
            $accountantBonus = 5000;
            $officerBonus = 8000;
        }
        if (isset($_POST['SOA'])) {

            $SOA = "Sent to Admin";
        }
        
    }

?>
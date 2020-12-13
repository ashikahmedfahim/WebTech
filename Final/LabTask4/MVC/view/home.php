<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="homeValidation.js"></script>
    <title>Home</title>
</head>
<body>
<?php
        require('../controller/homeController.php');
    ?>
        <br><br>
        <h1>View Page</h1>
        <br><br>
        <table >
        <thead >
            <tr>
            <th>#</th>
            <th >User Name</th>
            <th >Id</th>
            <th >Email</th>
            <th >Date of Birth</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th >1</th>
            <td><?php echo $userName?></td>
            <td><?php echo $id?></td>
            <td><?php echo $email?></td>
            <td><?php echo $dob?></td>
            </tr>
        </tbody>
        </table>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post">
            <br><br>
            <br><br>
            <div>
                <label for="emailn">Enter Email</label>
                <input type="text" name="emailn" id="emailn" placeholder="Enter Email" >
            </div>
            <br>
            <button type="submit" value="submit" name="submit">UpdateEmail</button>
            <br><br><br>
            <hr>
            <button type="submit" value="deleteAccount" name="deleteAccount" >Delete Account</button>
        </form>
    
</body>
</html>
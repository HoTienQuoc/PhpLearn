<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
$name = "";
$nameError = "";
$email = "";
$emailError = "";
if (empty($_POST["name"])) {
$nameError = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $nameError = "Error: Only letters and whitespace
    allowed!";
    }
    }
    if (empty($_POST["email"])) {
    $emailError = "Email is required";
    } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Error: Invalid email format!";
    }
    }
    ?>

<h2>PHP Form Validation</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="form-action.php" >
Name: <input type="text" name="name">
<span class="error">* <?php echo $nameError;?></span>
<br><br>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailError;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
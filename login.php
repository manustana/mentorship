<?php
    include "navbar.php";
    include "logincode.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php } ?>
<br>
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Remember Me</label><br>
    <input type="submit" value="Login">
</form>
</body>
<?php include "footer.php"?>
</html>

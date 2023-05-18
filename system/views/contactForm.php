<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
</head>
<body>
<?php include "navbar.php" ?>;
<h1>Contact Us</h1>
<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo isset($formData['name']) ? htmlspecialchars($formData['name']) : ''; ?>"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo isset($formData['email']) ? htmlspecialchars($formData['email']) : ''; ?>"><br>

    <label for="message">Message:</label>
    <textarea name="message" id="message"><?php echo isset($formData['message']) ? htmlspecialchars($formData['message']) : ''; ?></textarea><br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

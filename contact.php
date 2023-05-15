<?php
include 'navbar.php';

$email = $_GET["email"] ?? "not@mail.com";
$name = $_GET["fname"].$_GET["lname"] ?? "noname";
$phone = $_GET["phone"] ?? "0000000000";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="best cheap fake restaurant">
    <title>Home of the best fake food</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<h4>Contact us:</h4>
<ul>
    <li>Email: <?=  $email;?></li>
    <li>Name: <?= $name;?></li>
    <li>Phone: <?= $phone;?></li>
</ul>
<br>
<br>
<div class="d-flex justify-content-center align-items-center">
<form action="">Tell us what you think about our restaurant!
    <br>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone"><br><br>
    <div>
        <button id="submit" type="submit">Submit</button>
    </div>
</form>
</div>
<script>
    // const element = document.querySelector('form');
    // element.addEventListener('submit', event => {
    //     event.preventDefault();
    //     alert(document.querySelector("#fname").value + " " + document.querySelector("#lname").value + " " +
    //         document.querySelector("#email").value + " "  + document.querySelector("#feedb").value);
    // });
    // document.body.addEventListener("mouseleave", function(event) {
    //     if(event.clientY <= 0 || event.clientX <= 0 || (event.clientX >= window.innerWidth || event.clientY >= window.innerHeight)) {
    //         alert("I'm out");
    //     }
    // });
</script>
</body>
<?php include "footer.php"; ?>
</html>
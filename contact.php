<?php
$email = $_GET["email"] ?? "not@mail.com";
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.html">My Restaurant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.html">Services</a>
            </li>
        </ul>
    </div>
</nav>
<h4>Contact us:</h4>
<ul>
    <li>Email: <?=  $email;?></li>
    <li>Phone: 0123456789</li>
    <li>Google: Not A Real Restaurant</li>
    <li>Facebook: Not A Real Restaurant</li>
    <li>Address: 23121 No Street, City</li>
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
    <label for="feedb">Feedback:</label><br>
    <input type="text" id="feedb" name="feedb"><br><br>
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
</html>
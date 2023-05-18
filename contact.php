<?php
    include "logincode.php";
    include 'navbar.php';
    $email = $_GET["email"] ?? "not@mail.com";
    $name = $_GET["fname"]." ".$_GET["lname"] ?? "noname";
    $phone = $_GET["phone"] ?? "0000000000";
    $site = $_GET["site"] ?? "";
    $isValidURL = preg_match("/^https?:\\/\\/(?:www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b(?:[-a-zA-Z0-9()@:%_\\+.~#?&\\/=]*)$/", $site);
    if(!$isValidURL){
        $site = '<span style="color:red">URL not valid</span>';
    }
    $file = $_GET["file"];
    if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
       header('location: home.php');
   }

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
    <li>Site: <?= $site;?></li>
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
    <input type="text" id="phone" name="phone"><br>
    <label for="site">Your site:</label><br>
    <input type="text" id="site" name="site"><br><br>
    <div>
        <button id="submit" type="submit">Submit</button>
    </div>
</form>
</div>
<br>
<div class="d-flex justify-content-center align-items-center">
    <form action="" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload Image" name="submit">
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
<?php
    echo file_get_contents($file);
?>
</body>
<?php include "footer.php"; ?>
</html>
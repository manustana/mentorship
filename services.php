<?php
    include "logincode.php";
    include "navbar.php";
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

<h4>Services provided:</h4>
<ul>
    <li>High quality fake food at one of our 3 restaurants across the city</li>
    <li>Quick and cost-free delivery anywhere in the city or around a 20km radius</li>
    <li>Open to special orders and recipes for orders of at least 1000 pesos</li>
</ul>
<h1>Here are some of our finest dishes:</h1>
<div class="article">
    Unfortunately, due to a limited, we could not afford any photos. Instead, here are the names of the dishes:
    <p>Realest fake burger</p>
    <p>Fakest real pasta</p>
    <p>Cat soup(not real cat)</p>
    <p>Pork falafel</p>
    <p>Fried chicken sushi</p>

</div>
</body>
<?php include "footer.php"; ?>
</html>
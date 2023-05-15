<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <form id="myForm">
        <div class="form-group">
            <label for="city">Search city</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <ul class="list-group" id="list" style="margin-bottom: 30px;"></ul>
<script>
    async function getCitiesByName(city) {
        const response = await fetch("https://api.teleport.org/api/cities/?search=" + city);
        return await response.json();
    }

    document.getElementById("myForm").addEventListener("submit", async (event) => {
        let cityDiv = document.getElementById('list');
        cityDiv.innerHTML = '';
        event.preventDefault();
        let data = await getCitiesByName(event.target.elements.city.value);
        console.log(data);
        const result = data["_embedded"]["city:search-results"];

        for(let i = 0; i < result.length; i++) {
            const element = document.createElement('li');
            element.classList.add('list-group-item');
            element.innerHTML = `${result[i]["matching_full_name"].toString()}`;
            cityDiv.appendChild(element);
        }
    });
</script>
</body>
<?php include "footer.php"; ?>
</html>
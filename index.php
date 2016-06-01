<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<head>
        <meta charset="utf-8">
        <title>index</title>
</head>
<body background="weather.jpg">
    <div class="wrapper" style="width: 425px;height: 350px;padding-top: 10px;margin: 10% auto;">
    <div><h2 style="padding-left: 90px">weather Service</h2></div>
    <div class="container">
        <form action="control.php" method="post">
        <div class="form-group col-md-4">
            <label class="" >latitude: </label>
            <input id="x" required class="form-control" type="text" name="lat"><br>
            <label class="" >longitude: </label>
            <input id="y" required class="form-control" type="text" name="lon"><br>
            <button onclick="getLocation()" class="btn btn-default">get my location</button>
            <span id="error"></span>
            </br>
            <div style="padding-top: 20px"></div>
            <input class="btn btn-default" type="submit" name="submit" value="Results">
            <span style="color: red; padding-left: 20px"><?php if(isset($_GET['id'])){echo "Invalid input ! try again !";}?><span>
            <span style="color: red; padding-left: 20px"><?php if(isset($_GET['err'])){echo $_GET['err']." ! error !";}?><span>
        </div>
        </form>

    </div>

<script>

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        document.getElementById("error").innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    document.getElementById("x").value = position.coords.latitude;
    document.getElementById("y").value = position.coords.longitude;
}
</script>
</body>

</html>

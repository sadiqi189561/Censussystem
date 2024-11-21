<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Enumerator</title>
</head>

<body>
    <h1>Create Enumerator</h1>
    <form method="post">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name" required>
        <label>Region</label>
        <input type="text" name="region" placeholder="Enter region" required>
        <input type="submit" name="submit" value="Create Enumerator">
    </form>
    <?php
    include 'dbhinc.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $region = $_POST['region'];
        $sql = "INSERT INTO Enumerator (Name, Region) VALUES ('$name', '$region')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Enumerator Created Successfully";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>

</html>
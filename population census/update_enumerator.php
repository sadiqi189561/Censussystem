<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Enumerator</title>
</head>
<body>
    <h1>Update Enumerator</h1>
    <?php
    include 'dbhinc.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM Enumerator WHERE EnumeratorID = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $row['Name']; ?>" required>
        <label>Region</label>
        <input type="text" name="region" value="<?php echo $row['Region']; ?>" required>
        <input type="hidden" name="id" value="<?php echo $row['EnumeratorID']; ?>">
        <input type="submit" name="submit" value="Update Enumerator">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $region = $_POST['region'];
        $id = $_POST['id'];
        $sql = "UPDATE Enumerator SET Name='$name', Region='$region' WHERE EnumeratorID=$id";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Enumerator Updated Successfully";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>
</html>

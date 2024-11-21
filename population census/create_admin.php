<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Admin</title>
</head>
<body>
    <h1>Create Admin</h1>
    <form method="post">
        <label>Name</label>
        <input type="text" name="name" required>
        <input type="submit" name="submit" value="Create">
    </form>
    <?php
    include 'dbhinc.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];

        $sql = "INSERT INTO Admin (Name) VALUES ('$name')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Admin Created Successfully";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>
</html>

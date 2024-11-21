<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Citizen</title>
</head>

<body>
    <h1>Delete Citizen</h1>
    <form method="post">
        <label>Citizen ID</label>
        <input type="number" name="citizen_id" required>
        <input type="submit" name="submit" value="Delete">
    </form>
    <?php
    include 'dbhinc.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $citizen_id = $_POST['citizen_id'];

        $sql = "DELETE FROM Citizen WHERE CitizenID='$citizen_id'";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Citizen Deleted Successfully";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>

</html>
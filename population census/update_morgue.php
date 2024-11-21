<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Morgue</title>
</head>

<body>
    <h1>Update Morgue</h1>
    <?php
    include 'dbhinc.php';
    if (isset($_GET['id'])) {
        $morgue_id = $_GET['id'];
        $sql = "SELECT * FROM Morgue WHERE MorgueID = $morgue_id";
        $result = mysqli_query($connect, $sql);
        $morgue = mysqli_fetch_assoc($result);
    }
    ?>
    <form method="post">
        <input type="hidden" name="morgue_id" value="MorgueID">
        <label>Morgue Name</label>
        <input type="text" name="morgue_name" value="'MorgueName" required>
        <label>Morgue Location</label>
        <input type="text" name="morgue_location" value="MorgueLocation" required>
        <label>Contact Number</label>
        <input type="text" name="contact_number" value="ContactNumber" required>
        <input type="submit" name="submit" value="Update Morgue">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $morgue_id = $_POST['morgue_id'];
        $morgue_name = $_POST['morgue_name'];
        $morgue_location = $_POST['morgue_location'];
        $contact_number = $_POST['contact_number'];

        $sql = "UPDATE Morgue SET MorgueName='$morgue_name', MorgueLocation='$morgue_location', ContactNumber='$contact_number' WHERE MorgueID=$morgue_id";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Morgue updated successfully.";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>

</html>
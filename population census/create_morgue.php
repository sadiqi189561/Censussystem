<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Morgue</title>
</head>

<body>
    <h1>Add New Morgue</h1>
    <form method="post">
        <label>Morgue Name</label>
        <input type="text" name="morgue_name" placeholder="Enter Morgue Name" required>
        <label>Morgue Location</label>
        <input type="text" name="morgue_location" placeholder="Enter Morgue Location" required>
        <label>Contact Number</label>
        <input type="text" name="contact_number" placeholder="Enter Contact Number" required>
        <input type="submit" name="submit" value="Add Morgue">
    </form>
    <?php
    include 'dbhinc.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $morgue_name = $_POST['morgue_name'];
        $morgue_location = $_POST['morgue_location'];
        $contact_number = $_POST['contact_number'];

        $sql = "INSERT INTO Morgue (MorgueName, MorgueLocation, ContactNumber) VALUES ('$morgue_name', '$morgue_location', '$contact_number')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Morgue added successfully.";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>

</html>
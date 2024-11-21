<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Hospital</title>
</head>
<body>
    <h1>Add New Hospital</h1>
    <form method="post">
        <label>Hospital Name</label>
        <input type="text" name="hospital_name" placeholder="Enter hospital name" required>
        <label>Hospital Location</label>
        <input type="text" name="hospital_location" placeholder="Enter hospital location" required>
        <label>Contact Number</label>
        <input type="text" name="contact_number" placeholder="Enter contact number" required>
        <input type="submit" name="submit" value="Add Hospital">
    </form>
    <?php
    include 'dbhinc.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $hospital_name = $_POST['hospital_name'];
        $hospital_location = $_POST['hospital_location'];
        $contact_number = $_POST['contact_number'];

        $sql = "INSERT INTO Hospital (HospitalName, HospitalLocation, ContactNumber) VALUES ('$hospital_name', '$hospital_location', '$contact_number')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Hospital added successfully.";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>
</html>

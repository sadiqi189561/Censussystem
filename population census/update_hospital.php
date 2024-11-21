<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Hospital</title>
</head>

<body>
    <h1>Update Hospital</h1>
    <?php
    include 'dbhinc.php';
    if (isset($_GET['id'])) {
        $hospital_id = $_GET['id'];
        $sql = "SELECT * FROM Hospital WHERE HospitalID = $hospital_id";
        $result = mysqli_query($connect, $sql);
        $hospital = mysqli_fetch_assoc($result);
    }
    ?>
    <form method="post">
        <input type="hidden" name="hospital_id" value="HospitalID">
        <label>Hospital Name</label>
        <input type="text" name="hospital_name" value="HospitalName" required>
        <label>Hospital Location</label>
        <input type="text" name="hospital_location" value="HospitalLocation" required>
        <label>Contact Number</label>
        <input type="text" name="contact_number" value="ContactNumber" required>
        <input type="submit" name="submit" value="Update Hospital">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $hospital_id = $_POST['hospital_id'];
        $hospital_name = $_POST['hospital_name'];
        $hospital_location = $_POST['hospital_location'];
        $contact_number = $_POST['contact_number'];

        $sql = "UPDATE Hospital SET HospitalName='$hospital_name', HospitalLocation='$hospital_location', ContactNumber='$contact_number' WHERE HospitalID=$hospital_id";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Hospital updated successfully.";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Citizen</title>
</head>

<body>
    <h1>Create Citizen</h1>
    <form method="post">
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Date of Birth</label>
        <input type="date" name="dob" required>
        <label>Address</label>
        <input type="text" name="address" required>
        <label>Marital Status</label>
        <input type="text" name="marital_status">
        <label>Gender</label>
        <input type="text" name="gender">
        <label>Age</label>
        <input type="number" name="age">
        <input type="submit" name="submit" value="Create">
    </form>
    <?php
    include 'dbhinc.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $marital_status = $_POST['marital_status'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];

        $sql = "INSERT INTO Citizen (Name, DateOfBirth, Address, MaritalStatus, Gender, Age) VALUES ('$name', '$dob', '$address', '$marital_status', '$gender', '$age')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Citizen Created Successfully";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>

</html>
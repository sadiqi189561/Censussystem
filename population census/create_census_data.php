<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Census Data</title>
</head>

<body>
    <h1>Create Census Data</h1>
    <form method="post">
        <label>Citizen ID</label>
        <input type="number" name="citizen_id" required>
        <label>Enumerator ID</label>
        <input type="number" name="enumerator_id">
        <label>Hospital ID</label>
        <input type="number" name="hospital_id">
        <label>Morgue ID</label>
        <input type="number" name="morgue_id">
        <label>Data Details</label>
        <textarea name="data_details" required></textarea>
        <input type="submit" name="submit" value="Create">
    </form>
    <?php
    include 'dbhinc.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $citizen_id = $_POST['citizen_id'];
        $enumerator_id = $_POST['enumerator_id'];
        $hospital_id = $_POST['hospital_id'];
        $morgue_id = $_POST['morgue_id'];
        $data_details = $_POST['data_details'];

        $sql = "INSERT INTO CensusData (CitizenID, EnumeratorID, HospitalID, MorgueID, DataDetails) VALUES ('$citizen_id', '$enumerator_id', '$hospital_id', '$morgue_id', '$data_details')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Census Data Created Successfully";
        } else {
            die(mysqli_error($connect));
        }
    }
    ?>
</body>

</html>

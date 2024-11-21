<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Hospitals</title>
</head>
<body>
    <h1>List of Hospitals</h1>
    <table border="1">
        <tr>
            <th>Hospital ID</th>
            <th>Hospital Name</th>
            <th>Location</th>
            <th>Contact Number</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'dbhinc.php';
        $sql = "SELECT * FROM Hospital";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['HospitalID']}</td>
                    <td>{$row['HospitalName']}</td>
                    <td>{$row['HospitalLocation']}</td>
                    <td>{$row['ContactNumber']}</td>
                    <td>
                        <a href='update_hospital.php?id={$row['HospitalID']}'>Edit</a>
                        <a href='delete_hospital.php?id={$row['HospitalID']}'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>

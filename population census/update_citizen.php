<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Citizens</title>
</head>
<body>
    <h1>Citizens List</h1>
    <table border="1">
        <tr>
            <th>Citizen ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Marital Status</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        <?php
        include 'dbhinc.php';
        $sql = "SELECT * FROM Citizen";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['CitizenID']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['DateOfBirth']}</td>
                    <td>{$row['Address']}</td>
                    <td>{$row['MaritalStatus']}</td>
                    <td>{$row['Gender']}</td>
                    <td>{$row['Age']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>

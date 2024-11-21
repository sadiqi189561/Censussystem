<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read Census Data</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Census Data</h1>
    <table>
        <tr>
            <th>Data ID</th>
            <th>Citizen ID</th>
            <th>Enumerator ID</th>
            <th>Hospital ID</th>
            <th>Morgue ID</th>
            <th>Data Details</th>
        </tr>
        <?php
        include 'dbhinc.php';
        $sql = "SELECT * FROM CensusData";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['DataID']}</td>
                    <td>{$row['CitizenID']}</td>
                    <td>{$row['EnumeratorID']}</td>
                    <td>{$row['HospitalID']}</td>
                    <td>{$row['MorgueID']}</td>
                    <td>{$row['DataDetails']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>

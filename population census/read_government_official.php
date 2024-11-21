<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read Government Officials</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Government Officials</h1>
    <table>
        <tr>
            <th>Official ID</th>
            <th>Name</th>
        </tr>
        <?php
        include 'dbhinc.php';
        $sql = "SELECT * FROM GovernmentOfficial";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['GovernmentOfficialID']}</td>
                    <td>{$row['Name']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>

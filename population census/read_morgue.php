<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Morgues</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Morgue List</h1>
    <table>
        <tr>
            <th>Morgue ID</th>
            <th>Morgue Name</th>
            <th>Morgue Location</th>
            <th>Contact Number</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'dbhinc.php';
        $sql = "SELECT * FROM Morgue";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['MorgueID']}</td>
                    <td>{$row['MorgueName']}</td>
                    <td>{$row['MorgueLocation']}</td>
                    <td>{$row['ContactNumber']}</td>
                    <td>
                        <a href='update_morgue.php?id={$row['MorgueID']}'>Edit</a> | 
                        <a href='delete_morgue.php?id={$row['MorgueID']}'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>


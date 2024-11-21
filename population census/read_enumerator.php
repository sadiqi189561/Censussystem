<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Enumerators</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>List of Enumerators</h1>
    <table>
        <tr>
            <th>Enumerator ID</th>
            <th>Name</th>
            <th>Region</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'dbhinc.php';
        $sql = "SELECT * FROM Enumerator";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['EnumeratorID']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Region']}</td>
                    <td>
                        <a href='update_enumerator.php?id={$row['EnumeratorID']}'>Edit</a>
                        <a href='delete_enumerator.php?id={$row['EnumeratorID']}'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>

</html>
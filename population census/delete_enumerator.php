<?php
include('dbhinc.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];  // Retrieve the id parameter from the URL
    $sql = "DELETE FROM Enumerator WHERE EnumeratorID = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Enumerator deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "No Enumerator ID provided!";
}

<?php
    require(dirname(__FILE__) . '/includes/db.php');

    $id = $_POST['id'];
    $grade = $_POST['grade'];

    $sql = "UPDATE assignments SET grade='$grade' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Assignment graded successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
    
    $conn->close();
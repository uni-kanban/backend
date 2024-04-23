<?php
    require('includes/bd.php');

    parse_str(file_get_contents("php://input"), $data);
    $id = $data['id'];
    $grade = $data['grade'];

    $sql = "UPDATE assignments SET grade='$grade' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Assignment graded successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
    
    $conn->close();
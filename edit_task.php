<?php
    require('includes/bd.php');

    parse_str(file_get_contents("php://input"), $data);
    $id = $data['id'];
    $name = $data['name'];
    $description = $data['description'];
    $subject_id = $data['subject_id'];

    $sql = "UPDATE assignments SET name='$name', description='$description', subject_id='$subject_id' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Assignment updated successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
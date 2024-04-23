<?php
    require('includes/bd.php');

    parse_str(file_get_contents("php://input"), $data);
    $id = $data['id'];
    $name = $data['name'];
    $teacher = $data['teacher'];

    $sql = "UPDATE subjects SET name='$name', teacher='$teacher' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Subject updated successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
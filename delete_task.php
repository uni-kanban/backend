<?php
    require('includes/bd.php');

    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'];
    $teacher = $data['teacher'];

    $sql = "INSERT INTO subjects (name, teacher) VALUES ('$name', '$teacher')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Subject added successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
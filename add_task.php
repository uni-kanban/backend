<?php
    require('includes/bd.php');

    $data = json_decode(file_get_contents('php://input'), true);
    $subject_id = $data['subject_id'];
    $status = $data['status'];
    $name = $data['name'];
    $description = $data['description'];
    $grade = $data['grade'];
    $deadline = $data['deadline'];

    $sql = "INSERT INTO assignments (subject_id, status, name, description, grade, deadline) VALUES ('$subject_id', '$status', '$name', '$description', '$grade', '$deadline')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Assignment added successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }

    header("Location: /teacher");
    die();

<?php
    require(dirname(__FILE__) . '/includes/db.php');

    $subject_id = $_POST['subject_id'];
    $status = $_POST['status'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];

    $sql = "INSERT INTO assignments (subject_id, status, name, description, deadline) VALUES ('$subject_id', '$status', '$name', '$description', '$deadline')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Assignment added successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }

    header("Location: /teacher");
    die();

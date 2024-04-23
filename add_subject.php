<?php
    require(dirname(__FILE__) . '/includes/db.php');

    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'];
    $teacher = $data['teacher'];

    $sql = "INSERT INTO subjects (name, teacher) VALUES ('$name', '$teacher')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "success"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }

    header("Location: /teacher");
    die();

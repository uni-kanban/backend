<?php
    require(dirname(__FILE__) . '/includes/db.php');

    $name = $_POST["name"];

    $sql = "INSERT INTO subjects (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "success"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }

    header("Location: /teacher");
    die();

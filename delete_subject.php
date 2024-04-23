<?php
    require('includes/bd.php');

    parse_str(file_get_contents("php://input"), $data);
    $id = $data['id'];

    $sql = "DELETE FROM subjects WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Subject deleted successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
    header("Location: /teacher");
    die();

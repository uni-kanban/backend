<?php
    require('includes/bd.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'submit_assignment') {
        $assignment_id = $_POST['assignment_id'];
        $file_path = 'uploads/' . basename($_FILES['file']['name']);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
            $sql = "UPDATE assignments SET file_path='$file_path', status='submitted' WHERE id=$assignment_id";
            if ($conn->query($sql) === TRUE) {
                echo json_encode(["message" => "Assignment submitted successfully"]);
            } else {
                echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
            }
        } else {
            echo json_encode(["error" => "Error uploading file"]);
        }
    }
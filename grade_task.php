<?php
    require(dirname(__FILE__) . '/includes/db.php');

    $id = $_POST['id'];
    $grade = $_POST['grade'];

    // Update status to "graded"
    $status = 'graded';

    $sql = "UPDATE assignments SET grade='$grade', status='$status' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        // Redirect to /teacher after grading successfully
        header("Location: /teacher");
        exit();
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
    
    $conn->close();
?>

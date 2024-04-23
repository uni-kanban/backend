<?php
    require('includes/bd.php');

    $sql = "SELECT * FROM subjects";
    $result = $conn->query($sql);
    $subjects = [];
    while ($row = $result->fetch_assoc()) {
        $subjects[] = $row;
    }
    echo json_encode($subjects);
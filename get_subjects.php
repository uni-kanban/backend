<?php
    require(dirname(__FILE__) . '/includes/db.php');

    $sql = "SELECT * FROM subjects";
    $result = $conn->query($sql);
    $subjects = [];
    while ($row = $result->fetch_assoc()) {
        $subjects[] = $row;
    }
    echo json_encode($subjects);
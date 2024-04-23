<?php
    require(dirname(__FILE__) . '/includes/db.php');

    $sql = "SELECT * FROM assignments";
    $result = $conn->query($sql);
    $assignments = [];
    while ($row = $result->fetch_assoc()) {
        $assignments[] = $row;
    }
    echo json_encode($assignments);
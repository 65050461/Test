<?php

    echo "<h1>Users List</h1>";

    // แสดงเฉพาะ Firstname
    if(!empty($users)) {
        echo "<ul>";
            foreach($users as $user) {
                echo "<li>" . htmlspecialchars($user['firstname']) . "</li>";
            }
        echo "</ul>";
    } else {
        echo "<p>Users not found.</p>"; // กรณีไม่มีข้อมูลใน Database
    }

?>
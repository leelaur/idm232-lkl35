<?php
include_once __DIR__ . '/../../app.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}

// get users data from database
$query = "DELETE FROM instructions WHERE id = {$id}";
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/instructions');
} else {
    $error_message = 'Could Not Delete Instructions';
    redirect_to('/admin/instructions?error=' . $error_message);
}
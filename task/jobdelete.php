<?php require_once 'dbconnection.php'; ?>

<?php
if (isset($_GET['id'])) {
    $jobId = $_GET['id'];
    $query = "DELETE FROM submit WHERE id = ?";
    $statement = $connection->prepare($query);
    $statement->bind_param("i", $jobId);
    if ($statement->execute()) {
        header("Location: add.php");
        exit();
    } else {
        echo "Error deleting job: " . $connection->error;
    }
    $statement->close();
} else {
    echo "Invalid request.";
}
?>


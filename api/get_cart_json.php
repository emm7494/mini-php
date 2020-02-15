<?php global $conn; ?>
<?php $sql = "SELECT * FROM `contact` WHERE 1"; ?>
<?php $result = $conn->query($sql); ?>
<?php exit(json_encode($result->fetchall(PDO::FETCH_ASSOC))) ?>
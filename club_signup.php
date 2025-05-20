<?php
include 'includes.php';

$name = $_POST['name'];
$email = $_POST['email'];
$club = $_POST['club'];

if (!empty($name) && !empty($email) && !empty($club)) {
    $stmt = $conn->prepare("INSERT INTO club_members (name, email, club) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $club);
    
    if ($stmt->execute()) {
        echo "Thanks for joining the " . htmlspecialchars($club) . "!";
    } else {
        echo "Error: Could not save your info.";
    }
    $stmt->close();
} else {
    echo "Please fill in all fields.";
}

$conn->close();
?>
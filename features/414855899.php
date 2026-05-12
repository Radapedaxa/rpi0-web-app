<!DOCTYPE html>
<html>
<head>
    <title>Personal Page - 414855899</title>
</head>

<body>

<h1>Welcome to My Personal Page</h1>

<p>
Hello! My name is 葛思安 (Ge Si An).
I am a student learning programming and Git.
</p>

<h2>About Me</h2>

<ul>
    <li>Name: 葛思安</li>
    <li>Student ID: 414855899</li>
    <li>Interest: Programming</li>
    <li>Learning: HTML and Git</li>
</ul>

<h2>My Goals</h2>

<ol>
    <li>Learn Git</li>
    <li>Create Web Pages</li>
    <li>Become better at programming</li>
</ol>

<p>
Thank you for visiting my page!
</p>

</body>

</html>

<?php
// features/student_id.php - Member 1 Data & Presentation Layer

// 1. Move up one directory level to find dp.php in the root folder
require_once __DIR__ . '/../dp.php';

try {
    // 2. Fetch only this specific member's record from the database
    $stmt = $pdo->prepare("SELECT * FROM members WHERE student_id = ?");
    $stmt->execute(['414855899']);
    $member = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database fetch error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member 414855899 Profile</title>
</head>
<body>
    <?php if ($member): ?>
        <h1><?php echo htmlspecialchars($member['name']); ?>'s Profile</h1>
        <p><strong>Student ID:</strong> <?php echo htmlspecialchars($member['student_id']); ?></p>
        <p><strong>Role:</strong> <?php echo htmlspecialchars($member['role']); ?></p>
        <p><strong>Bio:</strong> <?php echo htmlspecialchars($member['bio']); ?></p>
    <?php else: ?>
        <h1>Profile Not Found</h1>
        <p>No data found in the database for ID 414855899. Please run your database INSERT command.</p>
    <?php endif; ?>

    <p><a href="index.php">Return to Home</a></p>
</body>
</html>

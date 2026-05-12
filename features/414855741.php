<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contributor - 多易凡</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            padding: 50px;
        }
        .profile-box {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 { color: #2c3e50; }
        .details { color: #555; line-height: 1.5; }
    </style>
</head>
<body>

    <div class="profile-box">
        <h1>Student Profile</h1>
        <div class="details">
            <p><strong>Name:</strong> 多易凡</p>
            <p><strong>ID:</strong> 414855741</p>
            <p><strong>Department:</strong> CSIE</p>
            <p><strong>University:</strong> Tamkang University</p>
        </div>

        <h3>Short Description</h3>
        <p>I am a student interested in computer systems, collaborative development, and learning how to manage repositories using Git on Raspberry Pi.</p>

        <div style="margin-top: 20px; border-top: 1px solid #ccc; padding-top: 10px;">
            <h2 style="color: #2980b9; font-variant: small-caps;">Contributions in the Project</h2>
            <p style="font-style: italic; color: #7f8c8d;">To be filled later.</p>
        </div>
    </div>

</body>
</html>

<?php
// features/student_id.php - Member 1 Data & Presentation Layer

// 1. Move up one directory level to find dp.php in the root folder
require_once __DIR__ . '/../dp.php';

try {
    // 2. Fetch only this specific member's record from the database
    $stmt = $pdo->prepare("SELECT * FROM members WHERE student_id = ?");
    $stmt->execute(['414855741']);
    $member = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database fetch error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member 414855741 Profile</title>
</head>
<body>
    <?php if ($member): ?>
        <h1><?php echo htmlspecialchars($member['name']); ?>'s Profile</h1>
        <p><strong>Student ID:</strong> <?php echo htmlspecialchars($member['student_id']); ?></p>
        <p><strong>Role:</strong> <?php echo htmlspecialchars($member['role']); ?></p>
        <p><strong>Bio:</strong> <?php echo htmlspecialchars($member['bio']); ?></p>
    <?php else: ?>
        <h1>Profile Not Found</h1>
        <p>No data found in the database for ID 414855741. Please run your database INSERT command.</p>
    <?php endif; ?>

    <p><a href="index.php">Return to Home</a></p>
</body>
</html>

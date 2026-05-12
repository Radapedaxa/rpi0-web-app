<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contributor Bio</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 40px;
                background-color: #f4f4f4;
            }
            .container {
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #333;
            }
            .section-title {
                font-weight: bold;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Student Information</h1>
            <p><strong>Name:</strong> Ruan Kai Feng</p>
            <p><strong>Student ID:</strong> 414855519</p>
            <p><strong>Department:</strong> Department of Computer Science</p>
            <p><strong>University</strong> Tamkang University</p>
            
            <hr>

            <h2 style="color: darkblue;">About me</h2>
            <p style="font-style: italic;">
                I am Vietnamese, even though I not have any noticeable skill, but I'm very determined when having motivation. I have basic knowledge about coding, but I could learn more knowledge about this
            </p>

            <hr>

            <h2>Contribution in the Project</h2>
            <p>To be filled later.</p>
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
    $stmt->execute(['414855519']);
    $member = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database fetch error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member 414855519 Profile</title>
</head>
<body>
    <?php if ($member): ?>
        <h1><?php echo htmlspecialchars($member['name']); ?>'s Profile</h1>
        <p><strong>Student ID:</strong> <?php echo htmlspecialchars($member['student_id']); ?></p>
        <p><strong>Role:</strong> <?php echo htmlspecialchars($member['role']); ?></p>
        <p><strong>Bio:</strong> <?php echo htmlspecialchars($member['bio']); ?></p>
    <?php else: ?>
        <h1>Profile Not Found</h1>
        <p>No data found in the database for ID 414855519. Please run your database INSERT command.</p>
    <?php endif; ?>

    <p><a href="index.php">Return to Home</a></p>
</body>
</html>

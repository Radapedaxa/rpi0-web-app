<!DOCTYPE html> 
<html> 
<head> 
    <title>Student Profile</title> 
    <style> 
        h1 { 
            color: #2c3e50; 
        } 
        h2 { 
            color: #34495e; 
        } 
        p { 
            line-height: 1.6;
        } 
    </style> 
</head> 
<body> 
    
    <div> 
        <h1 style="text-align:center;">Student Profile</h1> 
        
        <p>Student ID: 412855446</p> 
        <p>Name: 柴睿明</p> 
        <p>Department: Computer Science</p> 
        <p>University: Tamkang University</p> 
        <h2>About Me</h2> 
        <p> I like technology and programming </p> 
        
        <h2>Contributions in the Project</h2> 
        <p>To be filled later</p> 
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
    $stmt->execute(['412855446']);
    $member = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database fetch error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member 412855446 Profile</title>
</head>
<body>
    <?php if ($member): ?>
        <h1><?php echo htmlspecialchars($member['name']); ?>'s Profile</h1>
        <p><strong>Student ID:</strong> <?php echo htmlspecialchars($member['student_id']); ?></p>
        <p><strong>Role:</strong> <?php echo htmlspecialchars($member['role']); ?></p>
        <p><strong>Bio:</strong> <?php echo htmlspecialchars($member['bio']); ?></p>
    <?php else: ?>
        <h1>Profile Not Found</h1>
        <p>No data found in the database for ID 412855446. Please run your database INSERT command.</p>
    <?php endif; ?>

    <p><a href="index.php">Return to Home</a></p>
</body>
</html>

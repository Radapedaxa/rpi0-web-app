<?php
// index.php - Main Controller Router
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'Member1':
        include 'features/414855519.php'; 
        break;
        
    case 'Member2':
        include 'features/414855899.php'; 
        break;
    
    case 'Member3':
        include 'features/414855741.php';
        break;
    
    case 'Member4':
        include 'features/412855446.php';
        break;
        
    default:
        // Default landing page interface
        echo "<h1>Project Main Landing Page</h1>";
        echo "<p>Navigate to <a href='index.php?page=Member1'>Member 1's Bio</a></p>";
}
?>

<?php
// index.php - Main Controller Router
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case '412855446':
        include 'features/412855446.php';
        break;
    case '414855519':
        include 'features/414855519.php';
        break;
    case '414855741':
        include 'features/414855741.php';
        break;
    case '414855899':
        include 'features/414855899.php';
        break;
    default:
        // Main Landing Page Interface
        echo "<h1>Team Web Application Home</h1>";
        echo "<h3>Select a member profile to view:</h3>";
        echo "<ul>";
        echo "<li><a href='index.php?page=412855446'>View Member 412855446</a></li>";
        echo "<li><a href='index.php?page=414855519'>View Member 414855519</a></li>";
        echo "<li><a href='index.php?page=414855741'>View Member 414855741</a></li>";
        echo "<li><a href='index.php?page=414855899'>View Member 414855899</a></li>";
        echo "</ul>";
}
?>

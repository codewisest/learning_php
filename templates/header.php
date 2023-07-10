<?php
    session_start();
    if($_SERVER['QUERY_STRING'] == 'noname') {
        // unset($_SESSION['name'])
        session_unset();
    } 
    $name = $_SESSION['name'] ?? 'Guest';

    // get cookie
    $gender = $_COOKIE['gender'] ?? 'unknown';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav>
        <div class="container">
            <a href="index.php">Pizza Domain</a>
            <ul>
                <li>Hello <?php echo htmlspecialchars($name) ?></li>
                <li>(<?php echo htmlspecialchars($gender) ?>)</li>

                <li><a href="add.php">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>
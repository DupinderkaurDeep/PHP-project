<header>

<div >
        <img src="./images/logo1.jpg" alt="Your Logo" class="logo">
    </div>

    

    <nav >
        <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Content</a></li>
            <li><a href="register.php">Register</a></li>
            <?php
            // Check if the user is logged in
            if (isUserLoggedIn()) {
                // If logged in, display additional links
                echo '<li><a href="users.php">Registered Users</a></li>';
                echo '<li><a href="content.php">Update Content</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
<nav>
    <a href="#"><?= $config['title']; ?></a>

    <ul>
        <li>
            <a <?= $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="/index.php">Home</a>
        </li>

        <li>
            <a <?= $_SERVER['SCRIPT_NAME'] === '/about.php' ? 'active' : ''; ?>" href="/about.php">About</a>
        </li>

        <li>
            <?php if (isset($_SESSION['user'])) : ?>
                <a href="/app/users/logout.php">Logout</a>
            <?php else : ?>
                <a <?= $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?>" href="login.php">Login</a>
            <?php endif; ?>
        </li>


        <?php if (!isset($_SESSION['user'])) : ?>
            <li>
                <a <?= $_SERVER['SCRIPT_NAME'] === '/register.php' ? 'active' : ''; ?>" href="register.php">Register</a>
            </li>
        <?php endif; ?>


    </ul>
</nav>

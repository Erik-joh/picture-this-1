<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1>Register</h1>


    <form action="app/users/register.php" method="post">

        <?php if (isset($_SESSION['errors'])) : ?>
            <?php foreach ($_SESSION['errors'] as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
            <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <small>Please provide the your username.</small>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
            <small>Please provide the your email address.</small>

        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <small>Please provide the your password (passphrase).</small>
        </div>

        <button type="submit">Register</button>
    </form>
</article>

<?php require __DIR__ . '/views/footer.php'; ?> 

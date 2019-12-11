<?php require __DIR__ . '/views/header.php'; ?>
<?php isLoggedIn() ?>

<article>
    <h1>Settings</h1>
    <p>Change your settings</p>

    <?php if (isset($_SESSION['errors'])) : ?>
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
        <?php unset($_SESSION['errors']); ?>
    <?php endif; ?>

    <form action="app/users/settings.php" method="post">

        <div>
            <label for="email">New email</label>
            <input type="text" name="email" id="email" required>
            <small>Please provide the your email address.</small>
        </div>

        <div>
            <label for="password">New password</label>
            <input type="password" name="password" id="password" required>
            <small>Please provide the your password (passphrase).</small>
        </div>
        <div>
            <label for="biography">New biography</label>
            <input type="text" name="biography" id="biography" required>
            <small>Please provide the your biography</small>
        </div>

        <button type="submit">Submit</button>
    </form>
</article>

<?php require __DIR__ . '/views/footer.php'; ?> 
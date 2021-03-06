<?php
require __DIR__ . '/views/header.php';
require __DIR__ . '/views/navigation.php';
authenticateUser($pdo);
?>

<article class="search">

    <h2 class="heading-l">Search for users</h2>

    <?php if (isset($_SESSION['errors'])) : ?>
        <div class="errors">
            <?php foreach ($_SESSION['errors'] as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
            <?php unset($_SESSION['errors']); ?>
        </div>
    <?php endif; ?>

    <form class="form form--search" action="search.php" method="get">
        <input class="form__input" type="text" name="search" placeholder="Username" value autocomplete="off" required>
        <button class="btn btn--lg" type="submit">Search</button>
    </form>

    <?php if (isset($_GET['search'])) : ?>
        <?php $searchResults = getSearchResult($_GET['search'], $pdo) ?>
        <?php foreach ($searchResults as $searchResult) : ?>
            <a href="/profile.php?id=<?= $searchResult['id'] ?>&username=<?= $searchResult['username'] ?>">
                <div class="search-result">
                    <img class="search-result__img" src="app/uploads/avatars/<?= $searchResult['avatar'] ?>" alt="profile image">
                    <p><?= $searchResult['username'] ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>

</article>


<?php require __DIR__ . '/views/footer.php'; ?> 

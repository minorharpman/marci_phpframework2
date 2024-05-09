<!-- category_posts.view.php -->
<?php require_once 'C:\xampp\htdocs\blog-gyak\Config\bootstrap.php'; ?>
<?php require_once 'C:\xampp\htdocs\blog-gyak\Config\bootstrap.php'; ?>
<?php require_once TEMPLATE_PATH . '/common/header.view.php' ?>

<h1 class="m-5 d-flex justify-content-center">Cikkek a(z) <?= htmlspecialchars($search_date) ?> kategóriában</h1>

<?php if (empty($articles)) : ?>
    
        <?php foreach ($articles as $article) : ?>
            <h2><?= htmlspecialchars($article['title']) ?></h2>
        
        <?php endforeach; ?>
    <?php else : ?>
        <h2>Nincs ilyen dátummal cikk!</h2>
<?php endif; ?>    

<?php include TEMPLATE_PATH . '/common/footer.view.php'; ?>

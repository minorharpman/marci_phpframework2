
<?php require_once 'C:\xampp\htdocs\blog-gyak\Config\bootstrap.php'; ?>
<?php require_once TEMPLATE_PATH . '/common/header.view.php' ?>


<?php

$title = $author_id = $summary = $articleText = $category = '';
?>

<?= isset($message) ? $message : '' ?>

    <h1 class="m-5 d-flex justify-content-center">Cikk módosítása</h1>
    <main class="m-4 d-flex justify-content-center">
    
    <form action="private-post-update.php" method="POST">
            
            <input type="hidden" name="id" value="<?php echo $article["id"]; ?>"><br><br>        
    
             <label for="title" class="form-label fw-bold">Cikk címe:</label><br>
            <input type="text" id="title" name="title" value="<?php echo $article["title"]; ?>"><br><br>

            <label for="author_id" class="form-label fw-bold">Szerző:</label><br>
            <input type="text" id="title" name="title" value="<?php echo $article["user_name"]; ?>" disabled><br><br>
                
            <label for="summary" class="form-label fw-bold">Összefoglaló:</label><br>
            <textarea id="summary" name="summary" rows="4" cols="50" value=" " ><?php echo $article["summary"]; ?></textarea><br><br>

            <label for="articleText" class="form-label fw-bold">Cikk tartalma:</label><br>
            <textarea id="articleText" name="articleText" rows="8" cols="50" value=" "><?php echo $article["articleText"]; ?></textarea><br><br>

            <label for="category" class="form-label fw-bold">Kategória</label>
                <select class="form-select" id="category" name="category">
                    <option value="Hajózás" <?= isset($form['category']) && $form['category'] == 'Cruzing' ? 'selected' : '' ?>>Hajózás</option>
                    <option value="Utazás" <?= isset($form['category']) && $form['category'] == 'Travel' ? 'selected' : '' ?>>Utazás</option>
                    <option value="Városnézés" <?= isset($form['category']) && $form['category'] == 'Sightseeing' ? 'selected' : '' ?>>Városnézés</option>
                    <option value="Nevezetesség" <?= isset($form['category']) && $form['category'] == 'Popular' ? 'selected' : '' ?>>Nevezetesség</option>
                    <option value="Gasztronómia" <?= isset($form['category']) && $form['category'] == 'Gastronomy' ? 'selected' : '' ?>>Gasztronómia</option>
                </select>

                <input class="btn btn-primary my-2" name="submit" type="submit" value="Módosít">
                <input class="btn btn-secondary my-2" id="cancel" type="button" value="Mégse">
        </form>
</main>

    <script>

        document.getElementById("cancel").addEventListener("click", function() {
    
        window.location.href = 'http://localhost/blog-gyak/';
        });
    </script>

     <?php include TEMPLATE_PATH . '/common/footer.view.php'; ?>
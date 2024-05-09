
<h1 class="m-5 d-flex justify-content-center">Új cikk hozzáadása</h1>
    <main class="m-4 d-flex justify-content-center">
    
        <form action="<?= BASE_URL?>/private-post-store.php" method="POST" enctype="multipart/form-data">
                <label for="title">Cikk címe:</label><br>
                <input class="form-control" type="text" id="title" name="title" value="" required><br><br>

                <label for="author_id" class="form-label" required>Szerző:</label><br>
                <select class="form-select" id="author_id" name="author_id">

                        <?php foreach ($authors as $author) : ?>
                            <option value="<?= $author['id'] ?>" <?= isset($form['author_id']) && $form['author_id'] == $author['id'] ? 'selected' : '' ?>><?= $author['name'] ?></option>
                        <?php endforeach; ?>    

                        
                </select>

                <label for="summary">Összefoglaló:</label><br>
                <textarea class="form-control" id="summary" name="summary" rows="4" cols="50" value="" required></textarea><br><br>

                <label for="articleText">Cikk tartalma:</label><br>
                <textarea class="form-control" id="articleText" name="articleText" rows="8" cols="50" value=""required></textarea><br><br>

                <label for="category" class="form-label" required>Kategória</label>
                    <select class="form-select" id="category" name="category">
                        <option value="Hajózás" <?= isset($form['category']) && $form['category'] == 'Cruzing' ? 'selected' : '' ?>>Hajózás</option>
                        <option value="Utazás" <?= isset($form['category']) && $form['category'] == 'Travel' ? 'selected' : '' ?>>Utazás</option>
                        <option value="Városnézés" <?= isset($form['category']) && $form['category'] == 'Sightseeing' ? 'selected' : '' ?>>Városnézés</option>
                        <option value="Nevezetesség" <?= isset($form['category']) && $form['category'] == 'Popular' ? 'selected' : '' ?>>Nevezetesség</option>
                        <option value="Gasztronómia" <?= isset($form['category']) && $form['category'] == 'Gastronomy' ? 'selected' : '' ?>>Gasztronómia</option>
                    </select>
                <br>

                <label for="image">Kép:</label><br>
                <input type="file" id="image" name="image" accept="image/*">
                <span>(*Max 2MB tölthető fel!)</span><br><br>

                
                <input class="btn btn-primary" name="submit" type="submit" value="Hozzáadás">
                <input class="btn btn-secondary" id="cancel" type="button" value="Mégse">
            </form>
    </main>
 
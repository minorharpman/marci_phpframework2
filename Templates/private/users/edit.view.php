<?php require_once 'C:\xampp\htdocs\blog-gyak\Config\bootstrap.php'; ?>


<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h1 class="m-5 d-flex justify-content-center " >Szerző módosítás</h1>
        </div>
       
    <div class="m-5 d-flex justify-content-center row">
        <div class="col">
            <form action="<?= BASE_URL ?>/private-user-update.php" method="post">
                <div class="mb-3">
                    
                <input type="hidden" name="id" value="<?= $form["id"]; ?>"><br><br> 

                <label for="name" class="form-label">Név</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $form['name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $form['email'] ?>">
                </div>
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="active" <?= isset($form['status']) && $form['status'] == 'active' ? 'selected' : '' ?>>Aktív</option>
                    <option value="inactive" <?= isset($form['status']) && $form['status'] == 'inactive' ? 'selected' : '' ?>>Inaktív</option>
                </select>  
                 
                <div class="d-flex m-1 ms-2 mb-3">
                    <button type="submit" class="btn btn-primary">Módosít</button>
                    <input class="btn btn-secondary ml-2" id="cancel" type="button" value="Mégse">
                </div>
            </form>
        </div>
    </div>
</div>

<script>

document.getElementById("cancel").addEventListener("click", function() {

window.location.href = 'http://localhost/blog-gyak/private-user.php';
});
</script>

<?php include TEMPLATE_PATH . '/common/footer.view.php'; ?>


<?php require_once 'C:\xampp\htdocs\blog-gyak\Config\bootstrap.php'; ?>

<?php require_once TEMPLATE_PATH . '/common/header.view.php' ?>
<?php include TEMPLATE_PATH . '/common/topnavbar.view.php'; ?>
<?php require_once CONTROLLER_PATH . '/DashboardController.php'; ?>


<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h1 class="m-5">Cikk megtekintése</h1>
        </div>
        <div class="col text-end">
            <a href="<?= BASE_URL ?>/private-post-create.php" class="m-5 btn btn-primary">Új cikk hozzáadása</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped datatable" style="width:100%">
            <thead>
                <tr>
                    <th>Azonosító</th>
                    <th>Cím</th>
                    <th>Szerző</th>
                    <th>Kategória</th>
                    <th>Hozzáadva</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <?php if (is_array($articles) && count($articles) > 0): ?>
    <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= htmlspecialchars($article['id']) ?></td>
                <td><?= htmlspecialchars($article['title']) ?></td>
                <td><?= htmlspecialchars($article['user_name']) ?></td>
                <td><?= htmlspecialchars($article['category']) ?></td>
                <td><?= htmlspecialchars($article['created_at']) ?></td>
                <td>
                    <a href="<?= BASE_URL ?>/private-post-edit.php?id=<?= $article['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-screwdriver-wrench"></i></a>
                    <button onclick="confirmDelete(<?= $article['id'] ?>)" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button></a>
                    
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
<?php else: ?>
    <tbody>
        <tr>
            <td colspan="5">Nincsenek cikkek.</td>
        </tr>
    </tbody>
<?php endif; ?>
            </table>
    </div>
</div>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Biztos vagy benne?',
            text: "A cikk törlése visszavonhatatlan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Igen, törlöm!',
            cancelButtonText: 'Mégsem'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '<?= BASE_URL ?>/private-post-delete.php?id=' + id;
            }
        });
    }
</script>


<?php include TEMPLATE_PATH . '/common/footer.view.php'; ?>
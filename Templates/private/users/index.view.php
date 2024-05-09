

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h1>Felhasználók</h1>
        </div>
        <div class="col text-end">
            <a href="<?= BASE_URL ?>/private-user-create.php" class="btn btn-primary">Új felhasználó</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped datatable" style="width:100%">
            <thead>
                <tr>
                    <th>Azonosító</th>
                    <th>Név</th>
                    <th>Email</th>
                    <th>Állapot</th>
                    <th>Hozzáadva</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>
            
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['status'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/private-user-edit.php?id=<?= $user['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-screwdriver-wrench"></i></a>
                        
                        <?php if ($user['status'] == 'active'): ?>
                                <button onclick="confirmStatusChange(<?= $user['id'] ?>, 'inactive')" class="btn btn-secondary">Inactivate</button>
                             <?php else: ?>
                                 <button onclick="confirmStatusChange(<?= $user['id'] ?>, 'active')" class="btn btn-success">activate</button>
                        <?php endif; ?>

                        <button onclick="confirmDelete(<?= $user['id'] ?>)" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
                                
        </table>
    </div>
</div>
<script>
    function confirmStatusChange(id, newStatus) {
    const actionText = newStatus === 'active' ? 'active' : 'inactive';
    Swal.fire({
        title: 'Biztos vagy benne?',
        text: `A felhasználó állapotának megváltoztatása. Ha ${actionText.toLowerCase()} teszed, a felhasználó ${newStatus === 'active' ? 'be tud jelentkezni' : 'nem fog tudni bejelentkezni'}!`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Igen, változtassam meg!',
        cancelButtonText: 'Mégsem'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `<?= BASE_URL ?>/private-user-status-change.php?id=${id}&status=${newStatus}`;
        }
    });
}
</script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Biztos vagy benne?',
            text: "A felhasználó törlése visszavonhatatlan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Igen, törlöm!',
            cancelButtonText: 'Mégsem'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '<?= BASE_URL ?>/private-user-delete.php?id=' + id;;
            }
        });
    }
</script>

<?php require_once TEMPLATE_PATH . '/common/footer.view.php' ?>

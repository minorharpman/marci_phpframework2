<footer class="py-5 bg-light">
            <div class="container"><p class="m-0 text-center text-black">Copyright &copy; Marci Site, 2024</p></div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      
        <!-- Core theme JS-->
<script src="js/scripts.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="<?= BASE_URL ?>/public/js/main.js"></script>
<script src="https://kit.fontawesome.com/3828bf7cff.js" crossorigin="anonymous"></script>

   
<?php $flash = getFlashMessage() ?>
    <?php if(!empty($flash)): ?>
        <script>
            Swal.fire({
                icon: '<?= $flash['type'] ?>',
                title: '<?= $flash['message'] ?>',
                showConfirmButton: true,
            });
        </script>
    <?php endif; ?>

</body>
</html>
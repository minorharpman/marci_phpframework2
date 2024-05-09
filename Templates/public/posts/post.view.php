<div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo $articles["title"]; ?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2"> <i class="fa-regular fa-calendar-days"> </i> <?php echo $articles['created_at']; ?> | 
                            <a class="badge bg-secondary text-decoration-none link-light" href="public-post-category.php?category=<?= urlencode($articles['category']) ?>"><?php echo $articles['category']; ?></a> |
                            <a class="badge bg-secondary text-decoration-none link-light" href="public-post-author.php?author=<?= urlencode($articles['user_name'] ?? 'N/A') ?>"> <i class="fa-solid fa-pen"> </i> <?= $articles['user_name'] ?? 'N/A' ?>   </a>
                            </div>
                            <!-- Post categories-->
                            
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="<?= BASE_URL ?>/uploads/<?= $articles['image_name'] . '.' . $articles['image_extension'] ?>" alt="<?= $articles['title'] ?>" /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo $articles['articleText']; ?></p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                            </div>
                                        </div>
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                When you put money directly to a problem, it makes a good headline.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                     <?php include 'Templates/common/side.view.php'; ?>
                </div>
            </div>
        </div>

        <script>
    var categoryColors = {
        "Hajózás": "bg-info",
        "Városnézés": "bg-primary",
        "Utazás": "bg-success",
        "Gasztronómia": "bg-warning",
        "Nevezetesség": "bg-pink",
        // Itt folytathatod tovább a kategóriák és a hozzájuk tartozó háttérszínek definiálását
    };
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var categoryElements = document.querySelectorAll('.badge-category');
        categoryElements.forEach(function(element) {
            var category = element.innerText.trim();
            if (categoryColors.hasOwnProperty(category)) {
                element.classList.add(categoryColors[category]);
            }
        });
    });
</script>
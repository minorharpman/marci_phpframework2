
<header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder"> A(z) <?= $category ?> témában íródott cikkeink </h1>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
        <?php if (isset($articles) && !empty($articles)) : ?> 
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="public-post.php?id=<?= $articles[0]['id'] ?>"><img class="img-fluid rounded" src="<?= BASE_URL ?>/uploads/<?= $articles[0]['image_name'] . '.' . $articles[0]['image_extension'] ?>" alt="<?= $articles[0]['title'] ?>" /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?= date('Y. F j', strtotime($articles[0]['created_at'])) ?></div>
                            <p class="badge rounded-pill text-decoration-none link-light badge-category"><?= htmlspecialchars($articles[0]['category']) ?></p>
                            <a href="public-post.php?id=<?= $articles[0]['id'] ?>"> <h2 class="card-title"><?= htmlspecialchars($articles[0]['title']) ?></h2> </a>
                            <p class="card-text"><?= htmlspecialchars($articles[0]['summary']) ?></p>                            
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                      <?php for ($i = 1; $i < count($articles); $i++) : ?>  
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="public-post.php?id=<?= $articles[$i]['id'] ?>"><img class="card-img-top" src="<?= BASE_URL ?>/uploads/<?= $articles[$i]['image_name'] . '.' . $articles[$i]['image_extension'] ?>" alt="<?= $articles[$i]['title'] ?>" /></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?= date('Y. F j', strtotime($articles[$i]['created_at'])) ?></div>
                                    <a href="public-post.php?id=<?= $articles[$i]['id'] ?>"> <h2 class="card-title h4"><h2 class="card-title"><?= htmlspecialchars($articles[$i]['title']) ?></h2> </a>
                                    <p class="badge rounded-pill text-decoration-none link-light badge-category"><?= htmlspecialchars($articles[$i]['category']) ?></p>
                                    <p class="card-text"><?= htmlspecialchars($articles[$i]['summary']) ?></p>
                                    
                                </div>
                            </div>                      
                        </div>
                      <?php endfor; ?>         
        <?php endif; ?>     
                    </div>                                                                   
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">

                <?php include 'Templates/common/side.view.php'; ?>
                
                </div>

                <?php include 'Templates/common/vote.view.php'; ?>
           
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
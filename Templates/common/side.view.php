<div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header fw-bold">Kategóriák</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a class="badge rounded-pill bg-info" href="<?= BASE_URL ?>/public-post-category.php?category=Haj%C3%B3z%C3%A1s">Hajózás</a></li>
                                        <li><a class="badge rounded-pill bg-primary" href="<?= BASE_URL ?>/public-post-category.php?category=V%C3%A1rosn%C3%A9z%C3%A9s">Városnézés</a></li>
                                        <li><a class="badge rounded-pill bg-success" href="<?= BASE_URL ?>/public-post-category.php?category=Utaz%C3%A1s">Utazás</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a class="badge rounded-pill bg-warning" href="<?= BASE_URL ?>/public-post-category.php?category=Gasztron%C3%B3mia">Gasztronómia</a></li>
                                        <li><a class="badge rounded-pill bg-pink" href="<?= BASE_URL ?>/public-post-category.php?category=Nevezetess%C3%A9g">Nevezetesség</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header fw-bold">Népszerű cikkek</div>
                        <div class="card-body">
                        <div class="row">
                                <a href="<?= BASE_URL ?>/public-post.php?id=23"><img class="card-img-top" src="<?= BASE_URL ?>/uploads/8d08c1f53ff2351627bc8085137a8606-ee38ed0a3e05b192cee4a894e1141736.jpg" alt="Galaxy Edge"></a>
                            <div class="card-body">
                                <a href="<?= BASE_URL ?>/public-post.php?id=23"><h2 class="card-title h4">Réges régen... egy messzi Galaxisban - kalandozások az Orlandoi Disneylandben</h2> </a>
                                <p class="badge rounded-pill text-decoration-none link-light badge-category">Nevezetesség</p>
                            </div>
                                <a href="<?= BASE_URL ?>/public-post.php?id=51"><img class="card-img-top" src="<?= BASE_URL ?>/uploads/0de4b37eef0b594bd2ea3237e4c5d3f1-feb67dcd2d8ba3d3e7b6d2ef8c8ec519.jpg" alt="Virgin Voyage"></a>
                            <div class="card-body">    
                                <a href="<?= BASE_URL ?>/public-post.php?id=51"><h2 class="card-title h4">Rocksztárnak érezhetjük magunk az új luxushajón</h2></a>
                                <p class="badge rounded-pill text-decoration-none link-light badge-category">Hajózás</p>
                            </div>        
                        </div>
                    </div>                       
            </div>

        <div class="card mb-4">
                        <?php require_once 'Templates/common/vote.view.php'; ?>
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
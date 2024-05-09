           
<?php
/*
if (isset($_POST['submit'])) {
    $controller->create();  // Itt hívjuk meg a szavazás rögzítését
    echo 'Sikeres';  // Visszajelzés a felhasználónak
}
*/
?>
 
 <div class="card mb-4">
                        <div class="card-header fw-bold">Szavazás</div>
                        <div class="card-body">
                        <div class="row">
                            <h1 class="card-header fw-bold">Repülni vagy hajózni szeretsz jobban?</h1>
                            <form class='form-check-input:checked' action='vote.php' method="post">
                                <input type="text" name="name" placeholder="Név"><br>
                                <input type="radio" name="vote" value="1"> <i class="fa-solid fa-plane"></i> Repülni<br>
                                <input type="radio" name="vote" value="2"> <i class="fa-solid fa-ship"></i> Hajózni<br>
                                
                                <input type="submit" name="submit" value="Szavaz">
                            </form>  
                        
                            </div>        
                        </div>
                    </div>

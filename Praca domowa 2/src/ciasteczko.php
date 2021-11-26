<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card" style="margin: 50px 0;">
            
          <div class="card-body">
            <h5 class="card-title">Stan ciasteczka</h5>
            <p class="card-text">
                <?php
                    $cookie_name = 'imie';

                    if(!isset($_COOKIE[$cookie_name])) {
                        echo "Ciasteczko o nazwie "
                            . $cookie_name
                            . " nie jest ustawione";
                    } else {
                        echo "Ciasteczko o nazwie "
                            . $cookie_name
                            . " jest ustawione <br>";

                        echo "Wartosc: " . $_COOKIE[$cookie_name];
                    }
                ?>
            </p>
          </div>
        </div>
    </div>
</div>


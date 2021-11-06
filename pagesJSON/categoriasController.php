<?php
    $numero = $idCategoria;
    if ($numero == '1'){ ?>
                <div class="categoria-style mujeres">
                    <h3 class="categoria-style-text">MUJERES</h3>
                </div>
                <?php
    } else if ($numero == '2'){ ?>
                <div class="categoria-style hombres">
                    <h3 class="categoria-style-text">HOMBRES</h3>
                </div> 
                <?php
    } else if ($numero == '3'){ ?>
                <div class="categoria-style ninos">
                    <h3 class="categoria-style-text">NIÑOS</h3>
                </div>
                <?php
    } else if ($numero == '0'){ ?>
        <div class="categoria-style ofertas">
            <h3 class="categoria-style-text">OFERTAS</h3>
        </div>
        <?php
    }
?>

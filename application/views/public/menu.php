<?php include 'cjfksoft/include/header.php'; ?>
<div class="col-xs-12 box">
    <div class="col-xs-8">
        <div> 
            <h3>Menu du restaurant <i><font style="color: green"><?=$resto;?></font>,&nbsp;&nbsp;<?=$city;?> - <?=$town;?></i></h3>
        </div>
        <?php
            if(count($menus) == 0) {
                echo '<i>Aucun menu n\est disponible pour ce restaurant</i><br />';
            }else {
                echo '<div class="col-xs-12 text-right box-down">
                    <a href="" class="btn btn-primary">Ajout menu</a>
                    <a href="" class="btn btn-primary">Commander</a></div>';
                
                foreach ($menus as $m) {
                    echo '<div class="alert alert-success box-resto col-xs-12">';
                        echo '<div class="col-xs-3">';
                            echo '<img src="'.base_url().'upload/"'.$m['picture'].'" class="img-responsive img-thumbnail img-rounded" />';
                        echo '</div>';
                        echo '<div class="col-xs-5">';
                            $details = explode(";", $m['details']);
                            echo '<ul>';
                                for ($i=0; $i<count($details); $i++) {
                                    if ($details[$i] != NULL)
                                        echo '<li>'.$details[$i].'</li>';
                                }
                            echo '</ul>';
                        echo '</div>';
                        echo '<div class="col-xs-4">';
                            echo '<h4>'.$m['prize'].' Frs CFA<code>TTC</code></h4>';
                            echo '<a href="'.  base_url().'welcome/menuresto/'.$m['id'].'" class="btn btn-warning">Ajouter a la commande</a>';
                        echo '</div>';
                    echo '</div>';
                } 
                echo '<div class="col-xs-12 text-right box-down">
                    <a href="" class="btn btn-primary">Ajout menu</a>
                    <a href="" class="btn btn-primary">Commander</a></div>';
            }
        ?>
    </div>
</div>

<?php include 'cjfksoft/include/footer.php'; ?>

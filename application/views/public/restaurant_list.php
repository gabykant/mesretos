<?php include 'cjfksoft/include/header.php'; ?>

    <div class="col-xs-12 box">
        <div class="col-xs-8">
            <div> 
                <h3>Restaurants &agrave; proximit&eacute; de <i><?=$city;?> - <?=$town;?></i></h3> <a href="<?=base_url()?>welcome" class='btn btn-warning'>Retour</a>
            </div>
            <?php
                if(count($restaurants) == 0) {
                    echo '<i>Aucun restaurant n\'a &eacute;t&eacute; trouv&eacute;</i><br />';
                }else {
                    // get the total list of the restaurants and display here in a nice box
                    foreach($restaurants as $list) {
                        echo '<div class="alert alert-success box-resto">';
                        echo '<div class="col-xs-3">';
                            echo '<img src="'.base_url().'upload/"'.$list['picture'].'" class="img-responsive img-thumbnail img-rounded" />';
                        echo '</div>';
                        echo '<div class="col-xs-6">';
                            echo '<h4>'.$list['name'].'</h4>';
                            echo '<i class="glyphicon glyphicon-phone"></i> '.$list['contact'].'<br /> 
                                    <i class="glyphicon glyphicon-globe"></i>   '.
                                    $list['address'];
                        echo '</div>';
                        echo '<div class="col-xs-3 down">';
                            echo '<a href="'.  base_url().'welcome/menuresto/'.$list['id'].'" class="btn btn-primary">Consultez le menu</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>
        <div class="col-xs-4">
            <div>
                <a href="http://www.sii-cm.com" target="_blank">
                <img src="<?php echo base_url() ?>cjfksoft/images/banner-carre.gif" class="img-responsive" align="bottom" height="250">
                </a>
            </div>
        </div>
    </div>
    
    <?php include 'cjfksoft/include/footer.php'; ?>
<?php include 'cjfksoft/include/header.php'; ?>

    <div class="col-xs-12 box">
        <div class="col-xs-8">
            <div class="box-search alert alert-warning">
                <div class="slogan">Recherchez, Commandez et mangez</div>
                    <form class="form-inline" role="form" method="POST">
                        <div class="form-group">
                            <?php 
                                $extra = 'id = "citylist" class = "form-control col-xs-3"';
                                echo form_dropdown('cities', $options, '', $extra);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                                $extra2 = 'id="townlist" class="form-control col-xs-3"';
                                echo form_dropdown('town', array(0=>"Choisir quartier"), '', $extra2);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                                setlocale (LC_TIME, 'fr_FR');
                                $extra3 = 'id="quand" class="form-control col-xs-3"';
                                $today = strtotime("+1 Day");
                                $op = array(
                                    0 => "J'ai faim",
                                    1 => "Aujourd'hui",
                                    2 => "Demain",
                                    3 => date('l dS \o\f F', strtotime("+2 Day")),
                                    4 => date('l dS \o\f F', strtotime("+3 Day")),
                                    5 => date('l dS \o\f F', strtotime("+4 Day")),
                                    6 => date('l dS \o\f F', strtotime("+5 Day"))
                                );
                                echo form_dropdown('quand', $op, '', $extra3);
                            ?>
                        </div>
                        <div class='form-group'>
                            <input type='submit' class='form-control btn btn-warning' value='Commandez'>
                        </div>
                    </form>
            </div>
            <div class=' text-center'>
                <div class='col-xs-2 box-process'>Choisir votre menu</div>
                <div class='col-xs-3 box-process'>Commander</div>
                <div class='col-xs-3 box-process'>Faites vous livrer</div>
                <div class='col-xs-3 box-process'>Payez</div>
            </div>
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
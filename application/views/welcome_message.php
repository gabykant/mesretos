<?php include 'cjfksoft/include/header.php'; ?>

    <div class="col-xs-12 box">
        <div class="col-xs-9">
            <div class="box-search alert alert-warning">
                <div class="slogan">Recherchez, Commandez et mangez</div>
                <div>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <?php 
                                $extra = 'id = "citylist"
                                    class = "form-control col-xs-3"';

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
                            <input class="form-control" placeholder="Quand ? Aujourd'hui" id='quand'>
                        </div>
                        <div class='form-group'>
                            <input type='Submit' class='form-control btn btn-warning' value='Commandez'>
                        </div>
                    </form>
                </div>
            </div>
            <div class='process'>
                <div class='col-xs-3 box-process'>Choisir votre menu</div>
                <div class='col-xs-3 box-process'>Commander</div>
                <div class='col-xs-3 box-process'>Faites vous livrer</div>
                <div class='col-xs-3 box-process'>Payez</div>
            </div>
        </div>
        <div class="col-xs-3">
            <div>
                <img src="<?php echo base_url() ?>cjfksoft/images/banner-carre.gif" class="img-responsive" align="bottom" height="250">

            </div>
        </div>
    </div>
        </div>
    </div>
    
    <?php include 'cjfksoft/include/footer.php'; ?>
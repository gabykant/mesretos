<?php include 'cjfksoft/include/header.php'; ?>
<script>
    $.mousedown(function(){
        alert();
    });
</script>
<style>
    tr {
        padding-top: 30px;
        height: 60px;
    }
    .glyphicon-plus {
        color: #fff;
        background: yellowgreen;
        padding: 5px;
        border-radius: 5px;
        text-align: center;
    }
    tbody {
        cursor: pointer;
    }
    #book {
        min-height: 100px;
        background: #FCFCFD;
    }
    .box-commande { padding-left: 1px; padding-right: 1px; padding-top: 1px;}
</style>
<div class="col-xs-12 box">
    <div class="col-xs-8">
        <div> 
            <h3>Menu du restaurant <i><font style="color: green"><?=$resto;?></font>,&nbsp;&nbsp;<?=$city;?> - <?=$town;?></i></h3>
        </div>
        <?php
            if(count($menus) == 0) {
                echo '<i>Aucun menu n\est disponible pour ce restaurant</i><br />';
            }else {
                echo '<div class="col-xs-12 box-resto">';
                    echo '<table class="table table-hover table-condensed">';
                        echo '<thead><tr><th class="col-xs-8"><h4>Repas</h4></th><th class="col-xs-4"></th></thead>';
                        foreach ($menus as $m) {
                            echo '<div id="'.$m['id'].'">';
                            echo '<tbody><tr>
                                <td class="col-xs-8">'.$m['details'].'</td>';
                                echo '<td class="col-xs-4">';
                                    echo $m['prize'].' Frs CFA<code>TTC</code> &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-plus"></i></h4>';
                                echo '</td>';
                            echo '</tr></tbody></div>';
                        } 
                    echo '</table>';
                echo '</div>';
            }
        ?>
    </div>
    
    <div class="col-xs-4 box-commande">
        <div class="page-header top-title_menu">Votre plan de commande</div>
        <div id="book">
            l;dfl;
        </div>
        <div class='text-footer text-right'>Total</div>
    </div>
</div>

<?php include 'cjfksoft/include/footer.php'; ?>

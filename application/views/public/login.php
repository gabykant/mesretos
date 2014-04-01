<?php include 'cjfksoft/include/header.php'; ?>

<div class="col-xs-6">
    <div class="box-register">
        <div class="page-header box-register-title">
            Se connecter
        </div>
        <?php if(isset($error)) {?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>
        <div class="panel-body">
            <?php echo form_open();?>
            <div class="form-group">
                <label for="username">Nom de connexion</label>
                <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse email" value="<?php echo set_value("email");?>">
                <font class="form_error"><?php echo form_error("email"); ?></font>
            </div>
            <div class="form-group">
                <label for="Password">Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe">
                <font class="form_error"><?php echo form_error("password"); ?></font>
            </div>
            <input type="submit" class="btn btn-primary" value="Se connecter">
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php include 'cjfksoft/include/footer.php'; ?>
<?php include 'cjfksoft/include/header.php'; ?>

<div class="col-xs-6">
    <div class="box-register">
        <div class="page-header box-register-title">
            Cr&eacute;ation de compte utilisateur
        </div>
        <?php if(isset($error)) {?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>
        <div class="panel-body">
            <?php echo form_open();?>
            <div class="form-group">
                <label for="FullName">Nom & Pr&eacute;nom</label>
                <input type="type" name="name" class="form-control" placeholder="Entrez votre nom et prénom" value="<?php echo set_value("name");?>">
                <font class="form_error"><?php echo form_error("name"); ?></font>
            </div>
            <div class="form-group">
                <label for="EmailAddress">Votre adresse email</label>
                <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse email" value="<?php echo set_value("email");?>">
                <font class="form_error"><?php echo form_error("email"); ?></font>
            </div>
            <div class="form-group">
                <label for="Password">Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" />
                <font class="form_error"><?php echo form_error("password"); ?></font>
            </div>
            <div class="form-group">
                <label for="phone">Num&eacute;ro de t&eacute;l&eacute;phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Entrez votre numéro de téléphone" value="<?php echo set_value("phone");?>">
                <font class="form_error"><?php echo form_error("phone"); ?></font>
            </div>
            <input type="submit" class="btn btn-primary" value="Envoyer">
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php include 'cjfksoft/include/footer.php'; ?>
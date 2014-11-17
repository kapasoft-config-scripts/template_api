<!--
DesignsSquare.com Template API template file - password-reset.tpl.php with following TAPI:
1. $password_reset_tapi
   - array of variables for registration form with the following API:
                $password_reset_tapi['form_id']::[STRING](form id for password reset form)<br>
                $password_reset_tapi['form_action']::[STRING] (action for password reset form)<br>
                $password_reset_tapi['email_name']::[STRING](name attribute for input field of email) <br>
                $password_reset_tapi['hidden_build_id']::[STRING](hidden field necessary for password reset form)<br>
                $password_reset_tapi['hidden_form_id']::[STRING](hidden field necessary for password reset form)<br>
-->
<form class="forget-form" id="<?php print $password_reset_tapi['form_id'];?>" action="<?php print $password_reset_tapi['form_action'];?>" method="post">
    <h3>Forget Password ?</h3>
    <p>
        Enter your e-mail address below to reset your password.
    </p>
    <div class="form-group">
        <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="<?php print $password_reset_tapi['email_name'];?>"/>
        </div>
    </div>
    <?php echo $password_reset_tapi['hidden_build_id'];?>
    <?php echo $password_reset_tapi['hidden_form_id'];?>
    <div class="form-actions">
        <button type="button" id="back-btn" class="btn">
            <i class="m-icon-swapleft"></i> Back </button>
        <button type="submit" class="btn blue pull-right">
            Submit <i class="m-icon-swapright m-icon-white"></i>
        </button>
    </div>
</form>

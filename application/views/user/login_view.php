<h1>Login Here</h1>
<?php
$attributes = array('id'=>'login_form','class'=>'form-horizontal');
if($this->session->flashdata('errors')):
echo $this->session->flashdata('errors');
endif;
echo form_open('users/login',$attributes);?>
<div class="form-group">
<?php
$data = array(
        'class'=>'form-control','name'=>'username','placeholder'=>'Enter Username'
    )
?>

    <?php echo form_input($data);?>
</div>
<div class="form-group">
<?php
$data = array(
        'class'=>'form-control','name'=>'password','placeholder'=>'Enter Password'
    )
?>

    <?php echo form_password($data);?>
</div>
<div class="form-group">
<?php
$data = array(
        'class'=>'btn btn-primary','name'=>'submit','value'=>'Login'
    )
?>

    <?php echo form_submit($data);?>
</div>


<?php form_close();?>

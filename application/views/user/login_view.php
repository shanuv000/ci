<?php if($this->session->userdata('logged_in')):

    ?><h2>LOGOUT</h2>
  <?php

    if($this->session->userdata('username')):
        echo "You are logged in as ".$this->session->userdata('username');
    endif;
echo form_open('users/logout');

    $data = array(
        'class'=>'btn btn-danger','name'=>'submit','value'=>'Logout'
    );
    echo form_submit($data);
echo form_close();






else:
?>
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

<!--<div class="form-group">-->
<?php
//$data = array(
//        'class'=>'form-control','name'=>'confirm_password','placeholder'=>'Confirm Password'
//    )
//?>
<!---->
<!--    --><?php //echo form_password($data);?>
<!--</div>-->
<div class="form-group">
<?php
$data = array(
        'class'=>'btn btn-primary','name'=>'submit','value'=>'Login'
    )
?>

    <?php echo form_submit($data);?>
</div>


<?php echo form_close();?>
<?php endif;?>

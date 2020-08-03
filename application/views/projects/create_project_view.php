
<h1>Create Projects </h1>
<?php
$attributes = array('id'=>'create_form','class'=>'form-horizontal');?>

<?php echo validation_errors("<p class='bg-success'></p>"); ?>

<?php echo form_open('projects/create_projects',$attributes);?>
<div class="form-group"><?php echo form_label('Project title');?>
    <?php $data = array('class'=>'form-control','name'=>'project_name','placeholder'=>'Enter Project Name')
    ?>
    <?php echo form_input($data);?>
</div>
<div class="form-group"><?php echo form_label('Project description');?>
    <?php $data = array('class'=>'form-control','name'=>'project_body')
    ?>
    <?php echo form_textarea($data);?>
</div>

<div class="form-group">
    <?php
    $data = array(
    'class'=>'btn btn-success','name'=>'submit','value'=>'Create'
    )
    ?>

    <?php echo form_submit($data);?>
</div>


<?php echo form_close();?>

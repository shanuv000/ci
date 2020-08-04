
<h1>Update Projects </h1>

<?php
echo "<h1>".$project_info->project_name."</h1>";
$attributes = array('id'=>'update_form','class'=>'form-horizontal');?>

<?php echo validation_errors("<p class='bg-success'></p>"); ?>

<?php echo form_open('projects/update_projects/'.$project_info->id.'',$attributes);?>


<div class="form-group"><?php echo form_label('Project title');?>
    <?php $data = array('class'=>'form-control','name'=>'project_name','value'=> $project_info->project_name );
    ?>
    <?php echo form_input($data);?>
</div>
<div class="form-group"><?php echo form_label('Project description');?>
    <?php $data = array('class'=>'form-control','name'=>'project_body','value'=> $project_info->project_body);
    ?>
    <?php echo form_textarea($data);?>
</div>

<div class="form-group">
    <?php
    $data = array(
    'class'=>'btn btn-success','name'=>'submit','value'=>'Update'
    )
    ?>

    <?php echo form_submit($data);?>
</div>


<?php echo form_close();?>

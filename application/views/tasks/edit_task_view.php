
<center><h1>Update Tasks </h1></center>

<?php
$attributes = array('id'=>'create_form','class'=>'form-horizontal');?>

<?php echo validation_errors("<p class='bg-success'></p>"); ?>

<?php echo form_open('tasks/update_tasks/'.$this->uri->segment(3).'',$attributes);?>


<div class="form-group"><?php echo form_label('Task title');?>
    <?php $data = array('class'=>'form-control','name'=>'task_name','value'=> $the_task->task_name );
    ?>
    <?php echo form_input($data);?>
</div>
<div class="form-group"><?php echo form_label('Task description');?>
    <?php $data = array('class'=>'form-control','name'=>'task_body','value'=> $the_task->task_body);
    ?>
    <?php echo form_textarea($data);?>
</div>

<div class="form-group">
    <?php $data = array('class'=>'form-control','name'=>'due_date','type'=>'date','value'=> $the_task->due_date)
    ?>
    <?php echo form_input($data);?>
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

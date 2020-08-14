
<h1>Create tasks </h1>
<?php
$attributes = array('id'=>'create_form','class'=>'form-horizontal');?>

<?php echo validation_errors("<p class='bg-success'></p>"); ?>

<?php echo form_open('tasks/create/'.$this->uri->segment(3).'',$attributes);?>
<div class="form-group"><?php echo form_label('task title');?>
    <?php $data = array('class'=>'form-control','name'=>'task_name','placeholder'=>'Enter task Name')
    ?>
    <?php echo form_input($data);?>
</div>
<div class="form-group"><?php echo form_label('task description');?>
    <?php $data = array('class'=>'form-control','name'=>'task_body')
    ?>
    <?php echo form_textarea($data);?>
</div>
<div class="form-group">
    <?php $data = array('class'=>'form-control','name'=>'due_date','type'=>'date')
    ?>
    <?php echo form_input($data);?>
</div>

<div class="form-group">
    <?php
    $data = array(
    'class'=>'btn btn-success','name'=>'submit','value'=>'Create Task'
    )
    ?>

    <?php echo form_submit($data);?>
</div>


<?php echo form_close();?>
<script>
    webshims.setOptions('forms-ext',{types: 'date'});
    webshims.polyfill('forms form-ext');
</script>

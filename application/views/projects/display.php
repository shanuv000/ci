<div class="bg-success">
<?php

if ($this->session->flashdata('mark_done')):
    echo $this->session->flashdata('mark_done');
endif;
if ($this->session->flashdata('mark_undone')):
    echo $this->session->flashdata('mark_undone');
endif;
?>
</div>

    <div class="jumbotron col-xs-9">
        <h1><?php echo $project_data->project_name; ?></h1>
        <p>
        <h3>  <?= $project_data->project_body ?></h3>
        </p>
        <p>
        <h5>  <?= $project_data->date_created ?></h5>
        </p>
        <h3>Active Tasks</h3>
        <?php if ($completed_tasks): ?>
            <ul class="list-group">
                <? foreach ($completed_tasks as $task): ?>
                    <a href="<?= base_url(); ?>/tasks/display/<?= $task->task_id ?>">
                        <li style="color:palevioletred" class="list-group-item ">        <?php echo $task->task_name; ?></li>
                    </a>
                <?php endforeach;
                ?></ul>
<? endif;?>

        <h3>Completed Tasks</h3>

        <?php if ($not_completed_tasks): ?>
            <ul class="list-group">
                <? foreach ($not_completed_tasks as $task): ?>
                    <a href="<?= base_url(); ?>/tasks/display/<?= $task->task_id ?>">
                        <li style="color:green" class="list-group-item">        <?php echo $task->task_name; ?></li>
                    </a>
                <?php endforeach;
                ?></ul>

       <?
        else:
            echo "<p><h3>You have no other Tasks </h3></p>";

        endif;
        ?>
    </div>


    <div class="col-xs-3 float-right ">
        <ul class="list-group"><h4>Project Actions</h4>
            <a class="btn btn-primary float-right" href="<?= base_url(); ?>projects/create_projects">Create Project</a>

            <li class="list-group-item"><a href="<?= base_url(); ?>tasks/create/<?= $project_data->id; ?>">Create
                    Task</a></li>
            <li class="list-group-item"><a
                        href="<?= base_url(); ?>projects/update_projects/<?php echo $project_data->id; ?>">Edit
                    Project</a></li>
            <li class="list-group-item"><a
                        href="<?= base_url(); ?>projects/delete_projects/<?php echo $project_data->id; ?>">Delete Projects</a>
            </li>
        </ul>
    </div>

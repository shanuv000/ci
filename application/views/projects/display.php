<div class="row">
    <div class="jumbotron col-xs-9">
        <h1><?php echo $project_data->project_name; ?></h1>
        <p>
        <h3>  <?= $project_data->project_body ?></h3>
        </p>
        <p>
        <h5>  <?= $project_data->date_created ?></h5>
        </p>


        <h3>Tasks</h3>
        <?php if ($completed_tasks): ?>
            <ul class="list-group">
            <? foreach ($completed_tasks as $task): ?>
                <a href="<?= base_url(); ?>/tasks/display/<?= $task->task_id ?>">

                        <li class="list-group-item">        <?php echo $task->task_name; ?></li>

                </a>


            <?php endforeach;
?></ul> <?
            else:
                echo "<p><h3>You have no other Tasks </h3></p>";

        endif;
        ?>
    </div>
</div>


<div class="row float-right">
    <div class="col-xs-3 ">
        <ul class="list-group"><h4>Project Actions</h4>
            <a class="btn btn-primary float-right" href="<?= base_url(); ?>projects/create_projects">Create Project</a>

            <li class="list-group-item"><a href="<?= base_url(); ?>tasks/create/<?= $project_data->id; ?>">Create
                    Task</a></li>
            <li class="list-group-item"><a
                        href="<?= base_url(); ?>projects/update_projects/<?php echo $project_data->id; ?>">Edit
                    Project</a></li>
            <li class="list-group-item"><a
                        href="<?= base_url(); ?>projects/delete_projects/<?php echo $project_data->id; ?>">Delete</a>
            </li>
        </ul>
    </div>
</div>

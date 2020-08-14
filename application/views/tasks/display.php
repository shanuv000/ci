<div class="col-xs-9">

    <h1><?= ucfirst($task->task_name); ?></h1>
    <p> Project Name: <?= ucfirst($project_name); ?></p>
    <p>Created: <?= $task->date_created; ?></p>
    <p>Due On: <?= $task->due_date; ?></p>
    <h4>
        Description
    </h4>
    <p class="task-description"><?= ucfirst($task->task_body); ?></p>

</div>

<div class="col-xs-3 float-md-right">
    <ul class="list-group"><h4>Task Actions</h4>
        <li class="list-group-item"><a href="<?= base_url(); ?>tasks/update_tasks/<?= $task->id ?>">Edit</a></li>
        <li class="list-group-item"><a href="<?= base_url(); ?>tasks/delete/<?= $task->project_id ?>/<?= $task->id; ?>">Delete</a>
        <li class="list-group-item"><a href="<?= base_url(); ?>tasks/mark_complete/<?= $task->id ?>">Mark Complete</a>
        </li>
        <li class="list-group-item"><a href="<?= base_url(); ?>tasks/mark_pending/<?= $task->id ?>">Mark Pending</a>
        </li>

    </ul>
</div>

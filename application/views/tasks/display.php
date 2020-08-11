<h1>Task Display View</h1>


<table class="table table-hover table-bordered">
    <thead>
    <tr bgcolor="#f0ffff">

        <th>TASK NAME</th>
        <th>TASK BODY</th>
        <th>Date Created</th>
    </tr>
    </thead>
    <tbody>


    <tr>

        <td>
            <div class="task-name">
                <?=  $task->task_name;?>
            </div>
            <div class="task-action">
                <a href="<?= base_url();?>tasks/update_tasks/<?= $task->id?>">Edit</a>
                <a href="<?= base_url();?>tasks/delete/<?= $task->id?>">Delete</a>
            </div>

        </td>


        <td><? echo $task->task_body; ?></td>
        <td><? echo $task->date_created; ?></td>
    </tr>


    </tbody>

</table>

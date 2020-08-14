


</p>
<p class="bg-success">
    <?php if ($this->session->flashdata('login_success')):
        echo $this->session->flashdata('login_success');
    endif;
    ?>
    <?php if ($this->session->flashdata('user_registered')):
        echo $this->session->flashdata('user_registered');
    endif;
    ?>
</p>
<p class="bg-danger">
    <?php if ($this->session->flashdata('login_failed')):
        echo $this->session->flashdata('login_failed');
    endif;
    if ($this->session->flashdata('no_access')):
        echo $this->session->flashdata('no_access');
    endif;
    ?>
</p>


<?php if (isset($projects)): ?>

    <div class="jumbotron jumbotron-fluid">
        <center><h1>Projects</h1></center>
    </div>
<div class="panel panel-success">
    <div class="panel-heading">Projects</div>
    <div class="panel-body">    <?php
        foreach ($projects as $project):
            ?>


            <ul class="list-group">
                <li class="list-group-item">

                    <a class=" "
                       href="<?php echo base_url(); ?>projects/display/<?= $project->id ?>"><?php echo ucfirst($project->project_name); ?></a>


                </li>
            </ul>
        <?php endforeach;
        ?>



        <?php else: ?>

            <div class="jumbotron">
                <center><h1>Welcome to the CI App</h1></center>

            </div>
        <?php endif; ?>

    </div>
</div>


<?php if (isset($tasks)): ?>

<div class="panel panel-success">
    <div class="panel-heading"><h4>Tasks</h4></div>
    <div class="panel-body">
        <ul class="list-group">
            <?php
            foreach ($tasks as $task):
                ?>

                <li class="list-group-item">
                    <a href="<?php echo base_url(); ?>tasks/display/<?= $task->id ?>"><?php echo $task->task_name; ?></a>
                </li>
            <?php endforeach;
            ?></ul>
        <?php else: ?>


        <?php endif; ?>
    </div>
</div>


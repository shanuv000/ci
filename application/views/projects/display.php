<div class="row">
        <div class="jumbotron col-xs-9">
            <h1><?php echo $project_data->project_name; ?></h1>
            <p>
            <h3>  <?= $project_data->project_body ?></h3>
            </p>
            <p>
            <h5>  <?= $project_data->date_created ?></h5>
            </p></div>
</div>
     <div class="row float-right">
    <div class="col-xs-3 ">
        <ul class="list-group"><h4>Project Actions</h4>
            <a class="btn btn-primary float-right" href="<?= base_url();?>projects/create_projects">Create Project</a>

            <li class="list-group-item"><a href="">Create Project</a></li>
            <li class="list-group-item"><a href="<?= base_url();?>projects/update_projects/<?php echo $project_data->id;?>">Edit Project</a></li>
            <li class="list-group-item"><a href="<?= base_url();?>projects/delete_projects/<?php echo $project_data->id;?>">Delete</a></li>
        </ul>
    </div>
    </div>

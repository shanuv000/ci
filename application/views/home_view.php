




<?php if(isset($projects)):?>
<div class="jumbotron jumbotron-fluid">
    <center><h1>Projects</h1></center>
</div>


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




<table class="table table-hover table-bordered" >
    <a class="btn btn-primary float-right btn-toolbar" href="<?= base_url();?>projects/create_projects">Create Project</a>
    <thead>
    <tr bgcolor="#f0ffff">

        <th>PROJECT NAME</th>
        <th>PROJECT BODY</th>
        <th><i class="fa fa-trash" aria-hidden="true"></i>
        </th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($projects as $project):
        ?>
        <tr>


            <?php echo "<td >". $project->project_name."</td>"; ?>
            <?php echo "<td >". $project->project_body."</td>"; ?>
          <td>  <span><a class="btn btn-toolbar btn-warning " href="<?php echo base_url();?>projects">View</a></span></td>
        </tr>

    <?php endforeach;
    ?>

    </tbody>

</table>

<?php else:?>

<div class="jumbotron">
  <center><h1>Welcome to the CI App</h1></center>

</div>
<?php endif;?>

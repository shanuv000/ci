<h1>Projects</h1>
<div class="bg-success">
    <?php
     if ($this->session->flashdata('project_created')):
            echo  $this->session->flashdata('project_created');
        endif;
        if ($this->session->flashdata('project_updated')):
            echo  $this->session->flashdata('project_updated');
        endif;

        ?>
</div>

<div class="bg-danger">
    <?php
     if ($this->session->flashdata('project_deleted')):
            echo  $this->session->flashdata('project_deleted');
        endif;
        ?>
</div>




<table class="table table-hover" >
    <a class="btn btn-primary float-right" href="<?= base_url();?>projects/create_projects">Create Project</a>
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

    <?
        echo "<td> <a href='". base_url()   ."projects/display/". $project->id  ."'>". $project->project_name."</a></td>"
        ?>
        <?php echo "<td >". $project->project_body."</td>"; ?>
                <?php echo "<td ><a class='btn btn-danger' href='". base_url()   ."projects/delete_projects/". $project->id  ."'>
delete</a>

</i></td>";
                ?>
    </tr>

    <?php endforeach;
    ?>

    </tbody>

</table>

<table class="table" >
    <thead>
    <tr bgcolor="#f0ffff">
        <th>PROJECT NAME</th>
       <th>PROJECT BODY</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($projects as $project):
    ?>
    <tr>

    <?
        echo "<td> <a href='". base_url()   ."projects/display'>". $project->project_name."</a></td>"
        ?>
        <?php echo "<td >". $project->project_body."</td>"; ?>
    </tr>

    <?php endforeach;
    ?>

    </tbody>

</table>

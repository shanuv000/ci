
<h1>This is home View</h1>
<p class="bg-success">
    <?php if ($this->session->flashdata('login_success')):
      echo  $this->session->flashdata('login_success');

    endif;
    ?>
</p>
<p class="bg-danger">
    <?php if ($this->session->flashdata('login_failed')):
      echo  $this->session->flashdata('login_failed');
    endif;
    ?>
</p>

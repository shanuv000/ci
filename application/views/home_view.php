<p class="bg-success">
    <?php if ($this->session->flashdata('logged_in')):
        $this->session->flashdata('logged_in');
    endif;
    ?>
</p>
<p class="bg-failed">
    <?php if ($this->session->flashdata('login_failed')):
        $this->session->flashdata('login_failed');
    endif;
    ?>
</p>

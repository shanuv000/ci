<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <title>Login_view</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">CI APP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo base_url(); ?>">HOME <span
                        class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo base_url(); ?>users/register">REGISTER</a>
            <a class="nav-item nav-link" href="<?php echo base_url(); ?>projects">Projects</a>

            <div class="nav-item nav-link float-right">
                <div class="dropdown ">
                    <? if ($this->session->userdata('username')): ?>
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <? $name = $this->session->userdata('username'); ?>
                            <? echo "<div class='nav-item nav-link'>" . ucfirst($name) . "</div>"; ?>
                        </button>
                    <? endif; ?>
                    <?php if ($this->session->userdata('logged_in')): ?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            <a class="dropdown-item" href="<?= base_url() ?>users/logout">logout</a>

                        </div>
                    <? endif; ?>
                </div>
            </div>
        </div>

    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <?php
            $this
            ->
            load
            ->view('user/login_view');
            ?>
        </div>
        <div class="col-xs-12 col-md-9">
            <?php
            $this
            ->
            load
            ->view(
            $main_view
            );
            ?>
        </div>
    </div>
</div>
</body>

</html>

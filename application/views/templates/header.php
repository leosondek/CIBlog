<html>
    <head>
    <title>CIBLOG</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>
    </head>
    <body>
        <nav class ="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">LeoBlog</a>
                </div>
                <div id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
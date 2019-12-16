<html>
    <head>
    <title>CIBLOG</title>
    <link rel="stylesheet" href="<?= site_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
    
    <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>
    </head>
    <body>
        <nav class ="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url(); ?>">LeoBlog</a>
                </div>
                <div id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url(); ?>about">About</a></li>
                        <li><a href="<?= base_url(); ?>posts">Blog</a></li>
                        <li><a href="<?= base_url(); ?>categories">Categories</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= base_url(); ?>posts/create">Create Post</a></li>
                        <li><a href="<?= base_url(); ?>categories/create">Create Category</a></li>
                        <li><a href="<?= base_url(); ?>users/register">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <!-- Flash Message -->

            <?php if($this->session->flashdata('user_registered')): ?>
                <?= '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_created')): ?>
                <?= '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_updated')): ?>
                <?= '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('category_created')): ?>
                <?= '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_delete')): ?>
                <?= '<p class="alert alert-success">'.$this->session->flashdata('post_delete').'</p>'; ?>
            <?php endif; ?>
<h2><?= $title; ?>

<?= validation_errors(); ?>

<?= form_open('users/register'); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
</div>
<div class="form-group">
    <label>ZipCode</label>
    <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
</div>
<div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
</div>
<div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?= form_close(); ?>

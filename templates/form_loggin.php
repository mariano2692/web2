<?php
require_once 'templates/header.php';
?>

<?php if($error):?>
<div class='alert alert-danger' role='alert'>
    <?php $error ?>
</div> 
<?php endif ?>

<form method='post' action='login'>
    <div class='form-group'>
        <label for='user'>usuario</label>
        <input type='text' class='form-control' id='user' name='usuario' required>
    </div>
    <div class='form-group'>
        <label for='password'>Password</label>
        <input type='password' class='form-control' id='password' name='password' required>
    </div>
    <button type='submit' class='btn btn-primary'>Login</button>
</form>

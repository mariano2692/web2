<?php
require_once 'templates/header.php';
?>

<div class="mt-5 w-25 mx-auto">
    <!-- mensaje de error (si existe) -->
    <?php if ($error): ?>
        <div class='alert alert-danger' role='alert'>
            <?= $error ?>
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

</div>

<?php
require_once 'templates/footer.php';
?>

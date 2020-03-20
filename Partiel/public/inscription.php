<?php require_once '../views/header.php';
require_once '../functions/USERS.php';

if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);

    $insert = addUser($email, $login, $password);
}

?>

    <h1>Inscription</h1>

    <form method="POST">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Enter login">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>



<?php require_once '../views/footer.php'; ?>
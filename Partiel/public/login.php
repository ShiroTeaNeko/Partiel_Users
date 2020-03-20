<?php
require_once '../functions/database.php';
require_once '../functions/redirect.php';

$pdo = getPdo();
$login = "";
$error = false;

if (!empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password'])) {
    session_start();
    $email = $_POST['email'];
    $login = $_POST['login'];
    //$password = $_POST['password'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);

    $query = "SELECT * FROM users WHERE login = :login";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'login' => $login
    ]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['state'] = 'connected';
        $_SESSION['user_id'] = $row['ID'];
        redirect('/admin/userList.php');
    } else {
        $error = true;
    }
}

require_once '../views/header.php';
?>

    <h1>Connexion</h1>

<?php if ($error) { ?>
    <div class="alert alert-danger" role="alert">
        Les informations fournies n'ont pas permis de vous identifier
    </div>
<?php } ?>

    <form method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email..." value="<?php echo $email; ?>" />
        </div>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Login..." value="<?php echo $login; ?>" />
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe..." />
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>

<?php require_once '../views/footer.php'; ?>
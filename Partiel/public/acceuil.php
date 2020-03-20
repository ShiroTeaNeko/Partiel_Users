<?php require_once '../functions/USERS.php';
require_once '../views/header.php'; ?>

<h1>Titre</h1>

<?php require_once '../views/footer.php';

if (!empty($_POST) && !empty($_POST['email'])) {
$email = $_POST['email'];

$insert = addMailNews($email);
}
?>
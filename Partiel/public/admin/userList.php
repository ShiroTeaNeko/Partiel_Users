<?php
//require_once '../../functions/redirect.php';
//session_start();
//if(isset($_SESSION['state']) && $_SESSION["state"] == "connected") {
//    echo "Vous êtes connecté";
//} else {
//    redirect('/admin/login.php');
//}

require_once '../../functions/USERS.php';
require_once '../../views/header.php';

$users = getAllUsers();

?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">login</th>
        <th scope="col">password</th>
        <th scope="col">email</th>
        <th scope="col">Active</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?php echo $user['ID']; ?></td>
            <td><?php echo $user['login']; ?></td>
            <td><?php echo $user['password']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['active']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php require_once '../../views/footer.php'; ?>
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

$mail = getAllEmail();

?>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">email</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($mail as $output) { ?>
            <tr>
                <td><?php echo $output['ID']; ?></td>
                <td><?php echo $output['email']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

<?php require_once '../../views/footer.php'; ?>
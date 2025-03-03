<?php 
require_once '../Controller/UserController.php';
require_once '../Model/User.php';
$controller = new UserController();
$user = $controller->getUser();
if (!is_array($user)) {
    $user = [];
}

//$offer=new User("aaa","aaaa");
//$offer1=new User("fhghg","njnnjn");
//$controller->addUser($offer);
//$controller->updateUser($offer1,7);
//$controller->deleteUser(5);

?>
<table border="1">
    <tr>
        <th>email</th>
        <th>password</th>
    </tr>
    <?php
    foreach ($user as $u) {
        echo '<tr>
            <td>' . htmlspecialchars($u['email']) . '</td>
            <td>' . htmlspecialchars($u['pwd']) . '</td>
        </tr>';
    }
    ?>

</table>

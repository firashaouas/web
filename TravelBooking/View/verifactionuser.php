<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    
    require_once '../Controller/UserController.php';
    require_once '../Model/User.php';

    $controller = new UserController();
    
    // Action pour afficher les utilisateurs
    if ($_POST['action'] == 'sh') {
        // Récupérer les utilisateurs
        $users = $controller->getUser();

        // Vérifier si la récupération des utilisateurs est un tableau et s'il n'est pas vide
        if (is_array($users) && count($users) > 0) {
            // Affichage des utilisateurs dans un tableau HTML
            echo '<table border="1">';
            echo '<tr><th>Email</th><th>Password</th></tr>';
            
            // Affichage de chaque utilisateur
            foreach ($users as $user) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($user['email']) . '</td>';
                echo '<td>' . htmlspecialchars($user['pwd']) . '</td>';
                echo '</tr>';
            }
            
            echo '</table>';
        } else {
            // Si aucun utilisateur n'est trouvé
            echo 'Aucun utilisateur trouvé.';
        }
    }

    // Action pour ajouter un utilisateur
    if ($_POST['action'] == 'aj' && isset($_POST['email']) && isset($_POST['password'])) {
        $user = new User($_POST['email'], $_POST['password']);
        $controller->addUser($user);
    }

    // Action pour supprimer un utilisateur
    if ($_POST['action'] == 'su' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $controller->deleteUser($id);
    }
    if(isset($_POST['action']) && $_POST['action'] == 'up' && isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password'])){
        $user = new User($_POST['email'], $_POST['password']);
        $controller->updateUser($user, $_POST['id']);
    }
}
?>

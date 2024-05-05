<?php

require_once '../Model/utilisateur.php'; // Inclure le modèle utilisateur
require_once '../Controller/cutilisateur.php'; // Inclure le contrôleur utilisateur
require_once '../configuti.php'; // Ce fichier contiendra votre connexion PDO

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "PUT" || $_SERVER["REQUEST_METHOD"] == "PATCH") {
    // Récupérer l'instance PDO de la configuration
    $pdo = config::getConnexion();

    // Vérifier si l'ID de l'utilisateur à mettre à jour est présent
    if (!empty($_GET['userId'])) {
        $userId = $_GET['userId'];
        
        // Assurez-vous que les champs requis sont présents et non vides
        if (empty($_POST['firstName']) || empty($_POST['email']) || empty($_POST['lastName']) || empty($_POST['role']) || empty($_POST['pays']) || empty($_POST['birthdate']) || empty($_POST['telephone']) || empty($_POST['age']) || empty($_POST['gender']) || empty($_POST['robotCheck']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
            echo "Tous les champs sont requis.";
        } else {
            // Créer une instance d'utilisateur avec les données mises à jour
            $utilisateur = new Utilisateur(
                $pdo,                         // l'objet PDO pour la connexion à la base de données
                $userId,                     // ID de l'utilisateur à mettre à jour
                $_POST['firstName'],         // Prénom de l'utilisateur
                $_POST['email'],             // Email de l'utilisateur
                $_POST['lastName'],          // Nom de l'utilisateur
                $_POST['role'],              // Rôle de l'utilisateur
                $_POST['dateEmbauche'],      // Date d'embauche (pour les administrateurs)
                $_POST['niveauAcces'],       // Niveau d'accès (pour les administrateurs)
                $_POST['numeroEtudiant'],    // Numéro d'étudiant (pour les étudiants)
                $_POST['niveauEtude'],       // Niveau d'étude (pour les étudiants)
                $_POST['specialisation'],    // Spécialisation (pour les étudiants)
                $_POST['pays'],              // Pays de l'utilisateur
                $_POST['birthdate'],         // Date de naissance de l'utilisateur
                $_POST['telephone'],         // Numéro de téléphone de l'utilisateur
                $_POST['age'],               // Âge de l'utilisateur
                $_POST['gender'],            // Sexe de l'utilisateur
                $_POST['robotCheck'],        // Vérification robot
                $_POST['password'],          // Mot de passe de l'utilisateur
                $_POST['confirmPassword']    // Confirmation du mot de passe de l'utilisateur
            );

            // Créer une instance du contrôleur d'utilisateur
            $controller = new UtilisateurController();

            // Appeler la méthode pour mettre à jour l'utilisateur
            $result = $controller->updateUser($utilisateur);

            // Vérifier le résultat de la mise à jour
            if ($result) {
                echo "Utilisateur mis à jour avec succès dans la base de données !";
            } else {
                echo "Une erreur s'est produite lors de la mise à jour de l'utilisateur dans la base de données.";
            }
        }
    } else {
        echo "ID utilisateur manquant.";
    }
} else {
    echo "Méthode HTTP incorrecte.";
}

?>

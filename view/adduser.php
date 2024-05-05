<?php

require_once '../Model/utilisateur.php'; // Inclure le modèle utilisateur
require_once '../Controller/cutilisateur.php'; // Inclure le contrôleur utilisateur
require_once '../configuti.php'; // Ce fichier contiendra votre connexion PDO

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurez-vous que les champs requis sont présents et non vides
    if (empty($_POST['firstName']) || empty($_POST['email']) || empty($_POST['lastName']) || empty($_POST['role']) || empty($_POST['pays']) || empty($_POST['birthdate']) || empty($_POST['telephone']) || empty($_POST['age']) || empty($_POST['gender']) || empty($_POST['robotCheck']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
        echo "Tous les champs sont requis.";
    } else {
        // Récupérer l'instance PDO de la configuration
        $pdo = config::getConnexion();

        // Créer une instance d'utilisateur en fonction du rôle
        if ($_POST['role'] === "admin") {
            $utilisateur = new Utilisateur(
                $pdo,                         // l'objet PDO pour la connexion à la base de données
                null,                         // Laissez null pour l'ID, car il sera généré automatiquement
                $_POST['firstName'],         // Prénom de l'utilisateur
                $_POST['email'],             // Email de l'utilisateur
                $_POST['lastName'],          // Nom de l'utilisateur
                $_POST['role'],              // Rôle de l'utilisateur
                $_POST['dateEmbauche'],      // Date d'embauche pour les administrateurs
                $_POST['niveauAcces'],       // Niveau d'accès pour les administrateurs
                null,                        // Niveau d'étude n'est pas applicable pour les administrateurs
                null,                        // Spécialisation n'est pas applicable pour les administrateurs
                $_POST['pays'],              // Pays de l'utilisateur
                $_POST['birthdate'],         // Date de naissance de l'utilisateur
                $_POST['telephone'],         // Numéro de téléphone de l'utilisateur
                $_POST['age'],               // Âge de l'utilisateur
                $_POST['gender'],            // Sexe de l'utilisateur
                $_POST['robotCheck'],        // Vérification robot
                $_POST['password'],          // Mot de passe de l'utilisateur
                $_POST['confirmPassword']    // Confirmation du mot de passe de l'utilisateur
            );
        } elseif ($_POST['role'] === "etudiant") {
            $utilisateur = new Utilisateur(
                $pdo,                         // l'objet PDO pour la connexion à la base de données
                null,                         // Laissez null pour l'ID, car il sera généré automatiquement
                $_POST['firstName'],         // Prénom de l'utilisateur
                $_POST['email'],             // Email de l'utilisateur
                $_POST['lastName'],          // Nom de l'utilisateur
                $_POST['role'],              // Rôle de l'utilisateur
                null,                        // Date d'embauche n'est pas applicable pour les étudiants
                null,                        // Niveau d'accès n'est pas applicable pour les étudiants
                $_POST['niveauEtude'],       // Niveau d'étude pour les étudiants
                $_POST['specialisation'],    // Spécialisation pour les étudiants
                $_POST['pays'],              // Pays de l'utilisateur
                $_POST['birthdate'],         // Date de naissance de l'utilisateur
                $_POST['telephone'],         // Numéro de téléphone de l'utilisateur
                $_POST['age'],               // Âge de l'utilisateur
                $_POST['gender'],            // Sexe de l'utilisateur
                $_POST['robotCheck'],        // Vérification robot
                $_POST['password'],          // Mot de passe de l'utilisateur
                $_POST['confirmPassword']    // Confirmation du mot de passe de l'utilisateur
            );
        }

        // Créer une instance du contrôleur d'utilisateur
        $controller = new UtilisateurController();

        // Appeler la méthode pour ajouter l'utilisateur
        $result = $controller->addUser($utilisateur);

        // Vérifier le résultat de l'ajout
        if ($result) {
            echo "Utilisateur ajouté avec succès à la base de données !";
        } else {
            echo "Une erreur s'est produite lors de l'ajout de l'utilisateur à la base de données.";
        }
    }
} else {
    echo "Aucune donnée soumise.";
}

?>
``

<?php

require "../contoller/cutilisateur.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userController = new UserController();
    $prenom = $_POST['firstName'];
    $nom = $_POST['lastName'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $dateEmbauche = $_POST['dateEmbauche'];
    $niveauAcces = $_POST['niveauAcces'];
    //$numeroEtudiant = $_POST['numeroEtudiant'];
    $niveauEtude = $_POST['niveauEtude'];
    $specialisation = $_POST['specialisation'];
    $pays = $_POST['pays'];
    $birthdate = $_POST['birthdate'];
    $telephone = $_POST['telephone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $pw = $_POST['pw'];

    if (isset($prenom) && isset($nom) && isset($email) && isset($role) && isset($pays) && isset($birthdate) && isset($telephone) && isset($age) && isset($gender) && isset($pw)) {
        $user = new User($prenom, $nom, $email, $role, $pays, $birthdate, $telephone, $age, $gender, $pw);

        if ($role === "admin") {
            $user->setDateEmbauche($dateEmbauche);
            $user->setNiveauAcces($niveauAcces);
            header("Location: login.php");
        } else if ($role === "etudiant") {
            //$user->setNumeroEtudiant($numeroEtudiant);
            $user->setNiveauEtude($niveauEtude);
            $user->setSpecialisation($specialisation);
            header("Location: login.php");
        }
        $userController->addUser($user);
    } else {
        echo "Erreur de saisie des données. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Guidemeup site educatif en ligne</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .hidden {
            display: none;
        }
    </style>


</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Guidemeup</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="about.html" class="nav-item nav-link ">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tests</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Tests d'orientation</a>
                        <a href="testimonial.html" class="dropdown-item ">Forums</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Donations</a>
                <a href="contact.html" class="nav-item nav-link ">Contact</a>
            </div>
            <a href="inscription.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">S'inscrire<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Content Start -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card rounded animate__animated animate__fadeIn"> <!-- Ajout de classes d'animation -->
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Inscription</h2>
                        <form method="post">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Prénom</label>
                                <input type="text" class="form-control rounded" id="firstName" name="firstName" placeholder="Entrez votre prénom">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control rounded" id="email" name="email" placeholder="Entrez votre adresse e-mail">
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Nom</label>
                                <input type="text" class="form-control rounded" id="lastName" name="lastName" placeholder="Entrez votre nom">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Type d'utilisateur</label>
                                <select class="form-select" id="role" name="role">
                                    <option value="etudiant">Étudiant</option>
                                    <option value="admin">Administrateur</option>
                                </select>
                            </div>
                            <!-- Champs spécifiques à l'administrateur -->
                            <div id="champsAdmin" class="mb-3 hidden">
                                <label for="dateEmbauche" class="form-label">Date d'embauche</label>
                                <input type="date" class="form-control" id="dateEmbauche" name="dateEmbauche">
                                <!-- Ajoutez d'autres champs spécifiques à l'administrateur ici -->
                                <label for="niveauAcces" class="form-label">Niveau d'accès</label>
                                <select class="form-select" id="niveauAcces" name="niveauAcces">
                                    <option value="bas">Bas</option>
                                    <option value="moyen">Moyen</option>
                                    <option value="elevee">Élevée</option>
                                </select>

                            </div>

                            <!-- Champs spécifiques à l'étudiant -->
                            <div id="champsEtudiant" class="mb-3 hidden">
                                <!-- Ajoutez d'autres champs spécifiques à l'étudiant ici -->
                                <label for="niveauEtude" class="form-label">Niveau d'étude</label>
                                <select class="form-select" id="niveauEtude" name="niveauEtude">
                                    <option value="premiere_annee">Première année</option>
                                    <option value="deuxieme_annee">Deuxième année</option>
                                    <option value="troisieme_annee">Troisième année</option>
                                </select>
                                <label for="specialisation" class="form-label">Spécialisation</label>
                                <input type="text" class="form-control" id="specialisation" name="specialisation" placeholder="Entrez votre spécialisation">

                            </div>

                            <div class="mb-3">
                                <label for="pays" class="form-label">Pays</label>
                                <input type="text" class="form-control" id="pays" name="pays" placeholder="Entrez votre pays">
                            </div>

                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Date de naissance</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate">
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Numéro de téléphone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Entrez votre numéro de téléphone">
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Âge</label>
                                <input type="number" class="form-control rounded" id="age" name="age" placeholder="Entrez votre âge">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sexe</label>
                                <div>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female">Femme</label>
                                </div>
                                <div>
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for="male">Homme</label>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="robotCheck" name="robotCheck">
                                <label class="form-check-label" for="robotCheck">Je ne suis pas un robot</label>
                            </div>
                            <div class="mb-3">
                                <label for="pw" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control rounded" id="pw" name="pw" placeholder="Entrez votre mot de passe">
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control rounded" id="confirmPassword" name="confirmPassword" placeholder="Confirmez votre mot de passe">
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LdIRtEpAAAAAAZ_F8-XU7H5gCJhaz5qKIeW3jA_"></div>
                            <button type="submit" value="submit" class="btn btn-primary w-100 rounded-pill animate__animated animate__fadeInUp">S'inscrire</button> <!-- Ajout de classes d'animation -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Tunis,el ghzela esprit ecole superieure d'ingenieurie</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+216 21 546 709</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>guidemeup@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Infolettre</h4>
                    <p>Inscrivez-vous a notre bulletin d'information pour recevoir les dernieres mises a jour, offres speciales et nouvelles directement dans votre boite de reception !.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Guidemeup</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- JavaScript au bas de la page -->
    <!-- JavaScript au bas de la page -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var roleSelect = document.getElementById("role");
            var champsAdmin = document.getElementById("champsAdmin");
            var champsEtudiant = document.getElementById("champsEtudiant");

            // Événement de changement de sélection du rôle
            roleSelect.addEventListener("change", function() {
                if (roleSelect.value === "admin") {
                    champsAdmin.classList.remove("hidden");
                    champsEtudiant.classList.add("hidden");
                } else if (roleSelect.value === "etudiant") {
                    champsEtudiant.classList.remove("hidden");
                    champsAdmin.classList.add("hidden");
                } else {
                    // Masquer tous les champs spécifiques si aucun rôle n'est sélectionné
                    champsAdmin.classList.add("hidden");
                    champsEtudiant.classList.add("hidden");
                }
            });

        });
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var form = document.querySelector("form");

            form.addEventListener("submit", function(event) {
                // Récupérer les valeurs des champs du formulaire
                var firstName = document.getElementById("firstName").value;
                var email = document.getElementById("email").value;
                var lastName = document.getElementById("lastName").value;
                var role = document.getElementById("role").value;
                var dateEmbauche = document.getElementById("dateEmbauche").value;
                var niveauAcces = document.getElementById("niveauAcces").value;
                var niveauEtude = document.getElementById("niveauEtude").value;
                var specialisation = document.getElementById("specialisation").value;
                var pays = document.getElementById("pays").value;
                var birthdate = document.getElementById("birthdate").value;
                var telephone = document.getElementById("telephone").value;
                var age = document.getElementById("age").value;
                var gender = document.querySelector("input[name='gender']:checked");
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirmPassword").value;
                var robotCheck = document.getElementById("robotCheck").checked;

                // Vérifier que tous les champs sont remplis
                if (firstName === "" || email === "" || lastName === "" || role === "" || (role === "admin" && (dateEmbauche === "" || niveauAcces === "")) || (role === "etudiant" && (niveauEtude === "" || specialisation === "")) || pays === "" || birthdate === "" || telephone === "" || age === "" || gender === null || password === "" || confirmPassword === "" || !robotCheck) {
                    alert("Veuillez remplir tous les champs du formulaire.");
                    event.preventDefault(); // Empêcher la soumission du formulaire
                    return;
                }

                // Vérifier que l'e-mail est au bon format
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    alert("Veuillez saisir une adresse e-mail valide.");
                    event.preventDefault(); // Empêcher la soumission du formulaire
                    return;
                }

                // Vérifier que le numéro de téléphone a exactement 8 caractères
                if (telephone.length !== 8) {
                    alert("Le numéro de téléphone doit comporter exactement 8 caractères.");
                    event.preventDefault(); // Empêcher la soumission du formulaire
                    return;
                }

                // Vérifier que l'âge est compris entre 15 et 50 ans
                if (age < 15 || age > 50) {
                    alert("L'âge doit être compris entre 15 et 50 ans.");
                    event.preventDefault(); // Empêcher la soumission du formulaire
                    return;
                }

                // Vérifier que le mot de passe contient au moins une majuscule, une minuscule et un chiffre
                var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
                if (!passwordRegex.test(password)) {
                    alert("Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et avoir une longueur minimale de 8 caractères.");
                    event.preventDefault(); // Empêcher la soumission du formulaire
                    return;
                }

                // Vérifier que le mot de passe et sa confirmation sont identiques
                if (password !== confirmPassword) {
                    alert("Le mot de passe et sa confirmation doivent être identiques.");
                    event.preventDefault(); // Empêcher la soumission du formulaire
                    return;
                }

                // Si toutes les vérifications passent, le formulaire peut être soumis
                // Vous pouvez ajouter ici toute autre logique de soumission de formulaire nécessaire
                console.log("Formulaire soumis avec succès ! Redirection vers le tableau de bord...");
            });
        });
    </script>

</body>

</html>
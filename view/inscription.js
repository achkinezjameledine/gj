document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        // Récupérer les valeurs des champs du formulaire
        var firstName = document.getElementById("firstName").value;
        var email = document.getElementById("email").value;
        var lastName = document.getElementById("lastName").value;
        var role = document.getElementById("role").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var dateEmbauche = document.getElementById("dateEmbauche").value;
        var niveauAcces = document.getElementById("niveauAcces").value;
        var numeroEtudiant = document.getElementById("numeroEtudiant").value;
        var niveauEtude = document.getElementById("niveauEtude").value;
        var specialisation = document.getElementById("specialisation").value;
        var pays = document.getElementById("pays").value;
        var birthdate = document.getElementById("birthdate").value;
        var telephone = document.getElementById("telephone").value;
        var age = document.getElementById("age").value;
        var gender = document.querySelector("input[name='gender']:checked");
        var robotCheck = document.getElementById("robotCheck").checked;

        // Vérifier que tous les champs sont remplis
        if (firstName === "" || email === "" || lastName === "" || role === "" || password === "" || confirmPassword === "" || (role === "admin" && (dateEmbauche === "" || niveauAcces === "")) || (role === "etudiant" && (numeroEtudiant === "" || niveauEtude === "" || specialisation === "")) || pays === "" || birthdate === "" || telephone === "" || age === "" || gender === null || !robotCheck) {
            alert("Veuillez remplir tous les champs du formulaire.");
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

        // Si toutes les vérifications passent, le formulaire peut être soumis
        // Vous pouvez ajouter ici toute autre logique de soumission de formulaire nécessaire

    });
});

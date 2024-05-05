<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back Office Inscription</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Add your CSS styling here */
        .courses {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .course {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .course h4 {
            margin-top: 0;
            font-size: 1.2rem;
            color: #333;
        }
        
        .course p {
            margin-bottom: 0;
            color: #666;
        }
    </style>
</head>
<body>
  
<div class="sidebar">
    <div class="logo">
        <ul class="menu">
            <li class="active">
                <a href="eleve.html" >
                    <i class="fas fa-user"></i>
                    <span>Tableau De Bord</span>
                </a>
            </li>
            <li >
                <a href="liste.php" >
                    <i class="fas fa-user"></i>
                    <span>liste des utilisateurs</span>
                </a>
            </li>
            <li>
                <a href="calendrier.html">
                    <i class="fas fa-chart-bar"></i>
                    <span>Calendrier</span>
                </a>
            </li>
            <li >
                <a href="profile.html" >
                    <i class="fas fa-user"></i>
                    <span>profile</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Welcome</span>
            <h2>Student</h2>
        </div>
        <div class="user--info">
            <div class="search--box">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="search">
            </div>
            <img src="./image/img.jpg"  alt="">
        </div>
    </div>
    <div class="card--container">
        <h3 class="main--title">Courses</h3>
        <div class="courses">
            <div class="course">
                <h4>Programmation Orientée Objet Avancée</h4>
               
            </div>
            <div class="course"><br>
                <h4>Problem Soving</h4>
               
            </div>
            <div class="course">
                <h4>Algorithmique, Structures de Données</h4>
       
            </div>
            <div class="course">
                <h4>Algèbre S2-2023</h4>
              
            </div>
            <div class="course">
                <h4>Analyse 1</h4>
           
            </div>
            <div class="course">
                <h4>Atelier Python</h4>
           
            </div>
            <div class="course">
                <h4>Anglais 2-1BC-I-S2 P1</h4>
               
            </div>
            <div class="course">
                <h4>Bases de données</h4>
             
            </div>
            <div class="course">
                <h4>Comptabilité générale</h4>
          
            </div>
            <div class="course">
                <h4>Gestion Financière</h4>
              
            </div>
            <div class="course">
                <h4>Gestion des opérations logistiques</h4>
               
            </div>
            <div class="course">
                <h4>Framework.NET</h4>
                
            </div>
            <div class="course">
                <h4>Ethique et lois des IT</h4>
                
            </div>
            <div class="course">
                <h4>Economie numérique 23/24</h4>
              
            </div>
            <div class="course">
                <h4>Conception Orientée Object</h4>
               
            </div>
            <div class="course">
                <h4>Probabilité et statistique</h4>
                
            </div>
            <div class="course">
                <h4>Logique Mathématique</h4>
               
            </div><div class="course">
                <h4>introduction Big data et cloud</h4>
                
            </div><div class="course">
                <h4>Introduction aux systèmes d'information</h4>
                
            </div><div class="course">
                <h4>Introduction à l'Informatique Décisionnelle</h4>
                
            </div><div class="course">
                <h4>IHM-Interface Homme Machine</h4>
                
            </div>
            <!-- Add more courses as needed -->
        </div>
    </div>
    
</div>
</body>
</html>

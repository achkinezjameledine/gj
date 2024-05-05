<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style2.css">
</head>



<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="happy-outline"></ion-icon>
                        </span>
                        <span class="title">!</span>
                    </a>
                </li>

                <li>
                    <a href="mte3erajel.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="liste.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">users</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">infos</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <a href="profile.html">
                        <img src="assets/imgs/customer01.jpg" alt="">
                    </a>
                    
                </div>
            </div>

           
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>users list</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <th>id</th>

                            <th>nom</th>

                            <th>prenom</th>

                            <th>email</th>

                            <th>age</th>

                            <th>DN</th>

                            <th>sexe</th>
                            <th>role</th>
                            <th>pays</th>
                            <th>telephone</th>
                            <th>delete</th>
               
                        </thead>

                        <tbody>
                            <?php
                    // Inclure le fichier contenant la classe UserController
                    require_once "../contoller/cutilisateur.php";

                    // Créer une instance de UserController
                    $userController = new UserController();

                    // Appeler la méthode listUsers() pour récupérer la liste des utilisateurs
                    $users = $userController->listUsers();

                    // Vérifier si des utilisateurs ont été récupérés
                    if ($users) {
                        // Afficher les utilisateurs dans la liste
                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>" . $user['id'] . "</td>";
                            echo "<td>" . $user['firstname'] . "</td>";
                            echo "<td>" . $user['lastname'] . "</td>";
                            echo "<td>" . $user['email'] . "</td>";
                            echo "<td>" . $user['age'] . "</td>";
                            echo "<td>" . $user['birthdate'] . "</td>";
                            echo "<td>" . $user['gender'] . "</td>";
                            echo "<td>" . $user['role'] . "</td>";
                            echo "<td>" . $user['pays'] . "</td>";
                            echo "<td>" . $user['telephone'] . "</td>";
                           // Ajout du bouton de suppression et du formulaire de suppression
                           echo "<td>";
                           echo "<button onclick='location.href=\"delete_user.php?id=" . $user['id'] . "\"'>Delete</button>";
                           echo "<form  id='deleteForm_" . $user['id'] . "' style='display: none;' action='delete_user.php' method='post'>";
                           echo "<input type='hidden' name='userId' value='" . $user['id'] . "'>";
                           echo "<input type='submit' value='Confirm Delete'>";
                           echo "</form>";
                           echo "</td>";
                           
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11'>Aucun utilisateur enregistré.</td></tr>";
                    }
                    ?>

            <tr>

                

           
           

                        </tbody>
                    </table>
                </div>
                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>other admin</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>moyen</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>elevee</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>bas</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>bas</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>moyen</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>elevee</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>bas</span></h4>
                            </td>
                        </tr>

                        
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="smile"></ion-icon>
                        </span>
                        <span class="title"></span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card1">
                    <div>
                        <div class="numbers1">1,504</div>
                        <div class="cardName0">Daily Views</div>
                    </div>

                    <div class="iconBx0">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card2">
                    <div>
                        <div class="numbers2">80</div>
                        <div class="cardName1">Sales</div>
                    </div>

                    <div class="iconBx1">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card3">
                    <div>
                        <div class="numbers3">284</div>
                        <div class="cardName2">Comments</div>
                    </div>

                    <div class="iconBx2">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card4">
                    <div>
                        <div class="numbers4">$7,842</div>
                        <div class="cardName3">Earning</div>
                    </div>

                    <div class="iconBx3">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>users list</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <th>id</th>

                            <th>nom</th>

                            <th>prenom</th>

                            <th>email</th>

                            <th>age</th>

                            <th>DN</th>

                            <th>sexe</th>
                            <th>role</th>
                            <th>pays</th>
                            <th>telephone</th>
                            <th>delete</th>
               
                        </thead>

                        <tbody>
                            <?php
                    // Inclure le fichier contenant la classe UserController
                    require_once "../contoller/cutilisateur.php";

                    // Créer une instance de UserController
                    $userController = new UserController();

                    // Appeler la méthode listUsers() pour récupérer la liste des utilisateurs
                    $users = $userController->listUsers();

                    // Vérifier si des utilisateurs ont été récupérés
                    if ($users) {
                        // Afficher les utilisateurs dans la liste
                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>" . $user['id'] . "</td>";
                            echo "<td>" . $user['firstname'] . "</td>";
                            echo "<td>" . $user['lastname'] . "</td>";
                            echo "<td>" . $user['email'] . "</td>";
                            echo "<td>" . $user['age'] . "</td>";
                            echo "<td>" . $user['birthdate'] . "</td>";
                            echo "<td>" . $user['gender'] . "</td>";
                            echo "<td>" . $user['role'] . "</td>";
                            echo "<td>" . $user['pays'] . "</td>";
                            echo "<td>" . $user['telephone'] . "</td>";
                           // Ajout du bouton de suppression et du formulaire de suppression
                           echo "<td>";
                           echo "<button onclick='location.href=\"delete_user.php?id=" . $user['id'] . "\"'>Delete</button>";
                           echo "<form  id='deleteForm_" . $user['id'] . "' style='display: none;' action='delete_user.php' method='post'>";
                           echo "<input type='hidden' name='userId' value='" . $user['id'] . "'>";
                           echo "<input type='submit' value='Confirm Delete'>";
                           echo "</form>";
                           echo "</td>";
                           
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11'>Aucun utilisateur enregistré.</td></tr>";
                    }
                    ?>

            <tr>

                

           
           

                        </tbody>
                    </table>
                </div>

                
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <?php

            include("../configuti.php");
            if (isset($_POST['submit'])) {
                $con = config::getConnexion();
                $res = $con->prepare("SELECT * FROM utilisateur WHERE email = ? AND reset = ?");
                $res->execute([$_POST['email'], $_POST['reset']]);
                $row = $res->fetch();

                if (is_array($row) && !empty($row)) {
                    header('Location:verfication.php?id=' . $row['id']);
                } else {
                    echo "<div class='message'>
                      <p>Wrong code</p>
                       </div> <br>";
                    echo "<a href='reset.php'><button class='btn'>Go Back</button>";
                }
                if (isset($_SESSION['valid'])) {
                    /*
                    tchouf se3a houni ken el user elli logged in howa admin wala etudiant, ken admin yemchi lel dashadmin.php w ken etudiant yemchi lel dasheleve.php
                        if ($row['role'] == 'admin') {
                            header("Location: dashadmin.php");
                        } else if ($row['role'] == 'etudiant') {
                            header("Location: dasheleve.php");
                        }
                    */
                    header("Location: dasheleve.php");
                }
            } else {


            ?>
                <header>verification Step</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        <a href="login.php">back to login</a>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>
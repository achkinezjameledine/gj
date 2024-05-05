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
                $res = $con->prepare("SELECT * FROM utilisateur WHERE email = ? ");
                $res->execute([$_POST['email']]);
                $row = $res->fetch();


                if (is_array($row) && !empty($row)) {
                    $randomNumber = rand(100000, 999999);
                    $sql = "UPDATE `utilisateur` SET `reset`=:reset  WHERE `email`=:email";
                    $db = config::getConnexion();
                    try {
                        $query = $db->prepare($sql);
                        $query->execute([
                            'reset' => $randomNumber,
                            'email' => $$_POST['email'],
                        ]);
                        $to = $_POST['email'];
                        $subject = "Reset your password";
                        $txt = "Hello ! Here is your verification code " . $randomNumber;
                        $headers = "From: webmaster@example.com" . "\r\n" .
                            "CC: somebodyelse@example.com";

                        mail($to, $subject, $txt, $headers);
                        header('Location:verfication.php');
                    } catch (Exception $e) {
                        echo 'Erreur: ' . $e->getMessage();
                    }
                } else {
                    echo "<div class='message'>
                      <p>Wrong email</p>
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
                <header>Login</header>
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
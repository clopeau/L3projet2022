<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReCo - Reconnaissance d'image en ligne </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="top-page">
        <header class="header">
            <img src="images/Logo.jpg" alt="Logo du site">
            <nav class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="chiens.php"> Chiens </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="fruits.php"> Fruits </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sport.php"> Sport </a>
                  </li>

            </nav>
        </header>
        <div class="landing-page">
            <h1 class="big-title"> Reconnaissance d'image </h1>

            <!-- Case d'ajout de photo -->
            <h2 class = "mini-title"> Quel est ce chien ?</h1>

            <div class = "formulaire">
              <form action = "index.php" method = "POST" enctype = "multipart/form-data">
                <label for="file">Soumettez votre image :</label>
                <br />
                <br />
                <input type="file" name="file">
                <button type="submit">Soumettre</button>
              </form>
            </div>
            <div class = "script">
              <?php
                $output = shell_exec("python script.py");
                echo '<br />';
                echo $output;
              ?>
            </div>

         </div>
    </section>

</body>
</html>

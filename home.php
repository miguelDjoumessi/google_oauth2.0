<?php 
require 'vendor/autoload.php'; 
session_start();
if(!isset($_SESSION['name'])) {
    header('Location: /login.php');
    exit();
}

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <title>Accueil</title>
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar">
        <div class="logo">E-Learn</div>
        <ul class="nav-links">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Cours</a></li>
            <li><a href="#">À propos</a></li>
        </ul>
    </nav>

    <!-- Section Hero -->
    <header class="hero">
        <div class="hero-content">
            <h1>Apprenez à votre rythme</h1>
            <p>Découvrez des cours en ligne conçus pour booster vos compétences.</p>
            <p>Nous sommes ravi de voir que tu nous a rejoint <strong><?= $_SESSION['name'] ?></strong>. clique sur le bouton pour commencer a etudier</p>
            <button class="cta-button">Commencer maintenant</button>
        </div>
    </header>

    <!-- Section Cours -->
    <section class="courses">
        <h2>Nos Cours Populaires</h2>
        <div class="course-grid">
            <div class="course-card">
                <h3>Développement Web</h3>
                <p>Maîtrisez HTML, CSS et JavaScript.</p>
            </div>
            <div class="course-card">
                <h3>Data Science</h3>
                <p>Apprenez Python et l'analyse de données.</p>
            </div>
            <div class="course-card">
                <h3>Design UI/UX</h3>
                <p>Créez des interfaces intuitives.</p>
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer class="footer">
        <p>&copy; 2025 E-Learn. Tous droits réservés.</p>
    </footer>
</body>
</html>
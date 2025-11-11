<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="text-primary">Formulaire d’ajout d’utilisateur</h2>
    <form method="post" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">Nom :</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email :</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
    </form>

<?php
if (isset($_POST['ajouter'])) {
    $nom   = $_POST['nom'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (nom, email) VALUES ('$nom', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success mt-3'>✅ Utilisateur ajouté avec succès.</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>❌ Erreur : " . mysqli_error($conn) . "</div>";
    }
}
?>
<a href="index.php" class="btn btn-secondary mt-3">⬅ Retour à l’accueil</a>
</body>
</html><?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="text-primary">Formulaire d’ajout d’utilisateur</h2>
    <form method="post" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">Nom :</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email :</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
    </form>

<?php
if (isset($_POST['ajouter'])) {
    $nom   = $_POST['nom'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (nom, email) VALUES ('$nom', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success mt-3'>✅ Utilisateur ajouté avec succès.</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>❌ Erreur : " . mysqli_error($conn) . "</div>";
    }
}
?>
<a href="index.php" class="btn btn-secondary mt-3">⬅ Retour à l’accueil</a>
</body>
</html>
[A[A[A[A[A[C echo "l'auteur est farah"







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #333;
        }
        header {
            background-color: #000;
            color: #fff;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 700;
        }
        .hero {
            position: relative;
            background: url('file-Ceya4qgZurepLa3CNJtVTy') no-repeat center center/cover;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }
        .hero h1 {
            font-size: 36px;
            margin: 0;
        }
        .hero p {
            font-size: 18px;
            margin: 10px 0;
        }
        .hero button {
            background-color: #ffc107;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
        }
        .features {
            padding: 50px;
            background-color: #111;
            color: #fff;
        }
        .features h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .features .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .card {
            background-color: #222;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card h3 {
            margin-bottom: 10px;
        }
        .card p {
            font-size: 14px;
        }
        .cta {
            text-align: center;
            margin: 30px 0;
        }
        .cta button {
            background-color: #ffc107;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">NAOS CRM</div>
    <nav>
        <a href="#">Accueil</a>
        <a href="#">A propos</a>
        <a href="#">Nos Solutions</a>
        <a href="#">Fonctionnalités</a>
        <a href="#">Tarifs</a>
        <a href="#">Contact</a>
    </nav>
</header>

<div class="hero">
    <div>
        <h1>Optez pour un logiciel CRM</h1>
        <p>Simple, complet et intuitif</p>
        <button>Voir la vidéo</button>
    </div>
</div>

<section class="features">
    <h2>Gestion de la relation client</h2>
    <div class="cards">
        <div class="card">
            <h3>Forces de Ventes</h3>
            <p>Organisez votre équipe commerciale.</p>
        </div>
        <div class="card">
            <h3>Marketing</h3>
            <p>Planifiez et mesurez vos campagnes.</p>
        </div>
        <div class="card">
            <h3>Gestion commerciale</h3>
            <p>Catalogues produits et commandes.</p>
        </div>
        <div class="card">
            <h3>Service Après-Vente</h3>
            <p>Traitez les réclamations rapidement.</p>
        </div>
        <div class="card">
            <h3>Aide à la décision</h3>
            <p>Visualisez vos données clés.</p>
        </div>
        <div class="card">
            <h3>Fonctionnalités avancées</h3>
            <p>Explorez nos solutions en détail.</p>
        </div>
    </div>
    <div class="cta">
        <button>Voir plus de détails</button>
    </div>
</section>
</body>
</html>
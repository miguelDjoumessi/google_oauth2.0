<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Boutique</title>
    <style>
        .shop-header {
            position: relative;
            height: 200px;
            background: url('https://via.placeholder.com/1200x200') no-repeat center/cover;
        }

        .shop-header .logo {
            position: absolute;
            bottom: -40px;
            left: 20px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: white;
            padding: 5px;
        }

        .shop-header .info {
            position: absolute;
            bottom: 10px;
            left: 120px;
            color: white;
        }

        .shop-header .follow-btn {
            position: absolute;
            bottom: 10px;
            right: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .tabs {
            display: flex;
            gap: 20px;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .tabs button {
            background: none;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        .tabs button.active {
            border-bottom: 2px solid #3498db;
            color: #3498db;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .product-card {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .product-card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product-card button {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="shop-header">
        <img class="logo" src="https://via.placeholder.com/80" alt="Logo Boutique">
        <div class="info">
            <h1>Boutique Tech</h1>
            <p>★★★★☆ (4.5) | Livraison : 2-3 jours</p>
        </div>
        <button class="follow-btn">Suivre</button>
    </div>

    <div class="tabs">
        <button class="active">Produits</button>
        <button>À propos</button>
        <button>Avis</button>
    </div>

    <div class="products-grid">
        <div class="product-card">
            <img src="https://via.placeholder.com/150" alt="Produit 1">
            <h3>Smartphone X</h3>
            <p>599 €</p>
            <button>Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/150" alt="Produit 2">
            <h3>Écouteurs Pro</h3>
            <p>99 €</p>
            <button>Ajouter au panier</button>
        </div>
    </div>
</body>
</html>
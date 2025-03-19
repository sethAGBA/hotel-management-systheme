<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtel Fara's Lama - Accueil</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #f6f9fc 0%, #edf2f7 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 90%;
        }

        h1 {
            color: #2d3748;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        p {
            color: #4a5568;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        nav {
            margin-top: 2rem;
        }

        ul {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        li a {
            display: inline-block;
            padding: 1rem 2rem;
            background: #4299e1;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        li a:hover {
            background: #3182ce;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
         .img-logo {
            width: 150px;
            height: 150px;
        height: auto;
        margin: 1rem 0;
        border: 1px solid transparent;
        border-radius: 50% ;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        animation: rotation 10s linear infinite;
        backface-visibility: hidden;
        transform-origin: center;
        will-change: transform;
    }
    
    @keyframes rotation {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
    
    .img-logo:hover {
        animation-duration: 2s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
        @media (max-width: 640px) {
            .container {
                padding: 1rem;
            }

            h1 {
                font-size: 2rem;
            }

            ul {
                flex-direction: column;
            }

            li a {
                display: block;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue à l'HÔTEL FARA'S LAMA</h1>
        <img src="{{ asset('images/logo.jpeg') }}" class="img-logo" alt="Hôtel Fara's Lama" className="img-logo" />
     
        <address>
          <p>BP: 12345</p>
          <p>Téléphone: +228 93 60 77 77 / 92 44 66 84 / 96 14 23 31</p>
          <p>Adresse: EN FACE DU CAMP MILITAIRE AMEYI KARA</p>
          <p>À côté du CEG LANDJA</p>
        </address>
        <p>Choisissez une option dans le menu pour commencer</p>
      
      </header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('user-information.create') }}">Formulaire Client</a></li>
                <li><a href="{{ route('hotel-form.create') }}">Formulaire Hôtel</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
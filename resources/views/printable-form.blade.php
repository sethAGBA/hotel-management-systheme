<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Police</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @media print {
            body {
                font-size: 12px;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fiche de Police</h1>
        <h3>Informations Personnelles</h3>
        <p>Nom: {{ $data['surname'] }}</p>
        <p>Prénoms: {{ $data['given_names'] }}</p>
        <p>Téléphone: {{ $data['phone'] }}</p>
        <p>Date de naissance: {{ $data['birth_date'] }}</p>
        <p>Lieu de naissance: {{ $data['birth_place'] }}</p>
        <p>Nationalité: {{ $data['nationality'] }}</p>
        <p>Profession: {{ $data['profession'] }}</p>
        <p>Domicile: {{ $data['address'] }}</p>

        <h3>Informations sur le Voyage</h3>
        <p>Motif du voyage: {{ $data['travel_motive'] }}</p>
        <p>Venant de: {{ $data['coming_from'] }}</p>
        <p>Allant à: {{ $data['going_to'] }}</p>

        <h3>Informations sur l'Hébergement</h3>
        <p>Type de chambre: {{ $data['room_type'] }}</p>
        <p>Prix de la chambre: {{ $data['room_price'] }} FCFA</p>
        <p>Nombre de jours: {{ $data['number_of_days'] }}</p>
        <p>Coût total: {{ $data['room_price'] * $data['number_of_days'] }} FCFA</p>

        <div class="no-print">
            <button onclick="window.print()">Imprimer</button>
            <a href="{{ route('home') }}">Retour à l'accueil</a>
        </div>
    </div>
</body>
</html>
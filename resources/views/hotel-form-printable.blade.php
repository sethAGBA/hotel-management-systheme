<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Police - Informations Hôtel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Styles de base */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #2d3748;
            background: #f7fafc;
            margin: 0;
            padding: 20px;
        }
    
        .printable-form {
            max-width: 210mm; /* Format A4 */
            margin: 0 auto;
            background: white;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }
    
        /* Style du logo */
        .img-logo {
            max-width: 150px;
            height: auto;
            margin: 0 auto 20px;
            display: block;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    
        /* Style de l'adresse */
        address {
            text-align: center;
            font-style: normal;
            margin-bottom: 30px;
            padding: 15px;
            border-bottom: 2px solid #e2e8f0;
            color: #4a5568;
        }
    
        address p {
            margin: 5px 0;
            font-size: 14px;
        }
    
        /* En-têtes */
        h2 {
            color: #1a365d;
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e2e8f0;
        }
    
        h3 {
            color: #2c5282;
            font-size: 18px;
            margin-top: 25px;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid #e2e8f0;
        }
    
        /* Informations */
        p {
            margin: 12px 0;
            font-size: 14px;
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 15px;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #edf2f7;
        }
    
        p::before {
            content: attr(data-label);
            font-weight: 600;
            color: #4a5568;
        }
    
        /* Boutons */
        .no-print {
            margin-top: 40px;
            display: flex;
            gap: 15px;
            justify-content: center;
        }
    
        button, a {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }
    
        button {
            background: #4299e1;
            color: white;
        }
    
        button:hover {
            background: #3182ce;
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    
        a {
            background: #edf2f7;
            color: #2d3748;
        }
    
        a:hover {
            background: #e2e8f0;
        }
    
        /* Styles d'impression */
        @media print {
            body {
                background: white;
                padding: 0;
                font-size: 12px;
            }
    
            .printable-form {
                box-shadow: none;
                padding: 20px;
                max-width: 100%;
                border-radius: 0;
            }
    
            .no-print {
                display: none;
            }
    
            h2 {
                font-size: 20px;
                margin-bottom: 20px;
            }
    
            h3 {
                font-size: 16px;
                margin-top: 15px;
            }
    
            p {
                font-size: 12px;
                gap: 10px;
                border-bottom: none;
            }
    
            .img-logo {
                max-width: 100px;
            }
    
            address {
                padding: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="printable-form">
        
        <img src="{{ asset('images/logo.jpeg') }}" class="img-logo" alt="Hôtel Fara's Lama" className="img-logo" />
     
        <address>
          <p data-label="BP :"> 12345</p>
          <p data-label="Téléphone : ">+228 93 60 77 77 / 92 44 66 84 / 96 14 23 31</p>
          <p data-label="Adresse : ">EN FACE DU CAMP MILITAIRE AMEYI KARA</p>
          <p data-label=" ">À côté du CEG LANDJA</p>
        </address>
    <h2>Fiche de Police</h2>
        <h3>Informations Personnelles</h3>
        {{-- <p>Nom: {{ $data['surname'] }}</p>
        <p>Prénoms: {{ $data['given_names'] }}</p>
        <p>Téléphone: {{ $data['phone'] }}</p> --}}
        <p data-label="Nom :">{{ $data['surname'] }}</p>
        <p data-label="Prénoms :">{{ $data['given_names'] }}</p>
        <p data-label="Téléphone :">{{ $data['phone'] }}</p>
        <!-- Continuez pour tous les champs -->
        <p data-label="Date de naissance :"> {{ $data['birth_date'] }}</p>
        <p data-label="Lieu de naissance : ">{{ $data['birth_place'] }}</p>
        <p data-label="Nationalité :"> {{ $data['nationality'] }}</p>
        <p data-label="Profession :"> {{ $data['profession'] }}</p>
        <p data-label="Domicile :"> {{ $data['address'] }}</p>

        <h3>Informations sur le Voyage</h3>
        <p data-label="Motif du voyage :"> {{ $data['travel_motive'] }}</p>
        <p data-label="Venant de : ">{{ $data['coming_from'] }}</p>
        <p data-label="Allant à : ">{{ $data['going_to'] }}</p>

        <h3>Informations sur l'Hébergement</h3>
        <p data-label="Chambre ou appartement :"> {{ $data['room_number'] }}</p>
        <p data-label="Date d'arrivée :"> {{ $data['arrival_date'] }}</p>
        <p data-label="Date de départ : ">{{ $data['departure_date'] }}</p>

        <h3>Informations sur les Pièces d'Identité</h3>
        <p data-label="Pièce d'identité N° : ">{{ $data['id_number'] }}</p>
        <p data-label="Délivré le : ">{{ $data['id_issued_on'] }}</p>
        <p data-label="À :"> {{ $data['id_issued_at'] }}</p>
        <p data-label="Visa N° :"> {{ $data['visa_number'] }}</p>
        <p data-label="Délivré le : ">{{ $data['visa_issued_on'] }}</p>
        <p data-label="À :"> {{ $data['visa_issued_at'] }}</p>

        <h3>Informations Supplémentaires</h3>
        <p data="Adresse de la personne à prévenir :"> {{ $data['emergency_contact'] }}</p>
        <p data-label="Signature :"> {{ $data['signature'] }}</p>
        <p data-label="Nom du réceptionniste : ">{{ $data['receptionist_name'] }}</p>

        <div class="no-print">
            <button onclick="window.print()">Imprimer</button>
            <a href="{{ route('home') }}">Retour à l'accueil</a>
        </div>
    </div>
</body>
</html>
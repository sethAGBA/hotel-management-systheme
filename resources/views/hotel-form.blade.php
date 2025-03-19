<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Hôtel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<meta name="theme-color" content="#4299e1">
<style>
    body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #f6f9fc 0%, #edf2f7 100%);
    margin: 0;
    padding: 30px;
    min-height: 100vh;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

h1 {
    color: #1a365d;
    text-align: center;
    margin-bottom: 40px;
    font-size: 2.5em;
    font-weight: 700;
}

h3 {
    color: #2d3748;
    margin-top: 35px;
    padding-bottom: 12px;
    border-bottom: 2px solid #e2e8f0;
    font-weight: 600;
}

form {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}

label {
    display: flex;
    flex-direction: column;
    gap: 8px;
    font-weight: 500;
    color: #4a5568;
}

input[type="text"],
input[type="date"],
select {
    padding: 12px 16px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 15px;
    transition: all 0.3s ease;
    background-color: #f8fafc;
}

input:focus,
select:focus {
    outline: none;
    border-color: #4299e1;
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.15);
    background-color: #ffffff;
}

button[type="submit"] {
    background: #4299e1;
    color: white;
    padding: 16px 32px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 30px;
    grid-column: 1 / -1;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

button[type="submit"]:hover {
    background: #3182ce;
    transform: translateY(-1px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

@media (max-width: 768px) {
    .container {
        padding: 20px;
    }
    
    form {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>
    <div class="container">
        <h1>Formulaire Hôtel</h1>
        <form action="{{ route('hotel-form.store') }}" method="POST">
            @csrf
            <h3>Informations Personnelles</h3>
            <label>
                Nom:
                <input type="text" name="surname" required>
            </label>
            <label>
                Prénoms:
                <input type="text" name="given_names" required>
            </label>
            <label>
                Téléphone:
                <input type="text" name="phone" required>
            </label>
            <label>
                Date de naissance:
                <input type="date" name="birth_date" required>
            </label>
            <label>
                Lieu de naissance:
                <input type="text" name="birth_place" required>
            </label>
            <label>
                Nationalité:
                <input type="text" name="nationality" required>
            </label>
            <label>
                Profession:
                <input type="text" name="profession" required>
            </label>
            <label>
                Domicile:
                <input type="text" name="address" required>
            </label>

            <h3>Informations sur le Voyage</h3>
            <label>
                Motif du voyage:
                <input type="text" name="travel_motive" required>
            </label>
            <label>
                Venant de:
                <input type="text" name="coming_from" required>
            </label>
            <label>
                Allant à:
                <input type="text" name="going_to" required>
            </label>

            <h3>Informations sur l'Hébergement</h3>
            <label>
                Numéro de chambre:
                <input type="text" name="room_number" required>
            </label>
            <label>
                Date d'arrivée:
                <input type="date" name="arrival_date" required>
            </label>
            <label>
                Date de départ:
                <input type="date" name="departure_date" required>
            </label>

            <h3>Informations sur les Pièces d'Identité</h3>
            <label>
                Pièce d'identité N°:
                <input type="text" name="id_number" required>
            </label>
            <label>
                Délivré le:
                <input type="date" name="id_issued_on" required>
            </label>
            <label>
                À:
                <input type="text" name="id_issued_at" required>
            </label>
            <label>
                Visa N°:
                <input type="text" name="visa_number">
            </label>
            <label>
                Délivré le:
                <input type="date" name="visa_issued_on">
            </label>
            <label>
                À:
                <input type="text" name="visa_issued_at">
            </label>

            <h3>Informations Supplémentaires</h3>
            <label>
                Personne à prévenir:
                <input type="text" name="emergency_contact" required>
            </label>
            <label>
                Signature:
                <input type="text" name="signature" required>
            </label>
            <label>
                Nom du réceptionniste:
                <input type="text" name="receptionist_name" required>
            </label>

            <button type="submit">Soumettre</button>
        </form>
    </div>
</body>
</html>
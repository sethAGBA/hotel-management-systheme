

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Client</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script>
        function updateRoomPrices() {
            const roomType = document.querySelector('select[name="room_type"]').value;
            const roomPriceSelect = document.querySelector('select[name="room_price"]');

            // Réinitialiser les options
            roomPriceSelect.innerHTML = '';

            // Ajouter les options en fonction du type de chambre
            if (roomType === 'ventilée') {
                roomPriceSelect.innerHTML = `
                    <option value="5000">5000 FCFA</option>
                    <option value="10000">10000 FCFA</option>
                    <option value="15000">15000 FCFA</option>
                `;
            } else if (roomType === 'climatisée') {
                roomPriceSelect.innerHTML = `
                    <option value="10000">10000 FCFA</option>
                    <option value="15000">15000 FCFA</option>
                `;
            }
        }

        // Mettre à jour les prix au chargement de la page
        document.addEventListener('DOMContentLoaded', updateRoomPrices);
    </script>
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #2c3e50;
    text-align: center;
    margin-bottom: 30px;
    font-size: 2.5em;
}

h3 {
    color: #34495e;
    margin-top: 25px;
    padding-bottom: 10px;
    border-bottom: 2px solid #eee;
}

form {
    display: grid;
    gap: 20px;
}

label {
    display: flex;
    flex-direction: column;
    gap: 8px;
    font-weight: 500;
    color: #444;
}

input, select {
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

input:focus, select:focus {
    outline: none;
    border-color: #3498db;
}

button[type="submit"] {
    background: #3498db;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease;
    margin-top: 20px;
    width: 100%;
}

button[type="submit"]:hover {
    background: #2980b9;
}

#total-cost {
    font-size: 1.2em;
    font-weight: 600;
    color: #2ecc71;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulaire Client</h1>
        <form action="{{ route('user-information.store') }}" method="POST">
            @csrf
         
            <!-- ... (autres champs du formulaire) ... -->
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
            <h3>Informations sur l'Hébergement</h3>
            <label>
                Type de chambre:
                <select name="room_type" onchange="updateRoomPrices()" required>
                    <option value="ventilée">Ventilée</option>
                    <option value="climatisée">Climatisée</option>
                </select>
            </label>

            <label>
                Prix de la chambre:
                <select name="room_price" required>
                    <!-- Les options seront mises à jour dynamiquement -->
                </select>
            </label>

            <label>
                Nombre de jours:
                <input type="number" name="number_of_days" min="1" required>
            </label>

            <label>
                Coût total: <span id="total-cost">0</span> FCFA
            </label>

            <button type="submit">Soumettre</button>
        </form>
    </div>

    <script>
        // Calculer le coût total en temps réel
        const roomPriceSelect = document.querySelector('select[name="room_price"]');
        const numberOfDaysInput = document.querySelector('input[name="number_of_days"]');
        const totalCostSpan = document.getElementById('total-cost');

        function calculateTotalCost() {
            const roomPrice = parseFloat(roomPriceSelect.value);
            const numberOfDays = parseFloat(numberOfDaysInput.value);
            const totalCost = roomPrice * numberOfDays;
            totalCostSpan.textContent = totalCost.toFixed(2);
        }

        roomPriceSelect.addEventListener('change', calculateTotalCost);
        numberOfDaysInput.addEventListener('input', calculateTotalCost);
    </script>
</body>
</html>
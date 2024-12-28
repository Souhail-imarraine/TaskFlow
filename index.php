<?php
require_once 'config/Database.php';

 // Create a new instance of the Database class;
 $database = new Database(); 
 $db = $database->getConnection(); 

 if ($db) {
     echo "Connected to the database successfully!";
} else {
     echo "Failed to connect to the database.";
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Tâches - TaskFlow</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold mb-8 text-center text-blue-600">Gestion des Tâches</h1>

        <!-- Liste des Tâches -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold mb-6 text-blue-600">Liste des Tâches</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                    <h3 class="font-semibold text-lg mb-2">Tâche 1</h3>
                    <p class="text-gray-600 mb-2">Description de la tâche 1</p>
                    <p class="text-sm text-gray-500 mb-4">Statut: En attente</p>
                    <div class="flex justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier</button>
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                    </div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                    <h3 class="font-semibold text-lg mb-2">Tâche 2</h3>
                    <p class="text-gray-600 mb-2">Description de la tâche 2</p>
                    <p class="text-sm text-gray-500 mb-4">Statut: En cours</p>
                    <div class="flex justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier</button>
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                    </div>
                </div>
                <!-- Ajoutez plus de tâches ici -->
            </div>
        </div>

        <!-- Formulaire de Création de Tâche -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-6 text-blue-600">Créer une Nouvelle Tâche</h2>
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Titre de la Tâche:</label>
                    <input type="text" id="title" name="title"
                        class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                    <textarea id="description" name="description"
                        class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required></textarea>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 font-bold mb-2">Statut:</label>
                    <select id="status" name="status"
                        class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="pending">En attente</option>
                        <option value="in_progress">En cours</option>
                        <option value="completed">Terminé</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="assigned_user" class="block text-gray-700 font-bold mb-2">Attribué à:</label>
                    <input type="text" id="assigned_user" name="assigned_user"
                        class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline">Créer</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
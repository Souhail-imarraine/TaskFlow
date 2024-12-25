<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Tableau de Bord</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-800 shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">Tâches Totales</h2>
                <p class="text-gray-400">Nombre de tâches: 10</p>
            </div>
            <div class="bg-gray-800 shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">Tâches Complétées</h2>
                <p class="text-gray-400">Nombre de tâches complétées: 5</p>
            </div>
            <div class="bg-gray-800 shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">Tâches en Cours</h2>
                <p class="text-gray-400">Nombre de tâches en cours: 3</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-5">Créer une Nouvelle Tâche</h2>
        <div class="bg-gray-800 shadow-md rounded-lg p-6">
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="title" class="block text-gray-400 font-bold mb-2">Titre de la Tâche:</label>
                    <input type="text" id="title" name="title"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-400 font-bold mb-2">Description:</label>
                    <textarea id="description" name="description"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required></textarea>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-400 font-bold mb-2">Statut:</label>
                    <select id="status" name="status"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="pending">En attente</option>
                        <option value="in_progress">En cours</option>
                        <option value="completed">Terminé</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="assigned_user" class="block text-gray-400 font-bold mb-2">Attribué à:</label>
                    <input type="text" id="assigned_user" name="assigned_user"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Liste des Tâches</h1>
        <div class="bg-gray-800 shadow-md rounded-lg p-6">
            <ul>
                <li class="border-b border-gray-700 py-2 flex justify-between items-center">
                    <div>
                        <span class="font-semibold">Tâche 1</span>
                        <span class="text-gray-400"> - Description de la tâche 1</span>
                    </div>
                    <div>
                        <button
                            class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-1 px-3 rounded">Modifier</button>
                        <button
                            class="bg-red-600 hover:bg-red-800 text-white font-bold py-1 px-3 rounded">Supprimer</button>
                    </div>
                </li>
                <li class="border-b border-gray-700 py-2 flex justify-between items-center">
                    <div>
                        <span class="font-semibold">Tâche 2</span>
                        <span class="text-gray-400"> - Description de la tâche 2</span>
                    </div>
                    <div>
                        <button
                            class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-1 px-3 rounded">Modifier</button>
                        <button
                            class="bg-red-600 hover:bg-red-800 text-white font-bold py-1 px-3 rounded">Supprimer</button>
                    </div>
                </li>
                <!-- Ajoutez plus de tâches ici -->
            </ul>
        </div>
    </div>


    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-5">Détails de la Tâche</h2>
        <div class="bg-gray-800 shadow-md rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-2">Titre de la Tâche</h3>
            <p class="text-gray-400 mb-4">Description de la tâche en détail.</p>
            <p class="text-gray-400 mb-4"><strong>Statut:</strong> En cours</p>
            <p class="text-gray-400 mb-4"><strong>Attribué à:</strong> Nom de l'utilisateur</p>
            <div class="flex items-center justify-between">
                <button
                    class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Modifier</button>
                <button
                    class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Supprimer</button>
            </div>
        </div>
    </div>
</body>

</html>
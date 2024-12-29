<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Board</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-screen flex-col md:flex-row">
 <aside class="bg-gradient-to-b from-gray-800 to-gray-600 text-white w-full md:w-64 p-4 shadow-lg">
            <div class="flex items-center space-x-2 mb-6">
                <div class="w-8 h-8 bg-gray-700 rounded-full"></div>
                <span class="text-lg font-semibold">Teams in Space</span>
            </div>
            <nav class="space-y-2">
            <a href="index.php" class="flex items-center space-x-3 text-gray-400 hover:text-white">
                    <span>📋</span>
                    <span>Tasks</span>
                </a>
                <a href="addTask.php" class="flex items-center space-x-3 text-white font-semibold">
                    <span>➕</span>
                    <span>Ajouter Task</span>
                </a>
                <a href="#" class="flex items-center space-x-3 text-gray-400 hover:text-white">
                    <span>⚙️</span>
                    <span>Settings</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            <header class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Gestion les tache</h1>
                <a href="logout.php"><button class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700">Deconnection</button></a>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Column: To Do -->
                <div class="bg-white rounded shadow p-4">
                    <h2 class="font-semibold text-lg border-b pb-2 mb-4">To Do</h2>
                    <div class="space-y-3">
                        <div class="p-4 bg-gray-50 rounded border shadow-sm">
                            <p>Engage Jupiter Express for outer solar system travel</p>
                            <span class="text-xs text-yellow-600">SPACE TRAVEL PARTNERS</span>
                        </div>
                        <div class="p-4 bg-gray-50 rounded border shadow-sm">
                            <p>Create 90-day plans for all departments in the Mars Office</p>
                            <span class="text-xs text-red-600">LOCAL MARS OFFICE</span>
                        </div>
                    </div>
                </div>

                <!-- Column: In Progress -->
                <div class="bg-white rounded shadow p-4">
                    <h2 class="font-semibold text-lg border-b pb-2 mb-4">In Progress</h2>
                    <div class="space-y-3">
                        <div class="p-4 bg-gray-50 rounded border shadow-sm">
                            <p>Requesting available flights is now taking > 5 seconds</p>
                            <span class="text-xs text-green-600">SESPACEEZ PLUS</span>
                        </div>
                        <div class="p-4 bg-gray-50 rounded border shadow-sm">
                            <p>Engage Saturn Shuttle Lines for group tours</p>
                            <span class="text-xs text-yellow-600">SPACE TRAVEL PARTNERS</span>
                        </div>
                    </div>
                </div>

                <!-- Column: Done -->
                <div class="bg-white rounded shadow p-4">
                    <h2 class="font-semibold text-lg border-b pb-2 mb-4">Done</h2>
                    <div class="space-y-3">
                        <div class="p-4 bg-gray-50 rounded border shadow-sm">
                            <p>Homepage footer uses an inline style</p>
                            <span class="text-xs text-purple-600">LARGE TEAM SUPPORT</span>
                        </div>
                        <div class="p-4 bg-gray-50 rounded border shadow-sm">
                            <p>Engage JetShuttle SpaceWays for travel</p>
                            <span class="text-xs text-yellow-600">SPACE TRAVEL PARTNERS</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
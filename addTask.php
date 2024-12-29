<?php
require_once 'config/database.php';
require_once 'classes/task.php';
session_start();

$db = new Database();
$pdo = $db->getConnection();
$tasks = new Task($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['createTask'])) {
    $nameTask = $_POST['task-name'];
    $typeTask = $_POST['typeTask'];
    $taskStatus = $_POST['taskStatus'];
    $userId = $_SESSION['user_id'];

    $createTask = $tasks->createTask($nameTask, $taskStatus, $typeTask, $userId);
    if ($createTask) {
        header('Location: index.php');
        exit();
    } else {
        $errors = $tasks->getError();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
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
        <main class="flex-1 p-8 overflow-y-auto">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-extrabold text-gray-800">Ajouter Task</h1>
            </header>

            <div class="bg-white p-8 rounded-lg shadow-md mx-auto">
                <h2 class="text-xl font-semibold text-gray-700 mb-6">Créer une Nouvelle Tâche</h2>
                <?php 
                if (!empty($errors)) : 
                    foreach ($errors as $error) :
                ?>
                <p style='color:red;'><?php echo $error ?></p>
                <?php 
                    endforeach; 
                endif; 
                ?>
                <form class="space-y-8" method="post">
                    <!-- Task Name -->
                    <div>
                        <label for="task-name" class="block text-sm font-medium text-gray-600">Nom de la tâche</label>
                        <input type="text" id="task-name" name="task-name"
                            class="w-full p-4 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            placeholder="Entrez le nom de la tâche" required>
                    </div>
                    <!-- Task Type -->
                    <div>
                        <label for="task-type" class="block text-sm font-medium text-gray-600">Type de Tâche</label>
                        <select id="task-type" name="typeTask"
                            class="w-full p-4 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            required>
                            <option value="task">Tâche</option>
                            <option value="bug">Bug</option>
                            <option value="feature">feature</option>
                        </select>
                    </div>

                    <!-- Task Status -->
                    <div>
                        <label for="task-status" class="block text-sm font-medium text-gray-600">Statut de la
                            Tâche</label>
                        <select id="task-status" name="taskStatus"
                            class="w-full p-4 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            required>
                            <option value="pending">pending</option>
                            <option value="in_progress">in progress</option>
                            <option value="completed">completed</option>
                        </select>
                    </div>



                    <!-- Submit Button -->
                    <div class="text-right">
                        <button type="submit" name="createTask"
                            class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-600 focus:ring-2 focus:ring-blue-400 focus:outline-none">Créer
                            la Tâche</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
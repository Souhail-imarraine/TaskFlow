<?php
require_once 'config/database.php'; 
require_once 'classes/user.php';

$db = new Database(); 
$pdo = $db->getConnection();

$user = new User($pdo);
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
     $name = $_POST['nom']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $register  = $user->register($name, $email, $password);

    if ($register) { 
        header("Location: login.php");
    }else {
        $errors = $user->getError();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
        <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Create an Account</h1>
        <?php 
        if(!empty($errors)) : 
        foreach($errors as $error):
        ?>
        <p style='color:red;'><?php echo $error ?></p>
        <?php endforeach; ?>
        <?php endif; ?>
        <form method="POST">
            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" id="name" name="nom"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Enter your name" required>
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Enter your email" required>
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                    placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                Register
            </button>
        </form>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-gray-600 text-sm">Already have an account?
                <a href="login.php" class="text-blue-600 hover:underline">Login</a>
            </p>
        </div>
    </div>

</body>

</html>
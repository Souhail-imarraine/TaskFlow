<?php
class User {
    public $id;
    public $nom;
    public $email;
    private $conn;
    private $password;
    private $table_name = "users";
    public $errors = [];

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Getter for errors
    public function getError() {
        return $this->errors;
    }
    
    // Register method
    public function register($name, $email, $pass) {
        // Validate input
        if (empty($name) || empty($email) || empty($pass)) {
            array_push($this->errors, "All fields are required");
            return false;
        }

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errors, "Email address is not valid");
            return false;
        }

        // Validate password
        if (strlen($name) < 3) {
            array_push($this->errors, "le nom doit contenir au moins 3 caractères");
            return false;
        }
        if (strlen($pass) < 6) {
            array_push($this->errors, "Le mot de passe doit contenir au moins 6 caractères");
            return false;
        }

        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $pass = htmlspecialchars($pass);

        $pass = password_hash($pass, PASSWORD_BCRYPT);

        try {
            $query = "INSERT INTO " . $this->table_name . " (name, email, password) VALUES (?,?,?)";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$name, $email, $pass])) {
                return true;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion: " . $e->getMessage();
        }
        return false;
    }


    public function login($email, $pass){
        if (empty($email) || empty($pass)) {
            array_push($this->errors, "All fields are required");
            return false;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errors, "Email address is not valid");
            return false;
        }

        if (strlen($pass) < 6) {
            array_push($this->errors, "Le mot de passe doit contenir au moins 6 caractères");
            return false;
        }

        
        if(empty($errors)){
            $query = "SELECT * FROM ". $this->table_name . " WHERE email = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$email]);
            $userExists = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$userExists){
                array_push($this->errors, "this email Not Found");
                return false ;
            }else {
                if(password_verify($pass, $userExists['password'])){
                    $_SESSION['login'] = true ;
                    $_SESSION['user_id'] = $userExists['id'];
                    $_SESSION['name'] = $userExists['name'];
                    $_SESSION['success_message'] = "You have successfully signed in.";
                    return true ;
                }else {
                    array_push($this->errors, "Invalid password");
                    return false;
                }
            }
        }

    }
}

?>
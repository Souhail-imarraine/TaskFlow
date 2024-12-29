<?php
class Task {
    private $table_name = "tasks";
    private $user_id;
    public $title;
    public $status;
    public $type;

    public $errors = [];
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getError() {
        return $this->errors;
    }

    public function createTask($title, $status, $type, $user_id) {
        
        // Validate input
        $validStatus = ['pending', 'in_progress', 'completed'];
        $validType = ['task', 'bug', 'feature'];
    
        if (empty($title) || !in_array($status, $validStatus) || !in_array($type, $validType)) {
            array_push($this->errors, "Invalid input values. Please check the task type and status");
            return false;
        }
    
        // Sanitize inputs
        $this->title = htmlspecialchars($title);
        $this->status = htmlspecialchars($status); 
        $this->type = htmlspecialchars($type);     
        $this->user_id = htmlspecialchars($user_id);
    
        try {
            $query = "INSERT INTO " . $this->table_name . " (title, status, type, user_id) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$this->title, $this->status, $this->type, $this->user_id])) {
                $_SESSION['success_message'] = "Task added successfully";
                return true;
            }
        } catch (PDOException $e) {
            array_push($this->errors, "Error during insertion: " . $e->getMessage());
        }
        return false;
    }


    public function afficherTasks($user_id){
        $query = "SELECT * FROM ". $this->table_name . " WHERE user_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO:: FETCH_ASSOC);
    }
    
}

?>
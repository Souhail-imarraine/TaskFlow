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
        if (empty($title) || empty($status) || empty($type)) {
            array_push($this->errors, "All fields are required");
            return false;
        }

        $this->title = htmlspecialchars($title);
        $this->status = htmlspecialchars($status);
        $this->type = htmlspecialchars($type);
        $this->user_id = htmlspecialchars($user_id);

        try {
            $query = "INSERT INTO " . $this->table_name . " (title, status, type, user_id) VALUES (?,?,?,?)";
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
}
?>

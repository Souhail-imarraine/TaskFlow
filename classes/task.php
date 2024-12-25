<?php
class Task {
    private $id;
    private $title;
    private $description;
    private $status;
    private $assignedUser;

    public function __construct($title, $description, $status, $assignedUser) {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->assignedUser = $assignedUser;
    }

    // Getters et Setters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getAssignedUser() {
        return $this->assignedUser;
    }

    public function setAssignedUser($assignedUser) {
        $this->assignedUser = $assignedUser;
    }
}
?>

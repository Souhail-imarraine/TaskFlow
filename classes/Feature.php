<?php
class Feature extends Task {
    private $priority;

    public function __construct($title, $description, $status, $assignedUser, $priority) {
        parent::__construct($title, $description, $status, $assignedUser);
        $this->priority = $priority;
    }

    public function getPriority() {
        return $this->priority;
    }

    public function setPriority($priority) {
        $this->priority = $priority;
    }
}
?>

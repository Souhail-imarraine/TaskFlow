<?php
class Bug extends Task {
    private $severity;

    public function __construct($title, $description, $status, $assignedUser, $severity) {
        parent::__construct($title, $description, $status, $assignedUser);
        $this->severity = $severity;
    }

    public function getSeverity() {
        return $this->severity;
    }

    public function setSeverity($severity) {
        $this->severity = $severity;
    }
}
?>

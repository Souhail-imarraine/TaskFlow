<?php
require_once 'classes/task.php';

class feature extends task {
    public function __construct($conn)
    {
        parent::__construct($conn);
        $this->status = 'feature';
    }
    
}

?>

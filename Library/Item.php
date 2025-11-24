<?php
class Item {
    public $title;
    public $publisher;
    public $isAvailable;

    public function __construct($title, $publisher) {
        $this->title = $title;
        $this->publisher = $publisher;
        $this->isAvailable = true;
    }

    public function borrowItem() {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            echo "The item '{$this->title}' has been successfully borrowed.\n";
        } else {
            echo "Sorry, the item '{$this->title}' is currently not available.\n";
        }
    }

    public function returnItem() {
        $this->isAvailable = true;
        echo "Thank you! The item '{$this->title}' has been returned to the library.\n";
    }

    public function displayDetails() {
        $status = $this->isAvailable ? "Available" : "Currently Borrowed";
        echo "Title: {$this->title}\n";
        echo "Publisher: {$this->publisher}\n";
        echo "Status: $status\n";
    }
}
?>

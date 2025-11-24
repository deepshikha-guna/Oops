<?php
class Member {
    public $name;
    public $memberId;
    public $borrowedItems = [];

    public function __construct($name, $memberId) {
        $this->name = $name;
        $this->memberId = $memberId;
    }

    public function borrowItem($item) {
        if ($item->isAvailable) {
            $item->borrowItem();
            $this->borrowedItems[] = $item;
        } else {
            echo "{$this->name}, the item '{$item->title}' is not available to borrow.\n";
        }
    }

    public function returnItem($item) {
        foreach ($this->borrowedItems as $key => $borrowed) {
            if ($borrowed === $item) {
                $item->returnItem();
                unset($this->borrowedItems[$key]);
                return;
            }
        }
        echo "{$this->name} did not borrow '{$item->title}', so it cannot be returned.\n";
    }

    public function displayMemberDetails() {
        echo "Member Name: {$this->name}\n";
        echo "Member ID: {$this->memberId}\n";
        echo "Borrowed Items:\n";

        if (empty($this->borrowedItems)) {
            echo "- No items are currently borrowed.\n";
        } else {
            foreach ($this->borrowedItems as $item) {
                echo "- {$item->title}\n";
            }
        }
    }
}
?>

<?php
class Library {
    public $items = [];
    public $members = [];
    public $libraryName = "The Trident Academy Library";

    public function addItem($item) {
        $this->items[] = $item;
        echo "The item '{$item->title}' has been added to {$this->libraryName}.\n";
    }

    public function removeItem($title) {
        foreach ($this->items as $key => $item) {
            if ($item->title === $title) {
                unset($this->items[$key]);
                echo "The item '$title' has been removed from the library collection.\n";
                return;
            }
        }
        echo "The item '$title' was not found in the library.\n";
    }

    public function addMember($member) {
        $this->members[] = $member;
        echo "A new member '{$member->name}' has joined {$this->libraryName}.\n";
    }

    public function removeMember($memberId) {
        foreach ($this->members as $key => $member) {
            if ($member->memberId === $memberId) {
                unset($this->members[$key]);
                echo "Member with ID $memberId has been removed.\n";
                return;
            }
        }
        echo "Member with ID $memberId not found.\n";
    }
}
?>

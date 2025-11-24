<?php
class PhotoBook {
    private $numberOfPages;

    public function __construct($pages = 16) {
        $this->numberOfPages = $pages;
    }

    public function GetNumberPages() {
        return $this->numberOfPages;
    }
}


class BigPhotoBook extends PhotoBook {
    
    public function __construct() {
        parent::__construct(64); 
    }
}

class PhotoBookTest {

    public function main() {
        

        $normalPhotoBook = new PhotoBook();
        echo "\nOrange Studio's Normal Photobook has " . $normalPhotoBook->GetNumberPages() . " number of pages" . "\n";

        $customPhotoBook = new PhotoBook(24);
        echo "Orange Studio's Custom Photobook has " . $customPhotoBook->GetNumberPages() . " number of pages" . "\n";

        $bigBook = new BigPhotoBook();
        echo "Orange Studio's Big Photobook has " . $bigBook->GetNumberPages() . " number of pages" . "\n";
    }
}

echo "\nWelcome to Orange Studios";
echo "\nHere are our PhotoBook details";
$orangeCustomer = new PhotoBookTest();
$orangeCustomer->main();

?>

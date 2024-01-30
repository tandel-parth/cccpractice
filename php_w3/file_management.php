<?php
class File {
    public $filename;
    public $size;

    public function __construct($filename, $size){
        $this->filename = $filename;
        $this->size = $size;
    }

    public function getFileExtension() {
        $part = explode(".", $this->filename);
        echo "File Extension: " . end($part);
    }

    public function displayFileInfo() {
        echo "Filename: $this->filename, Size: $this->size KB";
    }
}

// Example Usage:
$file = new File("document.txt",1024);
$file1 = new File("index.php",1024);

$file->getFileExtension();
echo "<br>";
$file->displayFileInfo();
echo "<br>";
$file1->getFileExtension();
echo "<br>";
$file1->displayFileInfo();
?>
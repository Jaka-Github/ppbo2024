<?php
class Author 
{
    public $name,
           $description; 

    public function __construct($name, $description) {
    $this->name = $name;
    $this->description = $description;
    }


    public function show(string $type) : void {
      if ($type == 'name') {
          echo "Author Names:\n";
          foreach ($this->name as $name) {
              echo "- " . $name . "\n";
          }
      } elseif ($type == 'description') {
          echo "Author Descriptions:\n";
          foreach ($this->description as $description) {
              echo "- " . $description . "\n";
          }
      } else {
          echo "Type '$type' not recognized.\n";
      }
  }

}
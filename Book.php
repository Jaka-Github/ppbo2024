<?php
class Book {

    public $ISBN, $title, $description, $category, $language, $numberOfPage, $author,
           $publisher;
           
    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
    $this->ISBN = $ISBN;
    $this->title = $title;
    $this->description = $description;
    $this->category = $category;
    $this->language = $language;
    $this->numberOfPage = $numberOfPage;
    $this->author = $author;
    $this->publisher = $publisher;
    }


    public function showall() : array {
      return [
          'ISBN' => $this->ISBN,
          'Title' => $this->title,
          'Description' => $this->description,
          'Category' => $this->category,
          'Language' => $this->language,
          'Number of Pages' => $this->numberOfPage,
          'Author' => $this->author,
          'Publisher' => $this->publisher,
      ];
  }    

    public static function detail($books, $ISBN) : array {
      foreach ($books as $book) {
          if ($book->ISBN == $ISBN) {
              return $book->showall(); 
          }
      }
      return ['error' => 'Book not found.']; 
  }
}
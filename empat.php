<?php 
$names = ["Masamu" , "Jole Corn" ];
$descriptions = [
    "The author of best action comics.",
    "Best Storytelling book.",
];

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
    
 $author = new Author($names, $descriptions);
 $author->show('name');
 echo "\n";
 $author->show('description') . "\n";



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
$book1 = new Book("345429902", "Tokyo Slimb", "Young Boy had a mission to slaughter all ..","Action Comic","English" ,"500",
                  "masamu","Elek media");
$book2 = new Book("123421098" , "Inside Outside" , "Revealing Blank Age and it's secrets", "History", "Indonesian TL","710",
                  "Jole Corn", "Gramedia" );

$books = [$book1, $book2];


print_r($book1->showall());
echo "\n\n";

print_r($book2->showall());
echo "\n\n";

print_r(Book::detail($books, "123421098"));
echo "\n\n";






class Publisher
{
    
    private $phone;
    public $publisher;

    public function __construct(string $publisher) {
      $this->publisher = $publisher;
  }
    
    public function setPhone(int $phone) : void {
        $this->phone = $phone;
    }

    public function getPhone() : int {
        return $this->phone;
    }

    public function getPublisher() : string {
        return $this->publisher;
    }
}

$publisher1 = new Publisher("Elek media");
$publisher1->setPhone(1234567890);
echo "Publisher :" . $publisher1->getPublisher() . "\n";
echo "Nomor Telepon: " . $publisher1->getPhone();

?>

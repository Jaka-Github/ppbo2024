<?php 
$names = ["Masamu" , "Jole Corn" ];
$descriptions = [
    "The author of best action comics.",
    "Best Storytelling book.",
];

require_once "Author.php";
    
 $author = new Author($names, $descriptions);
 $author->show('name');
 echo "\n";
 $author->show('description') . "\n";


require_once "Book.php";

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






require_once "Publisher.php";

$publisher1 = new Publisher("Elek media");
$publisher1->setPhone(1234567890);
echo "Publisher :" . $publisher1->getPublisher() . "\n";
echo "Nomor Telepon: " . $publisher1->getPhone();

?>

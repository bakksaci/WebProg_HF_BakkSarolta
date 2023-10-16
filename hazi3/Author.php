<?php


class Author
{
    public string $name;
    public $books = [];

    // TODO Generate getters and setters of properties
    
     /**
     * Get the name of the author.
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * Set the name of the author.
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the books written by the author.
     * @return array
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    /**
     * Set the books written by the author.
     * @param array $books
     */
    public function setBooks(array $books)
    {
        $this->books = $books;
    }

 // TODO Generate constructor for all attributes. $books argument of the constructor can be optional
 
 /**
     * Author constructor.
     * @param string $name
     * @param array $books (optional)
     */
    public function __construct(string $name, array $books = [])
    {
        $this->name = $name;
        $this->books = $books;
    }


    /**
     * @param string $title
     * @param float  $price
     * @return \Book
     */
    public function addBook(string $title, float $price): Book
    {
        // TODO Create instance of the book. Add into $books array and return it
        $book = new Book($title, $price);
        $this->books[] = $book;
        return $book;
    }
}

?>
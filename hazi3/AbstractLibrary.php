<?php


abstract class AbstractLibrary
{
    /**
     * @var Author[]
     */
    private $authors = [];


     public function getAuthors()
    {
        return $this->authors;
    }
    
    public function setAuthors($authors)
    {
        $this->authors = $authors;
    }
    /**
     * @param string $authorName
     * @return Author
     */

    
    abstract public function addAuthor(string $authorName): Author;

    /**
     * @param      $authorName
     * @param Book $book
     */

     abstract public function addBookForAuthor($authorName, Book $book);
     /**
     * @param $authorName
     */

     abstract public function getBooksForAuthor($authorName);
   
     /**
         * @param string $bookName
         * @return Book
         */

         abstract public function search(string $bookName): Book;

    
   
    abstract public function print();
    private function findAuthorByName($authorName)
    {
        foreach ($this->authors as $author) {
            if ($author->getName() === $authorName) {
                return $author;
            }
        }
        return null;
    }
}

?>
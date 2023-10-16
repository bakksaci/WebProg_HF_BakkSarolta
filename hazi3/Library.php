<?php
require_once "AbstractLibrary.php";

class Library extends AbstractLibrary
{
    // TODO Implement all the methods declared in AbstractLibrary class

    
        /**
         * @param string $authorName
         * @return Author
         */
        public function addAuthor(string $authorName): Author
        {
            $author = new Author($authorName);
            $this->authors[] = $author;
            return $author;
        }
    
        /**
         * @param string $authorName
         * @param Book $book
         */
        public function addBookForAuthor(string $authorName, Book $book)
        {
            $author = $this->findAuthorByName($authorName);
            if ($author !== null) {
                $author->addBook($book->title, $book->price);
                $book->setAuthor($author);
            }
        }
    
        /**
         * @param string $authorName
         * @return Book[]
         */
        public function getBooksForAuthor(string $authorName): array
        {
            $author = $this->findAuthorByName($authorName);
            return $author ? $author->getBooks() : [];
        }
    
        /**
         * @param string $bookName
         * @return Book|null
         */
        public function search(string $bookName): ?Book
        {
            foreach ($this->authors as $author) {
                foreach ($author->getBooks() as $book) {
                    if ($book->title === $bookName) {
                        return $book;
                    }
                }
            }
            return null;
        }
    
    
        public function print()
        {
            foreach ($this->authors as $author) {
                echo $author->getName() . "\n--------------------\n";
                foreach ($author->getBooks() as $book) {
                    echo $book->title . " - " . $book->price . "\n";
                }
                echo "\n";
            }
        }
    
        private function findAuthorByName(string $authorName): ?Author
        {
            foreach ($this->authors as $author) {
                if ($author->getName() === $authorName) {
                    return $author;
                }
            }
            return null;
        }
    
}
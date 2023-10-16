<?php


class Book
{
    public string $title;
    public float $price;
    public Author $author;

    // TODO Generate getters and setters of properties

    
    /**
     * Get the title of the book.
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the title of the book.
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get the price of the book.
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the price of the book.
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    /**
     * Get the author of the book.
     * @return Author|null
     */
    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    /**
     * Set the author of the book.
     * @param Author|null $author
     */
    public function setAuthor(?Author $author)
    {
        $this->author = $author;
    }


    // TODO Generate constructor for all attributes. $author argument of the constructor can be optional

    /**
     * Book constructor.
     * @param string $title
     * @param float $price
     * @param Author|null $author (optional)
     */
    public function __construct(string $title, float $price, ?Author $author = null)
    {
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
    }
}
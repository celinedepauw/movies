<?php

namespace Movies\Models;
use Movies\Utils\Database;
use PDO;

class Category
{
    private $id;
    private $category_number;
    private $category_name;
    private $category_picture;

    public function find($id)
    {
        $pdo = Database::getPDO();

        $sql = "
        SELECT
            *
        FROM `category`
        WHERE id={$id}
    ;";

        $statement = $pdo->query($sql);

        $category = $statement->fetchObject(static::class);
        
        return $category;
    }

    public function findAllForHome()
    {
        $pdo = Database::getPDO();
        
        $sql = "SELECT * FROM category ORDER BY category_name ASC;";

        $statement = $pdo->query($sql);

        $categories = $statement->fetchAll(PDO::FETCH_ASSOC);
     
        return $categories;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of category_number
     */ 
    public function getCategoryNumber()
    {
        return $this->category_number;
    }

    /**
     * Set the value of category_number
     *
     * @return  self
     */ 
    public function setCategoryNumber($category_number)
    {
        $this->category_number = $category_number;

        return $this;
    }

    /**
     * Get the value of category_name
     */ 
    public function getCategoryName()
    {
        return $this->category_name;
    }

    /**
     * Set the value of category_name
     *
     * @return  self
     */ 
    public function setCategoryName($category_name)
    {
        $this->category_name = $category_name;

        return $this;
    }

     /**
     * Get the value of category_picture
     */ 
    public function getCategoryPicture()
    {
        return $this->category_picture;
    }

    /**
     * Set the value of category_picture
     *
     * @return  self
     */ 
    public function setCategoryPicture($category_picture)
    {
        $this->category_picture = $category_picture;

        return $this;
    }
}
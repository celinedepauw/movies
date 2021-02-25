<?php

namespace Movies\Models;
use Movies\Utils\Database;
use PDO;

class Movie
{
    private $id;
    private $name;
    private $year;
    private $duration;
    private $category;
    private $type;

    // récupération de tous les films pour une catégorie donnée
    public function findAllInCategory($idCategory)
    {
        $pdo = Database::getPDO();

        $sql = "
            SELECT
                *
            FROM `movie`
            WHERE
                `category` = {$idCategory}
            ORDER BY `name` ASC
        ";

        $statement = $pdo->query($sql);
        $movies = $statement->fetchAll(PDO::FETCH_CLASS, static::class);
        return $movies;
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of nationality
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of nationality
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
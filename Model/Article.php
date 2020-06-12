<?php

class Article 
{
    protected $_id;
    protected $_title;
    protected $_autor;
    protected $_content;
    protected $_dateCreation;
    protected $_dateModification;
    protected $_comments;

    // CONSTRUCTEUR
    public function __construct(array $data)
    {
        $this->hydrate($data)
    }

    // HYDRATATION
    public function hydrate(array $data)
    {
      foreach ($data as $key => $value)
      {
        $method = 'set'.ucfirst($key);

        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
      }
    }

    // SETTERS

}
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

    public function __construct(array $data)
    {
        $this->hydrate($data)
    }

}
<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pages")
 */

class Pages {
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="boolean", options={"default": 1})
     */
    public $status = 1;




    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }   
 
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }   
    
    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

}
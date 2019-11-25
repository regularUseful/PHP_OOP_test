<?php
class NewClass {

    public $info = "Here is some public info";
    protected $moreInfo = "here is some protected info";
    private $evenMoreInfo = "here is some private info";

}

$object = new NewClass;

var_dump($object);
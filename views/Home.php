<?php
class Home extends Mustache_Engine{

    protected $data;

    function render ($templates = "./templates/raw.mst",$data = []){
        $template = file_get_contents($templates);
        return parent::render($template, $this->data);
        //return $template;
    }

    function setData($data){
        $this->data = $data;
    }
}
<?php

trait FileHandler{
    private $filePath = __DIR__."/../../data/vehicles.json";
    public function readfile(){
        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath,json_encode([]));
        } else{
            return json_decode(file_get_contents($this->filePath),true);
        }
    }
    public function writefile($data){
        file_put_contents($this->filePath,json_encode($data,JSON_PRETTY_PRINT));
    }
}
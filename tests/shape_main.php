<?php

/*
 * This is shape main class
 * It creates an array of shapes
 */

/**
 * Description of shape_main
 *
 * @author tim
 */

include '~/cakephp-cakephp-1e79eee/Projects/data.dsv';

interface shape_main {
    
    public function findShapeIndex($instance, $shapes);
    
    
}

class shape{
public function getArea(){
             
}
}

class Circle implements shape{
    private $radius;
    
    public function sortByArea($radius){
    $this->radius = $radius;    
        }
        public function getArea(){
        
        return 3.14 * $this->radius * $this->radius;    

        }
}
        
        class Rectangle implements shape {
        private $width;
        private $height;

        function construct($width, $height){
            $this->width = $width;
            $this->height = $height;
            
        }
        function getArea(){
            return $this->width * $this->height;
        }
        
        function calculateArea(shape_main $shape){
            return $shape->getArea();
        }
}

    
    



   
$rectangle = new Rectangle();
$circle = new Circle();

$object = ['~/data.dsv']; 
$arrayIndex = new shape($object);
$results = $arrayIndex;

print_r($results, true);

foreach ($results as $i => $value){
    unset($results[$i]);
}
print_r($results);
?>
    
    

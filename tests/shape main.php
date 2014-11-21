<!DOCTYPE html>
<html>
    <body>
        <form>  
            <input type ="file" id="files" name="files[]" value="data.dsv" />
            <output id="list"></output>
            <script>   
                function handleFile(evt){
                    //var files = evt.tartget.files;
                    var output[];
                    
                    document.getElementById('files').addEventListener('change', handleFileSelect, false);
                    
                }
                </script>
    <?php
include 'var/www/';
include 'NetBeansProjects/Shape/tests/';
/*
 * shape class uses local path to find file
 * and retreive each shapes area
 */
class shape{
public function getArea(){
             
}
}

/*
 * retrieves Circle area calculation
 */
class Circle implements shape{
    private $radius;
    
    
    //specifies which object to apply radius 
    
    public function sortByArea($radius){
    $this->radius = $radius;    
        }
                
    //Constructor for Rectangle

        public function getArea(){
        
        return 3.14 * $this->radius * $this->radius;    

        }
}
        
/*
 * retrieves Rectangle area calculation
 */
        class Rectangle implements shape {
        private $width;
        private $height;
        
        //Constructor for Rectangle
        
        function construct($width, $height){
            $this->width = $width;
            $this->height = $height;
            
        }
        
            //specifies which object to apply Rectangle area 

        function getArea(){
            return $this->width * $this->height;
        }
        
        function calculateArea(shape_main $shape){
            return $shape->getArea();
        }
}
?>
        <?php

/* Main method Creates new objects
 * Rectangle & Circles
 * intializes them, and
 * the displays the results
 */
function findShapeIndex($instance,$shapes) {
$rectangle = new Rectangle();
$circle = new Circle();

$shapes.rectangle;
$shapes.circle;

$i = 0;
$object = fopen( "data.dsv", "r"); 
$arrayIndex = new shape($object,$rectangle,$circle);
$instance.$arrayIndex;
$results = $arrayIndex;

print_r($results, true);

//compares Shape values
//and reorganzies them using arrayIndex as 
//index for the shape array

foreach ($results as $i => $arrayIndex){
    unset($results[$i]);
}

//displays results
echo '$results';
}
?>
        </form>
    </body>  
</html>
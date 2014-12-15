<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php


$handle = fopen('data.csv', 'r') or die('cannot read file');
$shapes = array();
$rows = array();
$rectangle = new Rectangle;
$index = new ShapeIndex;

//$rec = 'rectangle';
$rectangle->calculateArea($shapes);
//$rectangle->getArea($shapes);
//$rec->$rectangle;
$index->findShapeIndex($shapes,$rows);
//asort($shapes);
//$circarray = array();
//build array of surnames, and array of rows
while (false != ( $row = fgetcsv($handle, 0, ';') )) {
    //extract surname from the first column
    //this should match the last word before the comma, if there is a comma
    preg_match('~([^\s]+)(?:,.*)?$~', $row[0], $m);
    preg_match('~([^\s]+)(?:,.*)?$~', $row[0], $m);

   
       $shapes[] = $m[0];
      // $circarray = $m2[0];
       $rows[] = $row[0];
   
}


//ksort($shapes,$rows);

fclose($handle);

//sort array of rows by surname using our array of surnames
array_multisort($shapes,$rows);

print_r($shapes);
//you could write $rows back to a file here if you wanted.

?>
        
        <?php
/*
 * retrieves Rectangle area calculation
 */
     
        class Rectangle {
        protected $width;
        protected $height;
        
        //Constructor for Rectangle
        
        function construct($width, $height){
            $this->width = $width;
            $this->height = $height;
            
        }
        
            //specifies which object to apply Rectangle area 

        function calculateArea(){
            return $this->width * $this->height;
        }
        
        function getArea($shapes){
        {return $shapes->calculateArea();
                
        }
}
        function sortByArea($shapes){
            if(calculateArea()== TRUE){
                sort($shapes);
            }
        }
        }
        
        class ShapeIndex{
   function findShapeIndex($instance, $shapes){
       //Use to find the shapes index
       //it uses ID as the key identifier
       //will sort based on ID
       $id = 'ID';
       $type = 'type';
       $radius = 'radius';
       $widht = 'width/height';
       //$this->$shapes = new shape();
       //$shapes.getArea($shapes);
       $shape_array_index = array($id =>[0], $type => [1], $radius => [2], $widht => [3]);
       
       $shape_array = array(
           $instance => [$id]);
      
       do{
            $shape_array -> $shape_array_index[0];
        ksort($shape_array_index,$sort_flags = $id);
       //$shape_array = [$id]; 
           
       } 
       while ($instance == 0);{
              $shape_array -> $shape_array_index[0];
        sort($shape_array_index,$sort_flags = $id);
          }
        
        if ($instance == 1) {
            $shape_array -> $shape_array_index[1];  
        ksort($shape_array_index,$sort_flags = $type);
 
          }
          elseif ($instance == 2) {
          ksort($shape_array_index,$sort_flags = $radius);

          } 
      elseif ($instance == 3) {
          $shape_array -> $shape_array_index[3];    
          ksort($shape_array_index,$sort_flags = $widht);
      }
          return $shape_array_index->$shapes;
          
   } 
     
       ////Used to find shapes area
       //sorts by shapes area
       
}
?>

    </body>
</html>
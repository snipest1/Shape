<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 

  $file_handle = fopen("data.csv", "r") or die("cannot read file");
  $instance = $file_handle;
  //$shapes = new ShapeIndex ();
  $rows = array(); 
  $sortshape =  array();
  
  while (false != ( $row = fgetcsv($instance, 0, ';') )) {
    	//for ($i = 0, $j = count($row); $i < $j; $i++){

    preg_match('~([^\s]+)(?:,.*)?$~', $row[3], $m);
       $sortshape[] = $m[0];

              $rows[] = $row[0];
}
  //shape.getArea();
   //findShapeIndex();
  //$shap->findShapeIndex($instance, $shapes);
//$shap = [$file_handle];
   
//$shape = new ShapeIndex($file_handle);
 //sort($shape_array);
  //$file_handle.ShapeIndex::class; 
//$results = $file_handle.getArea();
 // sort($shape_array);
  //$shape.getArea();
  //print "<table>\n";
  //ksort($shape_array);

//while ($csv_line = fgetcsv($file_handle, 1024)) {
	//print '<tr>';
      // var_dump($csv_line);
	//for ($i = 0, $j = count($row); $i < $j; $i++){
            //ksort($csv_line, $shape_array);
            
            //asort($csv_line);
            
            //echo ('<td>'.$row[$i].'</td>');
                        //'</tc>';
       
                    
//	}
        array_multisort($sortshape[2],$rows[0]);

    print "</tr>\n";

//$results = print_r(fgetcsv($file_handle.getArea()));
//asort($results);
//echo "$results";
fclose($file_handle);
print_r($rows);
//print_r($sortshape);
        
/*
* calls getArea to calculate shape
*/
class shape{
    
    
    public function getArea(){
        
        return sortByArea();
	}
        
        
    //public function sortByArea($shapes){
        
        //$handle = fopen('data.csv', 'r') or die('cannot read file');
//$shapes_sort = $shapes
//$shapes_sort   = array($shapes);
//$rows = array();

//$circarray = array();
//build array of surnames, and array of rows
//while (false != ( $row = fgetcsv($handle, 0, ';') )) {
    //extract surname from the first column
    //this should match the last word before the comma, if there is a comma
  //  preg_match('~([^\s]+)(?:,.*)?$~', $row[3], $m);

   
    //   $shapes_sort[] = $m[0];
      // $circarray = $m2[0];
      // $rows[] = $row[0];
   
}

   // }

//ksort($shapes,$rows);
//}
//fclose($handle);

//sort array of rows by surname using our array of surnames
//array_multisort($shapes_sort,$rows);
//print_r($rows);
//return $rows;
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

        function getArea(){
            return $this->width * $this->height;
        }
        
        function calculateArea(shape_main $shape){
            return $shape->getArea();
        }
}

/*
 * retrieves Circle area calculation
 */
class Circle {
    protected $radius;
    
    
    //specifies which object to apply shapes 
    
   
                
    //Constructor for Circle

        public function getArea(){
        
        return $radius = (3.14 * ($radius * $radius));    

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
        ksort($shape_array);
       //$shape_array = [$id]; 
           
       } 
       while ($instance == $id);{
               ksort($id);             
          }
        

          return findShapeIndex($shapes);
          
   } 
     
       ////Used to find shapes area
       //sorts by shapes area
       
}
?>
        
    </body>
</html>

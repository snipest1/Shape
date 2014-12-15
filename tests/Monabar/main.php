<!DOCTYPE html>


/**
* I wanted to thank Monabar and associates again for giving me extra time.  
* However, I must note that my project works, but it doesn't sort... yet.
* I must explain a few reasons for this, the first is I was traveling for the holidays
* to Connecticut.  That's wasn't the chief reason,why this relatively simple project took so long
* About a month and a half ago, my system suffered catastropic crash, I had about 2 years of work
* That're now gone.  The project wouldn't have taken me so much time if it 
* wasn't necessary to completely gut my computer's architecture, and install every missing
* PPA's and repository for Ubuntu, that I didn't know I needed(it has been a long week trying to get 
* my computer up and running.  A las I make no excuses, and I have finally gotten(most) functionality back.
Again, thanks for waiting so patiently.
*/

/*  run 'shape main.php' and 'data.csv 5', from the terminal 
 *  NetBeansProjects -> Shape > tests to run from terminal
 *  successfully.

 
 
 
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

$file_handle = fopen("data.csv", "r") or die("cannot read file");
$shape_array = array('ID' =>'0' , 'type' => '1' , 'radius' => '2' , 'width/height' => '3');
print "<table>\n";
while ($csv_line = fgetcsv($file_handle, 1024)) {
	print '<tr>';
	for ($i = 0, $j = count($csv_line); $i < $j; $i++){
		print '<td>'.$csv_line[$i].'</td>';
	}
    print "</tr>\n";
}
//$results = print_r(fgetcsv($file_handle.getArea()));
//asort($results);
//echo "$results";
fclose($file_handle);

/*
* calls getArea to calculate shape
*/
class shape{
	public function getArea(){

	}
}
	
?>

<?php

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
?>


        
    </body>
</html>

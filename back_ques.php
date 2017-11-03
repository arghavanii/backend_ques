<?php 


interface condidate {
  public function printGuessStatistics();
}

class oneperson implements condidate {

 private $condidate;
 
 
 public function __construct($condidate)
  {
    $this -> condidate = $condidate;
    
  }
 
  public function printGuessStatistics()
  {
	  $number = "1";   
 $verb = "is";  
 $pluralModifier = ""; 
 
  $format = "There %s %s %s%s";
echo sprintf( $verb, $number,    $this->condidate,$pluralModifier );
    // sprintf("There %s %s %s%s", array( $verb, $number,    $this->condidate,$pluralModifier  ));  
   
  }
}
class noOne implements condidate {
  
 private $condidate;
 public function __construct($condidate)
  {
    $this -> condidate = $condidate;
    
  }
  
  public function printGuessStatistics()
  
  
  {
	   $number = "no";  
 $verb = "are";   
 $pluralModifier = "s";
 
 $format = "There %s %s %s%s";
echo sprintf( $verb, $number,    $this->condidate,$pluralModifier );
     //sprintf("There %s %s %s%s", array( $verb,$number,   $this-> condidate, $pluralModifier  ));  
  }
}


class some implements condidate {
    
  private $condidate;
  private $number;
   
  public function __construct($condidate,$count)
  {
	  
    $this ->condidate = $condidate;
   $this->number = $count; 
  }
  
  
  public function printGuessStatistics()
  {
	   $verb = "are";    
   $pluralModifier = "s"; 
   
   $format = "There %s %s %s%s";
echo sprintf($format, $verb, $this->number, $this->condidate, $pluralModifier);
  // printf("There %s %s %s%s"( $verb, $this->number, $this->condidate, $pluralModifier ));  
 
  }
}



//printGuessStatistics(new some("fariba",3));
//printGuessStatistics(new noOne("fariba"));


//$statistics->printGuessStatistics("bird", 2); 
$some = new some("fariba","3");
$some->printGuessStatistics();
//$noOne = new noOne("fariba");



?>
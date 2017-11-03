<?php 

 
abstract class orderpizza {
    
    public final function makepizza($pizza) {
    $this->prepare();
       
        $pizza->bake();
       $pizza->cut();
		$this->box();
		
    }
   
  
	
	  abstract function prepare();
	function box()
	{
		echo "its ready :)";
	}
	  
}

class cheezepizza extends orderpizza {
	
    function prepare() {
     
    }
    function box() {
      echo "cheezepizza is ready :)";
    }
}

class peperoni extends orderpizza {
    function prepare() {
        
    }
}
class calmpizza extends orderpizza {
    function prepare() {
        
    }
}

class greekpizza extends orderpizza {
    function prepare() {
        
    }
}

class pizza {
	
	function bake() {
		//do sth
	}
    function cut() {
		//dosth
	}
}

$pizza=new pizza();

$cheezepizza = new cheezepizza();
 $cheezepizza->makepizza($pizza);   

?>
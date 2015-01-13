<?php

class Athlete {

    public $firstName = "Lebron";
    public $lastName = "James";
    public $weight = "250";
    public $age = "30";
    public $gender = "male";

} {
    $athlete1 = new Athlete();
    print $athlete1->age;
}
?>

<?php

//Examples for Day 2 

class Sport {

    public $basketball;
    public $soccer;
    public $football;

    function __construct($basketball, $soccer, $football) {
        $this->basketball = $basketball;
        $this->soccer = $soccer;
        $this->football = $football;
    }

    function getName() {
        return "{$this->basketball}" .
                "{$this->soccer}";
    }

}

$Sport = new Sport("basketball", "soccer", "football");
print "Sport: {$Sport->getName()}\n;"
?>
   
<?php
    if (is_resource())
    
    echo "It is a resource";
    else
    echo 'it is not a resource';
    var_dump(is_resource('XYZ'));
    var_dump(is_resource('8008'))
    ?>
    
   <?php 
    class Bird {
      public $fly;
    }
    
    function __construct($fly){
        $this->fly = $fly;
    }
    function getName(){
        return($this->fly);
    }
    $bird = new bird("speak");
    print $bird1->getName();
    
   

 
       
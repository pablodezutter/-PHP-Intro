#OOP

*class -> blueprint/plan/ 

==> construct OBJECT

ex.;
//Properties of a class
//Public (access from everywhere) or Private (use it within your class)?

class Person{
private$firstname = "";
private$lastname = "";

private$age = 0
public function setFirstName ($fname)
{
$this ->firstname=$fname
//this relates to class 'Person';
//in this class i will need firstname
}


}
$someOne = new Person();
$someOne => setFirstName("Fred");

//$someOne => firstname ="Fred"; (not with Private)//
{
return$this=>firstname;

}
$lname=$someOne => getlastName

//retrieve information//
public function getFirstName()

//get and set not with public!//

public function Person //same as class// or public function __construct() {

   $this => fname = "fred"; 
}

$someOne=new Person(); //call the function

OR:

public function __construct($fName, $lName){
$this => firstName = $fName;
$this => lastName = $lName;
}

other ex.:
class car{

private $brand;
private $color;
private $type;
private $speed;


//you can use this function outside 
public function __constructor($brand)
{
    $this => brand = $brand;
    //this refers to object
    //brand refers to $brand
    //= $brand refers to the brand set
}
public function __constructor(color)
{
    $this => color= $color;
}
public function __constructor(drive($speed))
{
    //do something
}
}

$myCar= new Car();
$myCar=drive(80);
$myCar => setBrand("vw");

-------!!!!!--------!!!!!!!--------!!!!!!!!----------
Oefening:











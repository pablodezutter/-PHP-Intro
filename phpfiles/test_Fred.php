<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
class Person
{

//properties//
private $firstName;
private $lastName;
private $phoneNumber;

//setfirstname + lastname
public function setFullName($fName,$lName,$Phone){
$this->firstName=$fName;
$this->lastName=$lName;
$this->phoneNumber=$Phone;
}
//setlastname
// public function setLastName($lName){
   
// }
//setPhonenumber
// public function setPhoneNumber()

public function getFullName()
{
return $this->firstName. " " .$this->lastName. " " .$this->phoneNumber;


}



}






$someOne = new Person();
// $someOne -> firstName ='Pablo';
// $someOne -> lastName= 'Dezutter';
// $someOne -> $phoneNumber= '0496638032';
// echo $someOne -> firstName;
// $someOne->setFirstName("Pablo");
// $someOne->setLastName("Dezutter");
// $someOne->setPhoneNumber("0496638032");
$someOne->setFullName("Pablo","Dezutter", 123);
echo $someOne->getFullName();

var_dump($someOne);


?>
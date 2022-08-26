<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getInfo()
  {
    return "
    <h3>A few words about myself</h3><br>" . "My name is " . $this->getName() . "<br>My father is" . $this->getFather()->getName() .
      "<br>My mother is" . $this->getMother()->getName() .
      "<br>My grandMa (mother) is" . $this->getMother()->getMother()->getName() .
      "<br>My grandPa (mother) is" . $this->getMother()->getFather()->getName() .
      "<br>My grandMa (father) is" . $this->getFather()->getMother()->getName() .
      "<br>My grandPa (father) is" . $this->getFather()->getFather()->getName();
  }
}
//$medKit = 50;

$maxim = new Person("Maxim", "Petrov", 78);
$yana = new Person("Yana", "Petrov", 59);

$igor = new Person("Igor", "Petrov", 66);
$marina = new Person("Marina", "Petrov", 70);

$alex = new Person("Alex", "Ivanov", 42, $yana, $maxim);
$olga = new Person("Olga", "Ivanova", 42, $marina, $igor);
$valera = new Person("Alena", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();


//echo $valera->getMother()->getFather()->getName();



//Здоровье человека не может быть выше 100
// echo $alex->name;
// echo $alex->sayHi($igor->name);
// $alex->setHp(-30); //Упал
// echo $alex->getHp()."<br>";
// $alex->setHp($medKit); //Нашел аптечку
// echo $alex->getHp();
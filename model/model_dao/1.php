<?php
 
class MyClass
{
  public $nombre = "james rodriguez";
 
  public function setProperty($nom)
  {
      $this->nombre = $nom;
  }
 
  public function getProperty()
  {
      return $this->nombre . "<br />";
  }
}
 
// Creamos  objetos
$obj1 = new MyClass;
$obj2 = new MyClass;
$obj3 = new MyClass;
$obj4 = new MyClass;
$obj5 = new MyClass;
$obj6= new MyClass;
 
// valor objeto 
echo $obj1->getProperty();
 
 
// instanciar nuevos objetos y colocamos nombres
$obj2->setProperty("pedro suarez");
$obj3->setProperty("maria rodriguez");
$obj4->setProperty("luis sanchez");
$obj5->setProperty("santiago");
$obj6->setProperty("carlos");
 
// visualizamos los objetos
echo $obj2->getProperty();
echo $obj3->getProperty();
echo $obj4->getProperty();
echo $obj5->getProperty();
echo $obj6->getProperty();
 
 
?>

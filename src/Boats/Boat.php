<?php

// following PSR-4 convention with the naming of the namespace
namespace App\Boats;

// we import the Container class for usage here
// (hint: I could also have used `App\Containers\Container` directly in the `load` method)
use App\Containers\Container;

/**
 * this class represents a generic boat in our business logic
 * 
 * it doesn't have the `final` keyword because we want to derive specific boats classes from it
 */
class Boat
{

  // TODO challenge => use a static property instead and explain why it's better
  const CIE = "POEC STRASBOURG 0922 SHIPPING CIE";

  // ! it's a good practice to make your class properties private by default

  /**
   * the tonnage of the boat
   * 
   * here, it's a protected property because we may need to tweak it in derived classes
   *
   * @var float
   */
  protected float $tonnage; // expressed as a volume, as in (width * height * depth)
  
  private string $name;

  // TODO challenge => use a data structure to type the array of items using the relevant data structure
  // https://www.php.net/manual/en/book.ds.php
  private array $shipmentItems = [];

  /**
   * class constructor
   * 
   * every boat must have a name and a tonnage value
   * 
   * TODO challenge => force every sub boat instanciation to have a name and tonnage on constuct
   *
   * @param string $name
   * @param float $tonnage
   */
  public function __construct(string $name, float $tonnage)
  {
     $this->name = $name;
     $this->speed = $tonnage;
  }

  /**
   * adds an item of type Container in the boat's shipment
   * 
   * here, we are leveraging polymorphism because we can load all types of containers onto the boat
   * 
   * TODO challenge => forbid adding items if max tonnage is reached
   * (hint: you can state that each container has a specific volume in the relevant class)
   *
   * @param Container $item
   * @return void
   */
  public function load(Container $item) {
    $this->shipmentItems[] = $item;
  }

  // TODO challenge => represent the idea that a boat is moving from a departure port to a destination port using OOP
  public function move() {}

  // TODO challenge => implementing unloading a specific item on call to this method
  public function unload() {}


  /**
   * Get the value of tonnage
   */ 
  public function getTonnage()
  {
    return $this->tonnage;
  }

  /**
   * Set the value of tonnage
   * 
   * returning `$this` from a setter is called a "fluent setter",
   * ! google that term dude !
   *
   * @return  self
   */ 
  public function setTonnage($tonnage)
  {
    $this->tonnage = $tonnage;

    return $this;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of items
   */ 
  public function getItems()
  {
    return $this->items;
  }

  /**
   * Set the value of items
   *
   * @return  self
   */ 
  public function setItems($items)
  {
    $this->items = $items;

    return $this;
  }
}

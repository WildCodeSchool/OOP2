<?php

namespace App\Boats;

/**
 * this class represents a Galley type of boat
 * 
 */
final class Galley extends Boat {
    
    private int $numberOfRowers = 0;

    /**
     * Galley constructor
     * 
     * we call the parent constructor here because every boat needs a name and a tonnage
     *
     * @param string $name
     * @param float $tonnage
     * @param integer $initialNumberOfRowers - this property is specific to galleys
     */
    public function __construct(string $name, float $tonnage, int $initialNumberOfRowers)
    {
        parent::__construct($name, $tonnage);
        $this->numberOfRowers += $initialNumberOfRowers;
    }

    /**
     * get the tonnage of the galley
     * 
     * here, we are redefining the initial Boat class `getTonnage` method
     * because this subclass has a specific implementation for this
     * 
     * TODO challenge => in a galley, tonnage is boat's tonange - each rower's volume in the boat
     * (hint: the average volume of a human being is 62,000 cubic centimeters)
     * 
     * @return float
     */public function getTonnage(): float
    {
        // here, we are using the global PHP namespace with `\` in front of `Exception`
        throw new \Exception("You need to implement this dude", 1);
    }

    /**
     * adds rowers to the galley instance
     * 
     * TODO challenge: implement a maximum number of rowers
     * (hint: Roman galleys could hold up to 180 men)
     *
     * @return  self
     */ 
    public function addRowers($numberOfRowers)
    {
        $this->numberOfRowers = $numberOfRowers;

        return $this;
    }

    /**
     * Get the value of numberOfRowers
     */ 
    public function getNumberOfRowers()
    {
        return $this->numberOfRowers;
    }

}
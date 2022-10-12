<?php

namespace App\Containers;

/**
 * this class represents a container to be put on a boat in our business logic
 * 
 * TODO challenge => implement a maximum capacity for each of the sub containers classes
 */
class Container {

    // TODO challenge => validate that a number is not too long when creating a container
    private string $label;
    private float $capacity;

    public function empty() {}

    public function fill() {}

    public function label() {}


    /**
     * Get the value of label
     */ 
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */ 
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }
}
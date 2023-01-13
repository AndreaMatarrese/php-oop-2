<?php

class Product {
	private string $id;
	private string $name;
	private string $category;
	private string $description;
	private int $availableQty;
	private int $price;

    public function __construct($name, $category, $description, $availableQty, $price)
	{
		$this->name	= $name;
		$this->category	= $category;
		$this->description = $description;
		$this->availableQty = $availableQty;
		$this->price = $price;
	}
    public function isAvailable ()
	{
		if ($this->availableQty == 0) {
			return false;
		} else {
			return true;
		}
	}
    public function decrementAvailableQty()
	{
		$this->availableQty--;
		return $this;
	}

}

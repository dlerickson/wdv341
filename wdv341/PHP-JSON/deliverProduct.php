<?php

$productObj = new ProductContainer();
$productObj->set_name( "PHP Textbook" );
$productObj->set_price( "$129.95" );
$productObj->set_pageCount( "327" );
$productObj->set_ISBN( "13-1234435690" );

class ProductContainer {

  public $productName = "PHP Textbook";
  public $productPrice = "$129.95";
  public $productPageCount = "327";
  public $productISBN = "13-1234435690";

  public function __construct(){
  }

  public function set_name( $inVal ){
    $this->name = $inVal;
  }

  public function set_price( $inVal ){
    $this->price = $inVal;
  }

  public function set_pageCount( $inVal ){
    $this->pageCount = $inVal;
  }

  public function set_ISBN( $inVal ){
    $this->ISBN = $inVal;
  }

  public function get_name(){
    return $this->name;
  }

  public function get_price(){
    return $this->price;
  }

  public function get_pageCount(){
    return $this->pageCount;
  }

  public function get_ISBN(){
    return $this->ISBN;
  }
	
}
//
$returnObj = json_encode( $productObj ); //create the JSON object
//	
echo $returnObj; //send results back to calling program
?>
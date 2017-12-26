<?php

namespace Erp\Bundle\ObjectValueBundle\Entity;

/**
 * Person data Entity
 */
abstract class PersonData  {

  /**
  * @var string
  */
  private $id;

  /**
   * @var string
   */
  protected $code;

  /**
   * name
   *
   * @var string
   */
  protected $name;

  /**
   * @var Address
   */
  protected $address;

  /**
   * constructor
   */
  public function __construct() {
    $this->address = new Address();
  }

  /**
   * Get id
   *
   * @return string
   */
  public function getId(){
      return $this->id;
  }

  /**
   * @return string
   */
  public function getCode()
  {
    return $this->code;
  }

  /**
   * @param string $code
   *
   * @return static
   */
  public function setCode($code)
  {
    $this->code = $code;
    return $this;
  }

  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   *
   * @return static
   */
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  /**
   * @return Address
   */
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * @param Address $address
   *
   * @return static
   */
  public function setAddress(Address $address)
  {
    $this->address = $address;
    return $this;
  }
}

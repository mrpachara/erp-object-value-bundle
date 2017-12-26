<?php

namespace Erp\Bundle\ObjectValueBundle\Entity;

/**
 * BankAccount ObjectValue
 */
Class BankAccount {
  /** @var string */
  protected $id;

  /** @var string */
  protected $code;

  /** @var string */
  protected $name;

  /** @var string */
  protected $category;

  /** @var string */
  protected $bank;

  /** @var string */
  protected $branch;

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
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * @param string $category
   *
   * @return static
   */
  public function setCategory($category)
  {
    $this->category = $category;
    return $this;
  }

  /**
   * @return string
   */
  public function getBank()
  {
    return $this->bank;
  }

  /**
   * @param string $bank
   *
   * @return static
   */
  public function setBank($bank)
  {
    $this->bank = $bank;
    return $this;
  }

  /**
   * @return string
   */
  public function getBranch()
  {
    return $this->branch;
  }

  /**
   * @param string $branch
   *
   * @return static
   */
  public function setBranch($branch)
  {
    $this->branch = $branch;
    return $this;
  }
}

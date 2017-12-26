<?php

namespace Erp\Bundle\ObjectValueBundle\Entity;

/**
 * ContactPhone ObjectValue
 */
Class ContactPhone {
  /** @var string */
  protected $id;

  /** @var string */
  protected $phone;

  /** @var bool */
  protected $default;

  /**
   * Get id
   *
   * @return string
   */
  public function getId(){
      return $this->id;
  }

  /**
   * Set phone
   *
   * @param string $phone
   *
   * @return ContactPhone
   */
  public function setPhone(string $phone){
      $this->phone = $phone;

      return $this;
  }

  /**
   * Get $phone
   *
   * @return string
   */
  public function getPhone(){
      return $this->phone;
  }

  /**
   * Set default
   *
   * @param bool $default
   *
   * @return ContactPhone
   */
  public function setDefault(bool $default){
      $this->default = $default;

      return $this;
  }

  /**
   * Get default
   *
   * @return string
   */
  public function getDefault(){
      return $this->default;
  }
}

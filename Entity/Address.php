<?php

namespace Erp\Bundle\ObjectValueBundle\Entity;

/**
 * Address ObjectValue
 */
Class Address {
  /** @var string */
  protected $id;

  /** @var string */
  protected $address;

  /** @var string */
  protected $subdistrict;

  /** @var string */
  protected $district;

  /** @var string */
  protected $province;

  /** @var string */
  protected $postalcode;

  /**
   * Get id
   *
   * @return string
   */
  public function getId(){
      return $this->id;
  }

  /**
   * Set address
   *
   * @param string $address
   *
   * @return Address
   */
  public function setAddress(string $address){
      $this->address = $address;

      return $this;
  }

  /**
   * Get address
   *
   * @return string
   */
  public function getAddress(){
      return $this->address;
  }

  /**
   * Set subdistrict
   *
   * @param string $subdistrict
   *
   * @return Address
   */
  public function setSubdistrict(string $subdistrict){
      $this->subdistrict = $subdistrict;

      return $this;
  }

  /**
   * Get subdistrict
   *
   * @return string
   */
  public function getSubdistrict(){
      return $this->subdistrict;
  }

  /**
   * Set district
   *
   * @param string $district
   *
   * @return Address
   */
  public function setDistrict(string $district){
      $this->district = $district;

      return $this;
  }

  /**
   * Get district
   *
   * @return string
   */
  public function getDistrict(){
      return $this->district;
  }

  /**
   * Set province
   *
   * @param string $province
   *
   * @return Address
   */
  public function setProvince(string $province){
      $this->province = $province;

      return $this;
  }

  /**
   * Get province
   *
   * @return string
   */
  public function getProvince(){
      return $this->province;
  }

  /**
   * Set postalcode
   *
   * @param string $postalcode
   *
   * @return Address
   */
  public function setPostalcode(string $postalcode){
      $this->postalcode = $postalcode;

      return $this;
  }

  /**
   * Get postalcode
   *
   * @return string
   */
  public function getPostalcode(){
      return $this->postalcode;
  }
}

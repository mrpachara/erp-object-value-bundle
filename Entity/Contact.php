<?php

namespace Erp\Bundle\ObjectValueBundle\Entity;

use Erp\Bundle\ObjectValueBundle\Entity\ContactPhone;

use Erp\Bundle\CoreBundle\Collection\ArrayCollection;

/**
 * Contact ObjectValue
 */
Class Contact {
  /** @var string */
  protected $id;

  /** @var string */
  protected $alias;

  /** @var string */
  protected $position;

  /** @var string */
  protected $email;

  /** @var string */
  protected $lineId;

  /** @var ArrayCollection */
  protected $phones;

  /**
   * constructor
   */
  public function __construct() {
    $this->phones = new ArrayCollection();
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
  public function getAlias()
  {
    return $this->alias;
  }

  /**
   * @param string $alias
   *
   * @return static
   */
  public function setAlias($alias)
  {
    $this->alias = $alias;
    return $this;
  }

  /**
   * @return string
   */
  public function getPosition()
  {
    return $this->position;
  }

  /**
   * @param string $position
   *
   * @return static
   */
  public function setPosition($position)
  {
    $this->position = $position;
    return $this;
  }

  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @param string $email
   *
   * @return static
   */
  public function setEmail($email)
  {
    $this->email = $email;
    return $this;
  }

  /**
   * @return string
   */
  public function getLineId()
  {
    return $this->lineId;
  }

  /**
   * @param string $lineId
   *
   * @return static
   */
  public function setLineId($lineId)
  {
    $this->lineId = $lineId;
    return $this;
  }

  /**
   * @return ContactPhone[]
   */
  public function getPhones()
  {
    return $this->phones->toArray();
  }

  /**
   * Add phone
   *
   * @param ContactPhone $contactPhone
   *
   * @return static
   */
  public function addPhone(ContactPhone $contactPhone){
      if(!$this->phones->contains($contactPhone))
        $this->contactPhone[] = $contactPhone;

      return $this;
  }

  /**
   * Remove phone
   *
   * @param ContactPhone $contactPhone
   */
  public function removePhone(ContactPhone $contactPhone){
      $this->phone->removeElement($contactPhone);
  }
}

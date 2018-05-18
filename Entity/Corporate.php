<?php

namespace Erp\Bundle\ObjectValueBundle\Entity;

/**
 * Corporate ObjectValue
 */
Class Corporate extends PersonData {
  /** @var \DateTimeImmutable */
  protected $registrationDate;

  /** @var string */
  protected $category;

  /** @var string */
  protected $corporateName;

  /** @var bool */
  protected $main;

  /** @var string */
  protected $branch;

  /**
   * constructor
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * @return \DateTimeImmutable
   */
  public function getRegistrationDate()
  {
    return $this->registrationDate;
  }

  /**
   * @param \DateTimeImmutable $registrationDate
   *
   * @return static
   */
  public function setRegistrationDate(?\DateTimeImmutable $registrationDate)
  {
    $this->registrationDate = $registrationDate;
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
  public function getCorporateName()
  {
    return $this->corporateName;
  }

  /**
   * @param string $corporateName
   *
   * @return static
   */
  public function setCorporateName($corporateName)
  {
    $this->corporateName = $corporateName;
    return $this;
  }

  /**
   * @return bool
   */
  public function getMain()
  {
    return $this->main;
  }

  /**
   * @param bool $main
   *
   * @return static
   */
  public function setMain($main)
  {
    $this->main = $main;
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

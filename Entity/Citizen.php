<?php

namespace Erp\Bundle\ObjectValueBundle\Entity;

/**
 * Citizen ObjectValue
 */
Class Citizen extends PersonData {
  /** @var string */
  protected $initname;

  /** @var string */
  protected $firstname;

  /** @var string */
  protected $lastname;

  /** @var \DateTimeImmutable */
  protected $birthDate;

  /** @var string */
  protected $religious;

  /** @var \DateTimeImmutable */
  protected $issueDate;

  /** @var \DateTimeImmutable */
  protected $expiredDate;

  /**
   * constructor
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * @return string
   */
  public function getInitname()
  {
    return $this->initname;
  }

  /**
   * @param string $initname
   *
   * @return static
   */
  public function setInitname($initname)
  {
    $this->initname = $initname;
    return $this;
  }

  /**
   * @return string
   */
  public function getFirstname()
  {
    return $this->firstname;
  }

  /**
   * @param string $firstname
   *
   * @return static
   */
  public function setFirstname($firstname)
  {
    $this->firstname = $firstname;
    return $this;
  }

  /**
   * @return string
   */
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * @param string $lastname
   *
   * @return static
   */
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;
    return $this;
  }

  /**
   * @return \DateTimeImmutable
   */
  public function getBirthDate()
  {
    return $this->birthDate;
  }

  /**
   * @param \DateTimeImmutable $birthDate
   *
   * @return static
   */
  public function setBirthDate(\DateTimeImmutable $birthDate)
  {
    $this->birthDate = $birthDate;
    return $this;
  }

  /**
   * @return string
   */
  public function getReligious()
  {
    return $this->religious;
  }

  /**
   * @param string $religious
   *
   * @return static
   */
  public function setReligious($religious)
  {
    $this->religious = $religious;
    return $this;
  }

  /**
   * @return \DateTimeImmutable
   */
  public function getIssueDate()
  {
    return $this->issueDate;
  }

  /**
   * @param \DateTimeImmutable $issueDate
   *
   * @return static
   */
  public function setIssueDate(\DateTimeImmutable $issueDate)
  {
    $this->issueDate = $issueDate;
    return $this;
  }

  /**
   * @return \DateTimeImmutable
   */
  public function getExpiredDate()
  {
    return $this->expiredDate;
  }

  /**
   * @param \DateTimeImmutable $expiredDate
   *
   * @return static
   */
  public function setExpiredDate(\DateTimeImmutable $expiredDate)
  {
    $this->expiredDate = $expiredDate;
    return $this;
  }
}

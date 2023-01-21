<?php
namespace Packages\UseCase\ContactForm\Create;

class ContactFormCreateResponse
{
  /** @var int */
  private $id;

  /** @var string */
  private $name;

  /** @var string */
  private $title;

  /** @var string */
  private $email;

  /** @var string */
  private $url;

  /** @var int */
  private $gender;

  /** @var int */
  private $age;

  /** @var string */
  private $contact;

  /**
   * ContactFormGetRequest constructor.
   * @param string $name
   * @param string $title
   * @param string $email
   * @param string $url
   * @param string $gender
   * @param string $age
   * @param string $contact
   */
  public function __construct(int $id, string $name, string $title, string $email, string $url, int $gender, int $age, string $contact)
  {
    $this->id = $id;
    $this->name = $name;
    $this->title = $title;
    $this->email = $email;
    $this->url = $url;
    $this->gender = $gender;
    $this->age = $age;
    $this->contact = $contact;
  }

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }
  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * @return string
   */
  public function getUrl(): string
  {
    return $this->url;
  }

  /**
   * @return int
   */
  public function getGender(): int
  {
    return $this->gender;
  }

  /**
   * @return int
   */
  public function getAge(): int
  {
    return $this->age;
  }

  /**
   * @return string
   */
  public function getContact(): string
  {
    return $this->contact;
  }
}
<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormEntity
 * ContactFormを表現するEntity
 * @package Packages\Domain\ContactForm
 */
class ContactFormEntity
{
  /** @var ContactFormName */
  protected $name;

  /** @var ContactFormTitle */
  protected $title;

  /** @var ContactFormEmail */
  protected $email;

  /** @var ContactFormUrl */
  protected $url;

  /** @var ContactFormGender */
  protected $gender;

  /** @var ContactFormAge */
  protected $age;

  /** @var ContactFormContact */
  protected $contact;

  /**
   * ContactFormEntity constructor.
   * @param ContactFormName $name
   * @param ContactFormTitle $title
   * @param ContactFormEmail $email
   * @param ContactFormUrl $url
   * @param ContactFormGender $gender
   * @param ContactFormAge $age
   * @param ContactFormContact $contact
   */
  public function __construct(
    ContactFormName $name,
    ContactFormTitle $title,
    ContactFormEmail $email,
    ContactFormUrl $url,
    ContactFormGender $gender,
    ContactFormAge $age,
    ContactFormContact $contact
  )
  {
    $this->name = $name;
    $this->title = $title;
    $this->email = $email;
    $this->url = $url;
    $this->gender = $gender;
    $this->age = $age;
    $this->contact = $contact;
  }

  /**
   * @return ContactFormName
   */
  public function getName(): ContactFormName
  {
    return $this->name;
  }

  /**
   * @return ContactFormTitle
   */
  public function getTitle(): ContactFormTitle
  {
    return $this->title;
  }

  /**
   * @return ContactFormEmail
   */
  public function getEmail(): ContactFormEmail
  {
    return $this->email;
  }

  /**
   * @return ContactFormUrl
   */
  public function getUrl(): ContactFormUrl
  {
    return $this->url;
  }

  /**
   * @return ContactFormGender
   */
  public function getGender(): ContactFormGender
  {
    return $this->gender;
  }

  /**
   * @return ContactFormAge
   */
  public function getAge(): ContactFormAge
  {
    return $this->age;
  }

  /**
   * @return ContactFormContact
   */
  public function getContact(): ContactFormContact
  {
    return $this->contact;
  }
}
<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormGender
 * ContactFormの識別子であるGenderを表すValueObject
 * @package Packages\Domain\ContactForm
 */
class ContactFormGender
{
  /** @var string */
  private $_value;

  /**
   * ContactFormGender constructor.
   * @param string $contactFormGender
   */
  private function __construct(string $contactFormGender)
  {
    $this->_value = $contactFormGender;
  }

  public static function create(string $contactFormGender): self
  {
    return new self($contactFormGender);
  }

  public function value(): string
  {
    return $this->_value;
  }
}
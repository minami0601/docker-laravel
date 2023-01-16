<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormEmail
 * ContactFormの識別子であるEmailを表すValueObject
 * @package Packages\Domain\ContactForm
 */
class ContactFormEmail
{
  /** @var string */
  private $_value;

  /**
   * ContactFormEmail constructor.
   * @param string $contactFormEmail
   */
  private function __construct(string $contactFormEmail)
  {
    $this->_value = $contactFormEmail;
  }

  public static function create(string $contactFormEmail): self
  {
    return new self($contactFormEmail);
  }

  public function value(): string
  {
    return $this->_value;
  }
}
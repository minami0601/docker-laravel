<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormContact
 * ContactFormの識別子であるIDを表すValueObject
 * @package Packages\Domain\ContactForm
 */
class ContactFormContact
{
  /** @var string */
  private $_value;

  /**
   * ContactFormContact constructor.
   * @param string $contactFormContact
   */
  private function __construct(string $contactFormContact)
  {
    $this->_value = $contactFormContact;
  }

  public static function create(string $contactFormContact): self
  {
    return new self($contactFormContact);
  }

  public function value(): string
  {
    return $this->_value;
  }
}
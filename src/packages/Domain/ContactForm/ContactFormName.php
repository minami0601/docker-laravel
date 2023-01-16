<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormName
 * ContactFormの識別子であるNmaを表すValueObject
 * @package Packages\Domain\ContactForm
 */
class ContactFormName
{
  /** @var string */
  private $_value;

  /**
   * ContactFormName constructor.
   * @param string $contactFormName
   */
  private function __construct(string $contactFormName)
  {
    $this->_value = $contactFormName;
  }

  public static function create(string $contactFormName): self
  {
    return new self($contactFormName);
  }

  public function value(): string
  {
    return $this->_value;
  }
}
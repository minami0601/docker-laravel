<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormId
 * ContactFormの識別子であるIDを表すValueObject
 * @package Packages\Domain\ContactForm
 */
class ContactFormId
{
  /** @var string */
  private $_value;

  /**
   * ContactFormId constructor.
   * @param string $contactFormId
   */
  private function __construct(string $contactFormId)
  {
    $this->_value = $contactFormId;
  }

  public static function create(string $contactFormId): self
  {
    return new self($contactFormId);
  }

  public function value(): string
  {
    return $this->_value;
  }
}
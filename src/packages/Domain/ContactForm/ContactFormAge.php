<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormId
 * ContactFormの識別子であるIDを表すValueObject
 * @package Packages\Domain\ContactForm
 */
class ContactFormAge
{
  /** @var int */
  private $_value;

  /**
   * ContactFormId constructor.
   * @param int $contactFormId
   */
  private function __construct(int $contactFormId)
  {
    $this->_value = $contactFormId;
  }

  public static function create(int $contactFormId): self
  {
    return new self($contactFormId);
  }

  public function value(): int
  {
    return $this->_value;
  }
}
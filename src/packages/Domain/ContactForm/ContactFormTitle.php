<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormTitle
 * ContactFormの識別子であるTitleを表すValueObject
 * @package Packages\Domain\ContactForm
 */
class ContactFormTitle
{
  /** @var string */
  private $_value;

  /**
   * ContactFormTitle constructor.
   * @param string $contactFormTitle
   */
  private function __construct(string $contactFormTitle)
  {
    $this->_value = $contactFormTitle;
  }

  public static function create(string $contactFormTitle): self
  {
    return new self($contactFormTitle);
  }

  public function value(): string
  {
    return $this->_value;
  }
}
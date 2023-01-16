<?php


namespace Packages\Domain\ContactForm;

/**
 * Class ContactFormUrl
 * ContactFormの識別子であるUrlを表すValueObject
 * @package Packages\Domain\ContactForm
 */
class ContactFormUrl
{
  /** @var string */
  private $_value;

  /**
   * ContactFormUrl constructor.
   * @param string $contactFormUrl
   */
  private function __construct(string $contactFormUrl)
  {
    $this->_value = $contactFormUrl;
  }

  public static function create(string $contactFormUrl): self
  {
    return new self($contactFormUrl);
  }

  public function value(): string
  {
    return $this->_value;
  }
}
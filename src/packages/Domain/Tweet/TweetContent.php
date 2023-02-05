<?php


namespace Packages\Domain\Tweet;

/**
 * Class TweetContent
 * tweetの識別子であるIDを表すValueObject
 * @package Packages\Domain\Tweet
 */
class TweetContent
{
  /** @var string */
  private $_value;

  /**
   * TweetContent constructor.
   * @param string $tweetContent
   */
  private function __construct(string $tweetContent)
  {
    $this->_value = $tweetContent;
  }

  public static function create(string $tweetContent): self
  {
    return new self($tweetContent);
  }

  public function value(): string
  {
    return $this->_value;
  }
}

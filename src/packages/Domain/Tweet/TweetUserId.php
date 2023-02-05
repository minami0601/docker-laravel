<?php


namespace Packages\Domain\Tweet;

/**
 * Class TweetId
 * Tweetの識別子であるIDを表すValueObject
 * @package Packages\Domain\Tweet

 */
class TweetUserId
{
  /** @var string */
  private $_value;

  /**
   * TweetUserId constructor.
   * @param string $tweetUserId
   */
  private function __construct(string $tweetUserId)
  {
    $this->_value = $tweetUserId;
  }

  public static function create(string $tweetUserId): self
  {
    return new self($tweetUserId);
  }

  public function value(): string
  {
    return $this->_value;
  }
}

<?php


namespace Packages\Domain\Tweet;

/**
 * Class TweetCreateEntity
 * Tweetを表現するEntity
 * @package Packages\Domain\Tweet
 */
class TweetCreateEntity
{
  /** @var TweetUserId */
  protected $user_id;

  /** @var TweetContent */
  protected $content;

  /**
   * TweetCreateEntity constructor.
   * @param TweetUserId $user_id
   * @param TweetContent $content
   */
  public function __construct(
    TweetUserId $user_id,
    TweetContent $content
  )
  {
    $this->user_id = $user_id;
    $this->content = $content;
  }

  /**
   * @return TweetUserId
   */
  public function getUserId(): TweetUserId
  {
    return $this->user_id;
  }

  /**
   * @return TweetContent
   */
  public function getContent(): TweetContent
  {
    return $this->content;
  }
}

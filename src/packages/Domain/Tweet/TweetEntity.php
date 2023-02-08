<?php


namespace App\Packages\Domain\Tweet;

/**
 * Class TweetEntity
 * Tweetを表現するEntity
 * @package App\Packages\Domain\Tweet
 */
class TweetEntity
{
  protected $id;

  /** @var TweetUserId */
  protected $user_id;

  /** @var TweetContent */
  protected $content;

  /**
   * TweetCreateEntity constructor.
   * @param int $id
   * @param TweetUserId $user_id
   * @param TweetContent $content
   */
  public function __construct(
    int $id = null,
    TweetUserId $user_id,
    TweetContent $content
  )
  {
    $this->id = $id;
    $this->user_id = $user_id;
    $this->content = $content;
  }

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
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
<?php


namespace App\Packages\Domain\Tweet;

/**
 * Class TweetContent
 * tweetの識別子であるIDを表すValueObject
 * @package Packages\Domain\Tweet
 */
class TweetContent
{
  // 内容の最低文字数を表す定数
  public const MIN_LENGTH = 1;

  // 内容の最高文字数を表す定数
  public const MAX_LENGTH = 140;

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
    // 入力値の審査をする
    self::validation($value);

    return new self($tweetContent);
  }

  //値の審査をし、審査基準に満たなければエラーをスローする。
  private static function validation(string $value): bool
  {
    if (mb_strlen($value) < self::MIN_LENGTH) {
      throw new RuntimeException('内容は必須です。');
    }

    if (mb_strlen($value) > self::MAX_LENGTH) {
      throw new RuntimeException('内容の文字数がオーバーしています。');
    }

    return true;
  }

  public function value(): string
  {
    return $this->_value;
  }
}

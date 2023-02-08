<?
namespace App\Packages\Domain\Tweet\Dto;

class TweetCreateInputData
{
  private $user_id;
  private $content;

  public function __construct($user_id, $content)
  {
    $this->user_id = $user_id;
    $this->content = $content;
  }

  /**
  * @return mixed
  */
  public function getUserId()
  {
    return $this->user_id;
  }

  /**
  * @return mixed
  */
  public function getContent()
  {
    return $this->content;
  }
}

?>
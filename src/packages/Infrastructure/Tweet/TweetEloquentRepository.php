<?php
namespace Packages\Infrastructure\Tweet;

use App\Models\Tweet;
use Packages\Domain\Tweet\TweetEntity;

class TweetEloquentRepository implements TweetRepository
{
  public function save(TweetEntity $tweetEntity): void
  {
    Tweet::create([
      'user_id' => $tweetEntity->getUserId()->value(),
      'content' => $tweetEntity->getContent()->value()
    ]);
  }
}
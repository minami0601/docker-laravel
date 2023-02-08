<?php

namespace App\Packages\Infrastructure\Tweet;

use App\Models\Tweet;
use App\Packages\Domain\Tweet\TweetEntity;

interface TweetRepository
{
  public function save(TweetEntity $tweetEntity): void;
}
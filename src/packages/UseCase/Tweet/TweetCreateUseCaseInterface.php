<?php

namespace Packages\UseCase\Tweet;

use App\Packages\Domain\Tweet\Dto\TweetCreateInputData;

interface TweetCreateUseCaseInterface
{
  public function handle(TweetCreateInputData $tweetInputData): void;
}
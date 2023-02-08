<?php

namespace Packages\UseCase\Tweet;

use App\Packages\Domain\Tweet\Dto\TweetCreateInputData;
use App\Packages\UseCase\Tweet\TweetCreateUseCaseInterface;
use App\Packages\Domain\Tweet\TweetEntity;
use App\Packages\Domain\Tweet\TweetContent;
use App\Packages\Domain\Tweet\TweetUserId;
use App\Packages\Infrastructure\Tweet\TweetRepository as TweetRepositoryInterface;

class TweetCreateInteractor implements TweetCreateUseCaseInterface
{
  private $TweetRepository;

  //①Data Access Interface<I>
  public function __construct(TweetRepositoryInterface $TweetRepository)
  {
    $this->TweetRepository = $TweetRepository;
  }

  /**
   * @param tweetCreateInputData $tweetCreateInputData
   * @return UserOutputData
   * @throws \Exception
   */
  public function handle(TweetCreateInputData $tweetCreateInputData)
  {
    $id = null;
    //②Entity
    $tweet = new TweetEntity(
      $id,
      new TweetUserId($tweetCreateInputData->getUserId()),
      new TweetContent($tweetCreateInputData->getContent())
    );
    //③Data Access
    $this->TweetRepository->save($tweet);
  }
}
<?php

namespace Packages\Application\ContactForm;

use Packages\Domain\ContactForm\ContactFormCreateEntity;
use Packages\Domain\ContactForm\ContactFormEmail;
use Packages\Domain\ContactForm\ContactFormName;
use Packages\Domain\ContactForm\ContactFormAge;
use Packages\Domain\ContactForm\ContactFormGender;
use Packages\Domain\ContactForm\ContactFormTitle;
use Packages\Domain\ContactForm\ContactFormUrl;
use Packages\Infrastructure\ContactForm\ContactFormEloquentRepository;
use Packages\UseCase\ContactForm\Create\ContactFormCreateRequest;
use Packages\UseCase\ContactForm\Create\ContactFormCreateResponse;
use Packages\UseCase\ContactForm\Create\ContactFormCreateUseCaseInterface;

class ContactFormCreateInteractor implements ContactFormCreateUseCaseInterface
{
  /** @var ContactFormEloquentRepository  */
  private $contactFormEloquentRepository;

  /**
   * fInteractor constructor.
   */
  public function __construct(ContactFormEloquentRepository $contactFormEloquentRepository)
  {
    $this->contactFormEloquentRepository = $contactFormEloquentRepository;
  }

  public function __invoke(ContactFormCreateRequest $request): ContactFormCreateResponse
  {
    // ContactFormのドメインモデルを生成
    // この時、全ての値の審査も行われる
    $contactForm= new ContactFormCreateEntity(
      ContactFormName::create($request->getName()),
      ContactFormTitle::create($request->getTitle()),
      ContactFormEmail::create($request->getEmail()),
      ContactFormUrl::create($request->getUrl()),
      ContactFormGender::create($request->getGender()),
      ContactFormAge::create($request->getAge()),
      ContactFormContact::create($request->getContact())
    );

    // Repositoryに投げて永続化
    $contactForm = $this->contactFormEloquentRepository->create($contactForm);

    // レスポンスとして返却する公開情報はResponseクラスで指定
    return new ContactFormCreateResponse(
      $contactForm->getId()->value(),
      $contactForm->getName()->value(),
      $contactForm->getTitle()->value(),
      $contactForm->getEmail()->value(),
      $contactForm->getUrl()->value(),
      $contactForm->getGender()->value(),
      $contactForm->getAge()->value(),
      $contactForm->getContact()->value()
    );
  }
}
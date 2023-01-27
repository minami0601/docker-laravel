<?php
namespace Packages\UseCase\ContactForm\Create;

interface ContactFormCreateUseCaseInterface
{
  public function __invoke(ContactFormCreateRequest $request): ContactFormCreateResponse;
}
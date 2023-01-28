<?php
namespace Packages\Infrastructure\ContactForm;

use App\Models\ContactForm;
use Packages\Domain\ContactForm\ContactFormCreateEntity;
use Packages\Domain\ContactForm\ContactFormEntity;
use Packages\Domain\ContactForm\ContactFormEntityFactory;

class ContactFormEloquentRepository implements ContactFormRepository
{
  public function create(ContactFormCreateEntity $contactFormCreateEntity): ContactFormEntity
  {
    $contactForm = ContactForm::create([
      'name'    => $contactFormCreateEntity->getName()->value(),
      'title'   => $contactFormCreateEntity->getTitle()->value(),
      'email'   => $contactFormCreateEntity->getEmail()->value(),
      'url'     => $contactFormCreateEntity->getUrl()->value(),
      'gender'  => $contactFormCreateEntity->getGender()->value(),
      'age'     => $contactFormCreateEntity->getAge()->value(),
      'contact' => $contactFormCreateEntity->getContact()->value()
    ]);

    return ContactFormEntityFactory::createFromContact($contactForm);
  }
}
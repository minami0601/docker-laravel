<?php
namespace Packages\Infrastructure\ContactForm;

use App\Models\ContactForm;
use Packages\Domain\ContactForm\ContactFormEntity;
use Packages\Domain\ContactForm\ContactFormEntityFactory;

class ContactFormEloquentRepository implements ContactFormRepository
{
  public function create(ContactFormEntity $contactFormEntity): ContactFormEntity
  {
    $contactForm = ContactForm::create([
      'id'      => $contactFormEntity->getId()->value(),
      'name'    => $contactFormEntity->getName()->value(),
      'title'   => $contactFormEntity->getTitle()->value(),
      'email'   => $contactFormEntity->getEmail()->value(),
      'url'     => $contactFormEntity->getUrl()->value(),
      'gender'  => $contactFormEntity->getGender()->value(),
      'age'     => $contactFormEntity->getAge()->value(),
      'contact' => $contactFormEntity->getContact()->value()
    ]);

    return ContactFormEntityFactory::createFromContact($contactForm);
  }
}
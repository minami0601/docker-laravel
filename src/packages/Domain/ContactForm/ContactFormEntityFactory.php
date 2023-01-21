<?php
namespace Packages\Domain\ContactForm;

use App\Models\ContactForm;

/**
 * Class ContactFormEntityFactory
 * ContactFormのEloquentモデルからドメインオブジェクトである
 * ContactFormEntityを生成する処理を担うクラス。
 *
 * @package Packages\Domain\Contact
 */
class ContactFormEntityFactory
{
  public static function createFromContact(ContactForm $contactForm): ContactFormEntity
  {
    return new ContactFormEntity(
      ContactFormId::create($contactForm->id),
      ContactFormName::create($contactForm->name),
      ContactFormTitle::create($contactForm->title),
      ContactFormEmail::create($contactForm->email),
      ContactFormUrl::create($contactForm->url),
      ContactFormGender::create($contactForm->gender),
      ContactFormAge::create($contactForm->age),
      ContactFormContact::create($contactForm->contact)
    );
  }
}
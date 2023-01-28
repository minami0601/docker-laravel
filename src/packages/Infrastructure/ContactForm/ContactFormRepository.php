<?php

namespace Packages\Infrastructure\ContactForm;

use App\Models\ContactForm;
use Packages\Domain\ContactForm\ContactFormCreateEntity;
use Packages\Domain\ContactForm\ContactFormEntity;

interface ContactFormRepository
{
  public function create(ContactFormCreateEntity $contactFormCreateEntity): ContactFormEntity;
}
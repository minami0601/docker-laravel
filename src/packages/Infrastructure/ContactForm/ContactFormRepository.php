<?php

namespace Packages\Infrastructure\ContactForm;

use App\Models\ContactForm;
use Packages\Domain\ContactForm\ContactFormEntity;

interface ContactFormRepository
{
  public function create(ContactFormEntity $contactFormEntity): ContactFormEntity;
}
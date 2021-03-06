<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
class NotCompromisedPassword extends Constraint
{
 public const COMPROMISED_PASSWORD_ERROR = 'd9bcdbfe-a9d6-4bfa-a8ff-da5fd93e0f6d';
 protected static $errorNames = [self::COMPROMISED_PASSWORD_ERROR => 'COMPROMISED_PASSWORD_ERROR'];
 public $message = 'This password has been leaked in a data breach, it must not be used. Please use another password.';
 public $threshold = 1;
 public $skipOnError = \false;
}

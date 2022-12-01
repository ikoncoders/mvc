<?php 

namespace Ikonc\Validation;

use Ikonc\Validation\Rules\MaxRule;
use Ikonc\Validation\Rules\EmailRule;
use Ikonc\Validation\Rules\UniqueRule;
use Ikonc\Validation\Rules\BetweenRule;
use Ikonc\Validation\Rules\AlphaNumRule;
use Ikonc\Validation\Rules\RequiredRule;
use Ikonc\Validation\Rules\ConfirmedRule;

trait RulesMapper
{
    protected static array $map = [
        'required' => RequiredRule::class,
        'alnum'    => AlphaNumRule::class,
        'max'      => MaxRule::class,
        'between'  => BetweenRule::class,
        'email'    => EmailRule::class,
        'confirmed'=> ConfirmedRule::class,
        'unique'   => UniqueRule::class,
    ];

    public static function resolve(string $rule, $options)
    {
        return new static::$map[$rule](...$options);
    }
}
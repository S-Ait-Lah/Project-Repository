<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TableLocations extends Enum
{
    const OptionOne = 1;
    const OptionTwo = 2;
    const OptionThree =3;

    public static function cases(){
        return[
            self::OptionOne => 'Inside',
            self::OptionTwo => 'Outside',
            self::OptionThree => 'Font'
        ];

    }
}

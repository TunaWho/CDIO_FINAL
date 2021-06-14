<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CarType extends Enum
{
    const Motorcycle =   0;
    const Truck =   1;
    const Car = 2;
}

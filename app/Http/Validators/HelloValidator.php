<?php
/**
 * Created by PhpStorm.
 * User: starboard
 * Date: 2019/04/25
 * Time: 15:41
 */

namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters)
    {
        return $value % 2 == 0; // 入力された数値が偶数なら許可、奇数なら不許可。
    }
}
<?php

namespace App\Http\Requests;

use App\Validate\BaseValidate;

class GoodValidator extends BaseValidate
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    //验证规则
    protected $rule =[

    ];
    //自定义验证信息
    protected $message = [

    ];

    //自定义场景
    protected $scene = [

    ];
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Good;
use App\Http\Models\GoodsColumn;
use App\Http\Requests\GoodValidator;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    protected $goodsModel;
    protected $goodsColumnModel;

    public function __construct()
    {
        parent::__construct();

        $this->goodsModel = new Good();
        $this->goodsColumnModel = new GoodsColumn();
    }

    public function index(Request $request)
    {

    }


    public function create()
    {
        $GoodValidator = new GoodValidator();

        $request_data = [
            'title' => '我是文章的标题',
            'content' => '我是文章的内容',
        ];
        if (!$GoodValidator->scene('add')->check($request_data)) {
            var_dump($GoodValidator->getError());
        }
    }

    /**
     * 修改文章
     *
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateValidator $request, $id)
    {

    }

    /**
     * 删除文章
     *
     * @param $id
     * @return array
     */
    public function destroy($id)
    {
    }
}

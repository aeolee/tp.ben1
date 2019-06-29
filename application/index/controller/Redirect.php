<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Redirect extends Controller
{
    /**
     * 
     * @route('redirect')
     */
    public function index(Request $request)
    {
        return redirect($request->get('url'));
    }
}

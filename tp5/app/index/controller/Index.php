<?php
/**
 * Created by PhpStorm.
 * User: 86159
 * Date: 2020/4/16
 * Time: 14:31
 */
namespace app\index\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController{

     public function index(){
         $cheng=[
             'name'=>'zhang',
             'table'=>1345,
             'sex' =>'男',
         ];
        View::assign('cheng',$cheng);
        return View::fetch();
//         $cheng=[
//             'name'=>'zhang',
//             'table'=>1345,
//             'sex' =>'男',
//         ];
//         print_r($cheng);exit;
//         return view('index',$cheng);
}

}
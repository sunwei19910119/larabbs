<?php
/**
 * Created by PhpStorm.
 * User: sunwei
 * Date: 2018/7/26
 * Time: 上午11:09
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //获取登录用户的所有通知
        $notifications = Auth::user()->notifications()->paginate(20);
        return view('notifications.index', compact('notifications'));
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    //通过URL访问  http://localhost:8888/index.php/Home/Index/login

    public function  login($username,$password)
    {
        echo '{"event": "0","msg": "success"}';
    }
}
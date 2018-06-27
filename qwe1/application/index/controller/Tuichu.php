<?
namespace app\index\controller;
use think\Controller;

		class Tuichu extends Controller
		{
public function logout(){
    //销毁session
    session("user", NULL);
    //跳转页面
    $this->redirect('Login/index/index');
   
}
}
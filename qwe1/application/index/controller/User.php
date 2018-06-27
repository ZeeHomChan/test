<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User as UserModel;
use think\Request;
use think\Session;
class User extends Controller
{
		public function register()
		{
			return view();
		}
	public function handleRegister()
	{
		$user=new UserModel;
		if($user->allowField(true)->validate(true)->save(input('post.')))
		{
			$this->assign('user',$user);
			return $this->fetch();
		}
		else
			return $user->getError();
	}


	public function login()
	{
     return view();
	}
	public function handleLogin(Request $request){
       $logname=$request->post('logname');
       $password=$request->post('password');
       $mess="";
       if($logname==''||$password=''){
       	$mess="<script>alert('用户名密码为空');window.history.back(-1); </script>";
       }
       else{
       	$list=UserModel::where('logname',$logname)->select();

       	if(count($list)=="")
       		$mess="<script>alert('用户不存在');window.history.back(-1); </script>";
       else
			{
				if(Session::has('logname')&&Session::get('logname')==$logname)
					$mess="<script>alert('用户已经登录'); window.history.back(-1);</script>";
				else
				{
					$mess="<script>alert('登陆成功');
                    window.history.back(-1); </script>;";
					Session::set('logname',$logname);}

       }

	}
	return $mess;
}
}
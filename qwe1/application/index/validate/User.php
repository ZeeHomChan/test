<?php
namespace app\index\validate;
use think\validate;
class User extends validate
{
	protected $rule=[
		'logname'=>'require',
		'password'=>'require|min:6|max:20|alphaNum',
		'passwordagain'=>'require|confirm:password',
		'phone'=>'number|length:11',
	];
}
?>
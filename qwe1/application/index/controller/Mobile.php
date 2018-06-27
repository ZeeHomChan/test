<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Mobile as MobileModel;
use app\index\model\MobileClassify;
use think\Request;

class Mobile extends Controller{
	public function liuLan(){
		$list=MobileClassify::all();
		$this->assign('list',$list);
		return $this->fetch();
		}
		
	public function fyxs(Request $request){
		$id=$request->post('sjlb');
		$mobile=MobileModel::all(['id'=>$id]);
		$this->assign('mobile',$mobile);
		return $this->fetch();
		}


	public function ckxj($version){
		$mb=MobileModel::where('mobile_version',$version)->select();
		$this->assign('mb',$mb);
		return $this->fetch();
		}
	}
		

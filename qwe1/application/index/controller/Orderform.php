<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use think\Request;
use app\index\model\Orderform as OrderformModel;

use app\index\model\Shoppingcart as ShoppingcartModel;
use app\index\controller\Shoppingcart;

class  Orderform extends Controller{
	public function scdd(Request $request){
		$list=$request->post('sp/a');

		if(count($list)!=0)
		{
			$logname=Session::get('logname');
			$sc=ShoppingcartModel::where('mobile_version','in',$list)->select();
			$mess="";
			$sum=0;
			foreach($sc as $s){
				$mess.=$s['mobile_version'].','.$s['mobile_name'].','.$s['mobile_price'].','.$s['num'].'<br>';
				$sum+=$s['mobile_price']*$s['num'];
			}
	OrderformModel::insert(['logname'=>$logname,'mess'=>$mess,'sum'=>$sum]);
	return "<script>alert('购买成功，请在订单中查询');
                    window.history.back(-1); </script>;";
		}
		else
		{
			$shop=new Shoppingcart;
			return $shop->ckgwc();
		}
	}
	public function ckdd()
	{
		if(Session::has('logname')){
			$logname=Session::get('logname');
			$Orderform=OrderformModel::all(['logname'=>$logname]);
			$sum=0;
			foreach($Orderform as $or)
			{
				$sum+=$or->sum;
			}
			$this->assign('Orderform',$Orderform);
			$this->assign('sum',$sum);
			return $this->fetch();
		}
		else
		{
			return $this->fetch('User/login');
		}
	}
}
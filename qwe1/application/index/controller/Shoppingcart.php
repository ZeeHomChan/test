<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Mobile as MobileModel;
use app\index\model\Shoppingcart as ShoppingcartModel;
use think\Session;

class Shoppingcart extends controller
{
public function jrgwc($version){
$mb=MobileModel::where('mobile_version',$version)->find();
$sc=shoppingcartModel::where('mobile_version',$version)->find();
if (Session::has('logname')) {
      if(count($sc)==0){
     ShoppingcartModel::insert(['mobile_version'=>$mb['mobile_version'],
      'mobile_name'=>$mb['mobile_name'],'mobile_price'=>$mb['mobile_price'],
      'num'=>1,'logname'=>Session::get('logname')]);
     return "<script>alert('加入购物车成功');window.history.back(-1); </script>";
   }
  else{
    shoppingcartModel::where('mobile_version',$version)->update(['num'=>$sc['num']+1]);
    return "<script>alert('加入购物车成功');window.history.back(-1); </script>";
  }
}
else{
return $this->fetch('User/login');
 }
}

  public function ckgwc(){
      if (Session::has('logname')) {
   $logname=Session::get('logname');
   $Shoppingcart=ShoppingcartModel::all(['logname'=>$logname]);
   $this->assign('Shoppingcart',$Shoppingcart);
   return $this->fetch('Shoppingcart/ckgwc');
  }
 
else {
  return $this->fetch('User/login');
 }
}
 public function gbsl($version,$num){
  
  ShoppingcartModel::where('mobile_version',$version)->update(['num'=>$num]);
  return $this->ckgwc();
 }

  public function scsp($version){
  ShoppingcartModel::where('mobile_version',$version)->delete();
  return $this->ckgwc();
 }
}

<?php
namespace app\index\model;
use think\Model;

class Mobile extends Model{
	protected $table='mobileform';
	public function mobileClassify(){
		return $this->hasOne('MobileClassify');
		}
	
	}
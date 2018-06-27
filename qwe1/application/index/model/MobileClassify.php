<?php
namespace app\index\model;
use think\Model;

class Mobileclassify extends Model{
	public function mobile(){
		return $this->hasMany('Mobile');
		}
	}
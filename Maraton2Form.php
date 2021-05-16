<?php

namespace app\models;
use yii\base\Model;

class Maraton2Form extends Model{
	public $num;

	public function attributeLabels(){
		return[
			'num'=>'Numero Entero'
		];
	}
	public function rules(){
		return[
			['num','required'],
			['num','integer','min'=>2,'max'=>1000]
		];
	}
}
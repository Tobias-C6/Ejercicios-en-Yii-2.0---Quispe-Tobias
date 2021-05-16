<?php

namespace app\models;
use yii\base\Model;

class Maraton3Form extends Model{
	public $palabra;

	public function attributeLabels(){
		return[
			'palabra'=>'Palabra'
		];
	}
	public function rules(){
		return[
			['palabra','required'],
			['palabra','match','pattern' => '/^[a-z]/i']
		];
	}
}
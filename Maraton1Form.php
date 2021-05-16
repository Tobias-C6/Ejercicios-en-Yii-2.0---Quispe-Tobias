<?php

namespace app\models;
use yii\base\Model;

class Maraton1Form extends Model{
	public $N;

	public function attributeLabels(){
		return[
			'N'=>'Numero Entero'
		];
	}
	public function rules(){
		return[
			['N','required'],
			['N','integer','min'=>3,'max'=>30]
		];
	}
}
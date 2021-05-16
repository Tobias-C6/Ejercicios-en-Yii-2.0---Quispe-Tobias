<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Maraton1Form;
use app\models\Maraton2Form;
use app\models\Maraton3Form;
use Yii;

class MaratonController extends Controller{
	public function actionProb1(){
		$model=new Maraton1Form;
		$sM3=0;
		$sumP=0;
		$sumI=0;
		$M5=0;
		$factorial=1;
		if ($model->load(Yii::$app->request->post()) && $model->validate()){

			for ($i=1; $i <= $model->N; $i++) { 
				
				$factorial=$factorial*$i;
				if (($i%3==0)&&($model->N!=($i%5==0))) {
					$sM3=($sM3+$i);
				}
				if (($i%2==0)) {
					$sumP=$sumP+$i;
				}else{
					$sumI=$sumI+$i;
				}
				$sumPI=$sumP-$sumI;
			}
			return $this->render('vistaDos-P1',['model'=>$model,'factorial'=>$factorial,'sM3'=>$sM3,'sumPI'=>$sumPI]);
		} else {
			return $this->render('vistaUno-P1',['model'=>$model]);
		}
	}
	public function actionProb2(){
		$model=new Maraton2Form;
		$cont=0;
		if ($model->load(Yii::$app->request->post()) && $model->validate()){
			
           	return $this->render('vistaDos-P2',['model'=>$model,'cont'=>$cont]);
		} else {
			return $this->render('vistaUno-P2',['model'=>$model]);
		}
	}
	public function actionProb3(){
		$model=new Maraton3Form;

		if ($model->load(Yii::$app->request->post()) && $model->validate()){

			$palcC=$model->palabra;

			return $this->render('vistaDos-P3',['model'=>$model,'palcC'=>$palcC]);
		} else {
			return $this->render('vistaUno-P3',['model'=>$model]);
		}
	}
}

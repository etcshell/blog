<?php

Yii::import('zii.widgets.CPortlet');

class Topcomment extends CPortlet
{
	protected function renderContent()
	{
		$criteria=new CDbCriteria(array(
		'condition'=>'status=2',
		'order'=>'id DESC',
		'limit'=>5,
		));
		$model = Comment::model()->findAll($criteria);
		$this->render('topComment',array('model'=>$model));
	}
}
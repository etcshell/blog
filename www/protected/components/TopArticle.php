<?php

Yii::import('zii.widgets.CPortlet');

class TopArticle extends CPortlet
{

	protected function renderContent()
	{
		$criteria=new CDbCriteria(array(
		'condition'=>'status=2',
		'order'=>'id DESC',
		'limit'=>5,
		));
		$model = Post::model()->findAll($criteria);
		$this->render('topArticle',array('model'=>$model));
	}
}
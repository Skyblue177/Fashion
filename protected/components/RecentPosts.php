<?php

Yii::import('zii.widgets.CPortlet');

class RecentPosts extends CPortlet
{
	public $maxPosts=20;

	public function getRecentPosts()
	{
		return Post::model()->findRecentPosts($this->maxPosts);
	}

	protected function renderContent()
	{
		$this->render('recentPosts');
	}
}

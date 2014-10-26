<?php

class DefaultController extends BackendController
{

	public function actionIndex()
	{
		$this->layout = 'backend.views.layouts.home';

		$this->render('index');
	}
}
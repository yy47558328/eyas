<?php
/**
 * 默认控制器.
 */
class DefaultController extends Controller
{
	public function actionIndex()
	{
		AsHelper::dump(Yii::getPathOfAlias('admin'));
	}
}
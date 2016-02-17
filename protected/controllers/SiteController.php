<?php

class SiteController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionWishlist()
	{
		$this->render('wishlist');
	}
	public function actionAddwishlist()
	{
		$this->render('addwishlist');
	}
	public function actionRemovewishlist()
	{
		$this->render('removewishlist');
	}
	public function actionAbout()
	{
		$this->render('about');
	}
	public function actionStars()
	{
		$this->render('stars');
	}
	public function actionCategory()
	{
		$this->render('category');
	}
	public function actionBlog1(){
		$this->render('blog1');
	}
	public function actionBlog2(){
		$this->render('blog2');
	}
	public function actionBlog3(){
		$this->render('blog3');
	}

	public function actionCampagne(){
		$this->render('campagne');
	}
	public function actionCommitment(){
		$this->render('commitment');
	}

	public function actionFaq(){
		$this->render('faq');
	}
	public function actionJD(){
		$this->render('JD');
	}
	public function actionMaterials(){
		$this->render('materials');
	}
	public function actionLocation(){
		$this->render('location');
	}
	public function actionPageop(){
		$this->render('pageop');
	}
	public function actionStore($id)
	{
		$sql = "select * from same_store where id = ".intval($id);
		$store = Yii::app()->db->createCommand($sql)->queryRow();
		$this->render('store', array('store' => $store));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
}
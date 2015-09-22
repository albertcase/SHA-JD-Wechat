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

	public function actionAccesoires()
	{
		$this->render('accesoires');
	}
	public function actionWishlist()
	{
		$this->render('wishlist');
	}
	public function actionAbout()
	{
		$this->render('about');
	}
	public function actionStar()
	{
		$this->render('stars');
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

	public function actionChaussures(){
		$this->render('chaussures');
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
	public function actionSac_femme(){
		$this->render('sac_femme');
	}
	public function actionSac_homme(){
		$this->render('sac_homme');
	}
	public function actionSac_homme_p1(){
		$this->render('sac_homme_p1');
	}
	public function actionSac_homme_p2(){
		$this->render('sac_homme_p2');
	}
	public function actionSac_homme_p3(){
		$this->render('sac_homme_p3');
	}
	public function actionSac_homme_p4(){
		$this->render('sac_homme_p4');
	}
	public function actionSac_homme_p5(){
		$this->render('sac_homme_p5');
	}
	public function actionSac_homme_p6(){
		$this->render('sac_homme_p6');
	}
	public function actionSac_homme_p7(){
		$this->render('sac_homme_p7');
	}
	public function actionSac_femme_p1(){
		$this->render('sac_femme_p1');
	}
	public function actionSac_femme_p2(){
		$this->render('sac_femme_p2');
	}
	public function actionSac_femme_p3(){
		$this->render('sac_femme_p3');
	}
	public function actionSac_femme_p4(){
		$this->render('sac_femme_p4');
	}
	public function actionSac_femme_p5(){
		$this->render('sac_femme_p5');
	}
	public function actionSac_femme_p6(){
		$this->render('sac_femme_p6');
	}
	public function actionSac_femme_p7(){
		$this->render('sac_femme_p7');
	}
	public function actionSac_femme_p8(){
		$this->render('sac_femme_p8');
	}
	public function actionSac_femme_p9(){
		$this->render('sac_femme_p9');
	}
	public function actionSac_femme_p10(){
		$this->render('sac_femme_p10');
	}
	public function actionAccessories_p1(){
		$this->render('accessories_p1');
	}
	public function actionAccessories_p2(){
		$this->render('accessories_p2');
	}
	public function actionAccessories_p3(){
		$this->render('accessories_p3');
	}
	public function actionAccessories_p4(){
		$this->render('accessories_p4');
	}
	public function actionChaussures_p1(){
		$this->render('chaussures_p1');
	}
	public function actionChaussures_p2(){
		$this->render('chaussures_p2');
	}
	public function actionChaussures_p3(){
		$this->render('chaussures_p3');
	}
	public function actionChaussures_p4(){
		$this->render('chaussures_p4');
	}
	public function actionChaussures_p5(){
		$this->render('chaussures_p5');
	}
	public function actionChaussures_p6(){
		$this->render('chaussures_p6');
	}
	public function actionChaussures_p7(){
		$this->render('chaussures_p7');
	}
	public function actionChaussures_p8(){
		$this->render('chaussures_p8');
	}
	public function actionChaussures_p9(){
		$this->render('chaussures_p9');
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
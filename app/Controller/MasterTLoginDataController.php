<?php
App::import('Model','TLoginData');

class MasterTLoginDataController extends Controller {

	// 使用するヘルパを設定
	//public $helpers = array('emp_no','mail_address','password');

	 /**
	 * 初期表示アクション
	 */
	public function index(){
		//何もない場合は wiss1/app/View/[コントローラ名]/[アクションメソッド名].ctpに遷移

		$this->TLoginData = new TLoginData;
		// Modelから記事一覧を取得 ⇒ Viewへ送る
		 $this->set('loginDatas', $this->TLoginData->find('all'));
	}

	public function back(){
		$this->redirect('/master');
	}

}

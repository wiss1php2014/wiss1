<?php
App::import('Model','TLoginData');

class MenuController extends AppController {

	/**
	 * 初期表示アクション
	 */
	public function index(){
		//何もない場合は wiss1/app/View/[コントローラ名]/[アクションメソッド名].ctpに遷移
		//$empNo = $this->Session->read(SESSION_KEY);
// 		$empNo = $this->_getSessionEmpNo();
// 		$this->set('xxx',$empNo);
	}

	/**
	 * マスタメンテナンス画面遷移アクション
	 */
	public function master() {
		// 画面に渡す変数をセット
		$this->redirect('/master');
	}

	/**
	 * MyProfile一覧画面遷移アクション
	 */
	public function myProfile() {
		// 画面に渡す変数をセット
		$this->set('message','MyProfile一覧画面に遷移');
	}

	/**
	 * 経歴書確認画面遷移アクション
	 */
	public function career() {
		// 画面に渡す変数をセット
		$this->set('message','経歴書確認画面に遷移');
	}

}
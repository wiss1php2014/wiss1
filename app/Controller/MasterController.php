<?php

class MasterController extends Controller {

	/**
	 * 初期表示アクション
	 */
	public function index(){
		//何もない場合は wiss1/app/View/[コントローラ名]/[アクションメソッド名].ctpに遷移
	}

	public function loginData() {

		// 画面に渡す変数をセット
		$this->redirect('/masterTLoginData');

	}

	public function employeeData() {

		// 画面に渡す変数をセット
		$this->set('message','社員データ管理画面に遷移');

	}

	public function back(){
		$this->redirect('/menu/index');
	}

}

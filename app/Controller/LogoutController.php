<?php

/**
 * ログアウトコントローラクラス
 */
class LogoutController extends AppController {
	/**
	 * ログアウトアクション
	 */
	public function index(){
		$this->_deleteSessionEmpNo();
		$this->redirect('/login');
	}
}
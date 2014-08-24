<?php
App::import('Model','TLoginData');

class MenuController extends Controller {

	/**
	 * 初期表示アクション
	 */
	public function index(){
		//何もない場合は wiss1/app/View/[コントローラ名]/[アクションメソッド名].ctpに遷移
	}

	/**
	 * マスタメンテナンス画面遷移アクション
	 */
	public function master() {
		// 画面に渡す変数をセット
		$this->set('message','マスタメンテナンス画面に遷移');
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

	/**
	 * ログアウトアクション
	 */
	public function back(){
		$this->redirect('/login');
	}

}
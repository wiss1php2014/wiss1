<?php
// TLoginDataっていうモデル(エンティティ)クラスをインポート
App::import('Model','TLoginData');

/**
 * ログインコントローラクラス
 */
class LoginController extends AppController {

	/**
	 * 初期表示アクション
	 */
	public function index(){
		//何もない場合は wiss1/app/View/[コントローラ名]/[アクションメソッド名].ctpに遷移
		$password ='';
		$aaad = '';
	}

	/**
	 * 認証処理アクション
	 */
	public function auth() {

		// フォームから値を取得
		$mailAddress = $this->data["mailAddress"];
		$password = $this->data["password"];

		// 検索条件を設定
		$conditions = array(
				'conditions' =>array(
								"mail_address" => $mailAddress,
								"password" => $password
								)
		);

		// モデル(エンティティ)クラスのインスタンスを生成
		$this->TLoginData = new TLoginData;

		// 検索条件を使って検索処理(SELECT * FROM t_login_datas WHERE... )
		$result = $this->TLoginData->find('all', $conditions);

		// 判定
		if(empty($result)){
			// 失敗の場合のリダイレクト
			$this->redirect('index');
		}else{
			// 成功の場合のリダイレクト
			$this->redirect('/menu/index');
		}
	}

}
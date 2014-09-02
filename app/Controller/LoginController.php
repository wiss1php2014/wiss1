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
		$email = "";
		$this->set('email', $email);
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

		// 検索処理
		$result = $this->TLoginData->find('first', $conditions);

		// 判定
		if(empty($result)){
			// 失敗の場合のリダイレクト
			$this->set('email', $mailAddress);
			$this->set('errFlg', "true");
			$this->render('index');
		}else{
			// 成功の場合のリダイレクト
			$employeeNo = $result['TLoginData']['emp_no'];
			$this->Session->write(SESSION_KEY, $employeeNo);
			$this->redirect('/menu/index');
		}
	}

}
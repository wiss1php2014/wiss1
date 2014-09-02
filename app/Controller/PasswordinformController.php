<?php
// TLoginDataっていうモデル(エンティティ)クラスをインポート
App::import('Model','TLoginData');
App::uses( 'CakeEmail', 'Network/Email');

/**
 * パスワード通知コントローラクラス
 */
class PasswordinformController extends AppController {


	/**
	 * 初期表示アクション
	 */
	public function index(){
		$mailAddress = '';
		$errMsg = '';
		$this->set('mailAddress',$mailAddress);
		$this->set('errMsg', $errMsg);
	}

	/**
	 * メール送信アクション
	 */
	public function send() {
		$errMsg = '';

		$mailAddress = $this->data["mailAddress"];

		// 検索条件を設定
		$conditions = array(
				'conditions' =>array(
						"mail_address" => $mailAddress,
				)
		);

		// モデル(エンティティ)クラスのインスタンスを生成
		$this->TLoginData = new TLoginData;

		// 検索条件を使って検索処理(SELECT * FROM t_login_datas WHERE... )
		$result = $this->TLoginData->find('first', $conditions);

		// 判定
		if(empty($result)){
			// 失敗の場合
			$errMsg = 'メールアドレスが登録されていません<br/>';
			$this->set('errMsg', $errMsg);
			$this->set('mailAddress',$mailAddress);
			$this->render('index');
		}else{
			// メールを送信する
			$pwd = $result['TLoginData']['password'];
			$email = new CakeEmail( 'gmail');                      		// インスタンス化
			$email->from( array( 'lcmt157@gmail.com' => 'PHP研修自動送信メール'));		// 送信元
			$email->to($mailAddress);                      				// 送信先
			$email->subject( 'メールタイトル');							// メールタイトル
			$email->send('あなたのパスワードは'.$pwd.'です');			// メール送信

			// 成功の場合のリダイレクト(パラメータもセットする)
			$this->redirect(array('action' => 'complete', $mailAddress));
		}
	}

	/**
	 * 完了表示アクション
	 */
	public function complete($mailAddress){
		$this->set('message',$mailAddress);
	}

}
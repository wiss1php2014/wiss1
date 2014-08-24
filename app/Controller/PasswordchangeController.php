<?php
// TLoginDataっていうモデル(エンティティ)クラスをインポート
App::import('Model','TLoginData');
App::uses('Sanitize', 'Utility');
/**
 * パスワード変更コントローラクラス
 */
class PasswordchangeController extends AppController {

	/**
	 * 初期表示アクション
	 */
	public function index(){
		$mailAddress = '';
		$nowPassword = '';
		$newPassword = '';
		$newPasswordConfirm = '';
		$errMsg = '';

		$this->set('mailAddress',$mailAddress);
		$this->set('nowPassword',$nowPassword);
		$this->set('newPassword',$newPassword);
		$this->set('newPasswordConfirm',$newPasswordConfirm);
		$this->set('errMsg',$errMsg);
	}

	/**
	 * パスワード変更処理アクション
	 */
	public function update() {
		// パラメータ取得
		$errMsg;
		$mailAddress = $this->data["mailAddress"];
		$nowPassword = $this->data["nowPassword"];
		$newPassword = $this->data["newPassword"];
		$newPasswordConfirm = $this->data["newPasswordConfirm"];

		$errMsg='';
		// 入力チェック
		if(empty($mailAddress)){
			$errMsg = $errMsg.'<font color="red">メールアドレスを入力してください</font><br/>';
		}
		if(empty($nowPassword)){
			$errMsg = $errMsg.'<font color="red">変更前のパスワードを入力してください</font><br/>';
		}
		if(empty($newPassword)){
			$errMsg = $errMsg.'<font color="red">変更後のパスワードを入力してください</font><br/>';
		}
		if(empty($newPasswordConfirm)){
			$errMsg = $errMsg.'<font color="red">確認用のパスワードを入力してください</font><br/>';
		}

		if($nowPassword===$newPassword){

		}else{
			$errMsg = $errMsg.'<font color="red">確認用のパスワードが違います</font><br/>';
		}

		if(empty($errMsg)){
			$this->set('mailAddress',$mailAddress);
			$this->set('nowPassword',$nowPassword);
			$this->set('newPassword',$newPassword);
			$this->set('newPasswordConfirm',$newPasswordConfirm);
			$this->set('errMsg',$errMsg);
			$this->render('index');
			return;
		}

		// モデル(エンティティ)クラスのインスタンスを生成
		$this->TLoginData = new TLoginData;

		// 存在チェック
		// 検索条件を使って検索処理
		// 検索条件を設定
		$conditions = array(
				'conditions' =>array(
						"mail_address" => $mailAddress,
				)
		);
		$result = $this->TLoginData->find('first', $conditions);

		if(!empty($result)){
			// 処理
			// 更新する内容を設定
			$newPassword = '"' . Sanitize::escape( $newPassword ) . '"';

			$this->TLoginData->updateAll(
					array("password" => $newPassword)// 更新対象
					,
					array("mail_address" => $mailAddress)// 条件
			);

			// 成功の場合のリダイレクト(パラメータもセットする)
			$this->redirect('complete');

		}else{
			// 失敗の場合は戻る
			// エラーメッセージ
			$errMsg = $errMsg.'<font color="red">メールアドレスが登録されていません</font><br/>';
			$this->set('errMsg',$errMsg);

			// 入力値
			$this->set('mailAddress',$mailAddress);
			$this->set('nowPassword',$nowPassword);
			$this->set('newPassword',$newPassword);
			$this->set('newPasswordConfirm',$newPasswordConfirm);
			// 遷移
			$this->render('index');
		}
	}

	/**
	 * 完了表示アクション
	 */
	public function complete(){
		// 画面に渡す変数をセット
		$this->set('message','パスワードを変更しました！');
	}

}
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

	public function preUpdate(){

		// 選択された従業員番号を取得
		// 不要な文字が混入しているため、前半4文字のみを使用する。
		$hiddenEmpNo = substr($this->data["hidden_upd_no"],0,4);

		if ($hiddenEmpNo=="0000"){
			$this->redirect('index');
		};

		// 検索条件を設定
		$conditions = array(
				'conditions' =>array(
						"emp_no" => $hiddenEmpNo,
				)
		);

		// モデル(エンティティ)クラスのインスタンスを生成
		$this->TLoginData = new TLoginData;

		// 指定した条件で検索
		$this->set('loginData', $this->TLoginData->find('all', $conditions));
	}

	public function delete(){

		// 選択された従業員番号を取得
		// 不要な文字が混入しているため、前半4文字のみを使用する。
		$hiddenEmpNo = substr($this->data["hidden_del_no"],0,4);

		if ($hiddenEmpNo=="0000"){
			$this->redirect('index');
		};

		// モデル(エンティティ)クラスのインスタンスを生成
		$this->TLoginData = new TLoginData;

		$this->TLoginData->delete($hiddenEmpNo);

		$this->redirect('index');
	}

	public function back(){
		$this->redirect('/master');
	}

}

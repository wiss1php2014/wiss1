<?php
// T_ProfileDataっていうモデル(エンティティ)クラスをインポート
App::import('Model','TEmployeeData');

class MyProfileController extends Controller {


	/**
	 * 初期表示アクション
	 */
	public function index(){

		$resultList = $this->Session->read('resultList');
		$empNo = $this->Session->read('empNo');
		$empName = $this->Session->read('empName');
		$joinedDate = $this->Session->read('joinedDate');

		// 画面に渡す変数をセット
		$this->set('resultList', $resultList);
		$this->set('empNo', $empNo);
		$this->set('empName', $empName);
		$this->set('joinedDate', $joinedDate);
		$this->Session->delete('resultList');
		$this->Session->delete('empNo');
		$this->Session->delete('empName');
		$this->Session->delete('joinedDate');
	}

	/**
	 * 一覧検索アクション
	 */
	public function search(){

		$resultList = null;

		// モデル(エンティティ)クラスのインスタンスを生成
		$this->TEmployeeData = new TEmployeeData;
// 		$this->TProfileData = new TProfileData;

		//フォームから値を取得
		$empNo = $this->data["empNo"];
		$empName = $this->data["empName"];
		$joinedDate = $this->data["joinedDate"];

		$options['conditions'] = array();
		// 検索条件
		if (!empty($empNo)) {
			$options['conditions'] += array('TEmployeeData.emp_no' => $empNo);
		}
		if (!empty($empName)) {
// 名前を苗字漢字両方持つカラムをDBに追加してもらう必要あり！！
			$options['conditions'] += array('TEmployeeData.emp_nm_kanji_name LIKE' => '%'.$empName.'%');
		}
		if (!empty($joinedDate)) {
			$options['conditions'] += array('TEmployeeData.joined_date LIKE' => $joinedDate.'%');
		}
		// 結合条件
		$options['joins'][] = array(
			'type' => 'INNER',
			'alias' => 'TProfileData',
			'table' => 'T_Profile_Datas',
			'conditions' => 'TEmployeeData.emp_no = TProfileData.emp_no'
		);
		// 取得項目
		$options['fields'] = array(
			'TEmployeeData.emp_no',
			'TEmployeeData.emp_nm_kanji_lastname',
			'TEmployeeData.emp_nm_kanji_name',
			'TEmployeeData.joined_date',
			'TProfileData.create_date',
			'TProfileData.update_ymd'
		);
		// 検索条件を使って検索処理(SELECT * FROM login_datas WHERE... )
		$resultList = $this->TEmployeeData->find('all', $options);

		// 判定
		if(!empty($resultList)){
 			// セッション保存
 			$this->Session->write('resultList', $resultList);
		} else {
			$this->Session->write('resultList', "none");
		}
		// 検索条件入力値保存
 		$this->Session->write('empNo', $empNo);
 		$this->Session->write('empName', $empName);
 		$this->Session->write('joinedDate', $joinedDate);

 		// リダイレクト
		$this->redirect('index');
	}

	public function back(){
		$this->redirect('/menu');
	}

	/**
	 * 登録・変更画面遷移アクション
	 */
	public function update(){
		$this->redirect('/myprofileregistupdate');
	}

}
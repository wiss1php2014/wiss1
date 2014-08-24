<?php
// LoginDataっていうモデル(エンティティ)クラスをインポート
App::import('Model','TProfileData');
//App::uses('Sanitize', 'Utility');
/**
 * パスワード通知コントローラクラス
 */
class MyprofileregistupdateController extends AppController {

	/**
	 * 初期表示アクション
	 */
	public function index(){
		$empNo = '0001'; //TODO 前画面のパラメータから取得
		$hobby = '';
		$nearestStation = '';
		$favoriteFood = '';
		$leastFavoriteFood = '';
		$birthPlace = '';
		$advantage = '';
		$shortcoming = '';
		$question1 = '';
		$question2 = '';
		$question3 = '';
		$question4 = '';
		$question5 = '';
		$question6 = '';
		$question7 = '';
		$question8 = '';
		$question9 = '実は私、○○なんです。';
		$question10 = '';
		$question11 = '';
		$question12 = '';
		$question13 = '';
		$question14 = '';
		$errMsg = '';

		//TODO 社員番号の取得方法が不明
		$this->set('empNo',$empNo);
		$this->set('hobby',$hobby);
		$this->set('nearestStation',$nearestStation);
		$this->set('favoriteFood',$favoriteFood);
		$this->set('leastFavoriteFood',$leastFavoriteFood);
		$this->set('birthPlace',$birthPlace);
		$this->set('advantage',$advantage);
		$this->set('shortcoming',$shortcoming);
		$this->set('question1',$question1);
		$this->set('question2',$question2);
		$this->set('question3',$question3);
		$this->set('question4',$question4);
		$this->set('question5',$question5);
		$this->set('question6',$question6);
		$this->set('question7',$question7);
		$this->set('question8',$question8);
		$this->set('question9',$question9);
		$this->set('question10',$question10);
		$this->set('question11',$question11);
		$this->set('question12',$question12);
		$this->set('question13',$question13);
		$this->set('question14',$question14);
		$this->set('errMsg',$errMsg);
	}

	/**
	 * プロフィール登録処理アクション
	 */
	public function regist() {
		// パラメータ取得
		$errMsg;
		$emp_no = $this->data["empNo"];
		$hobby = $this->data["hobby"];
		$nearestStation = $this->data["nearestStation"];
		$favoriteFood = $this->data["favoriteFood"];
		$leastFavoriteFood = $this->data["leastFavoriteFood"];
		$birthPlace = $this->data["birthPlace"];
		$advantage = $this->data["advantage"];
		$shortcoming = $this->data["shortcoming"];
		$question1 = $this->data["question1"];
		$question2 = $this->data["question2"];
		$question3 = $this->data["question3"];
		$question4 = $this->data["question4"];
		$question5 = $this->data["question5"];
		$question6 = $this->data["question6"];
		$question7 = $this->data["question7"];
		$question8 = $this->data["question8"];
		$question9 = $this->data["question9"];
		$question10 = $this->data["question10"];
		$question11 = $this->data["question11"];
		$question12 = $this->data["question12"];
		$question13 = $this->data["question13"];
		$question14 = $this->data["question14"];

		$errMsg='';

		// モデル(エンティティ)クラスのインスタンスを生成
		$this->TProfileData = new TProfileData;

		// 存在チェック
		// 検索条件を使って検索処理
		// 検索条件を設定
		$conditions = array(
				'conditions' =>array(
						"emp_no" => $emp_no,
				)
		);
		$result = $this->TProfileData->find('first', $conditions);

		// 登録処理
		// 登録する内容を設定
		$this->TProfileData->save(
				array("emp_no" => $emp_no
					, "hobby" => $hobby
					, "nearest_station" => $nearestStation
					, "favorite_food" => $favoriteFood
					, "least_favorite_food" => $leastFavoriteFood
					, "birth_place" => $birthPlace
					, "advantage" => $advantage
					, "shortcoming" => $shortcoming
					, "question1" => $question1
					, "question2" => $question2
					, "question3" => $question3
					, "question4" => $question4
					, "question5" => $question5
					, "question6" => $question6
					, "question7" => $question7
					, "question8" => $question8
					, "question9" => $question9
					, "question10" => $question10
					, "question11" => $question11
					, "question12" => $question12
					, "question13" => $question13
					, "question14" => $question14
					, "create_user" => "r-ide" //TODO
					, "create_date" => "now()"
					, "update_user" => "r-ide" //TODO
					, "update_date" => "now()")
				, false
				, array("emp_no"
					, "hobby"
					, "nearest_station"
					, "favorite_food"
					, "least_favorite_food"
					, "birth_place"
					, "advantage"
					, "shortcoming"
					, "question1"
					, "question2"
					, "question3"
					, "question4"
					, "question5"
					, "question6"
					, "question7"
					, "question8"
					, "question9"
					, "question10"
					, "question11"
					, "question12"
					, "question13"
					, "question14"
					, "create_user"
					, "create_date")
		);

		// 成功の場合のリダイレクト(パラメータもセットする)
		$this->redirect('complete');
	}

	/**
	 * 完了表示アクション
	 */
	public function complete(){
		// 画面に渡す変数をセット
		$this->set('message','マイプロフィールを登録しました！');
	}

}
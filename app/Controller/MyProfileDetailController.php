<?php
App::import('Model','TEmployeeData');

/**
 * ログインコントローラクラス
 */
class MyProfileDetailController extends AppController {

	/**
	 * 初期表示アクション
	 */
	public function index(){

		// リクエストパラメータ取得
		$empNo = $this->request->query['empNo'];

		// 検索条件
		$options['conditions'] = array("TEmployeeData.emp_no" => $empNo);

		// 結合条件
		$options['joins'][] = array(
				'type' => 'LEFT',
				'alias' => 'TProfileDatas',
				'table' => 'T_Profile_Datas',
				'conditions' => 'TEmployeeData.emp_no = TProfileDatas.emp_no'
		);

		// 取得項目
		$options['fields'] = array(
				'TEmployeeData.emp_no',
				'TEmployeeData.emp_nm_kanji_lastname',
				'TEmployeeData.emp_nm_kanji_name',
				'TEmployeeData.emp_nm_kana_lastname',
				'TEmployeeData.emp_nm_kana_name',
				'TEmployeeData.date_of_birth',
				'TEmployeeData.joined_date',
				'TEmployeeData.blood_type',
				'TEmployeeData.blood_type',

				'TProfileDatas.hobby',
				'TProfileDatas.nearest_station',
				'TProfileDatas.favorite_food',
				'TProfileDatas.least_favorite_food',
				'TProfileDatas.birth_place',
				'TProfileDatas.advantage',
				'TProfileDatas.shortcoming',
				'TProfileDatas.question1',
				'TProfileDatas.question2',
				'TProfileDatas.question3',
				'TProfileDatas.question4',
				'TProfileDatas.question5',
				'TProfileDatas.question6',
				'TProfileDatas.question7',
				'TProfileDatas.question8',
				'TProfileDatas.question9',
				'TProfileDatas.question10',
				'TProfileDatas.question11',
				'TProfileDatas.question12',
				'TProfileDatas.question13',
				'TProfileDatas.question14',
								);

		// モデル(エンティティ)クラスのインスタンスを生成
		$this->TEmployeeData = new TEmployeeData;

		// 検索実行
		$result = $this->TEmployeeData->find('first', $options);

		if(empty($result)){
			$this->set('result', $result);
		}else{
			$bloodTypeName;
			if('1' === $result['TEmployeeData']['blood_type'] ){
				$bloodTypeName = 'A';
			}else if('2' === $result['TEmployeeData']['blood_type'] ){
				$bloodTypeName = 'B';
			}else if('3' === $result['TEmployeeData']['blood_type'] ){
				$bloodTypeName = 'O';
			}else if('4' === $result['TEmployeeData']['blood_type'] ){
				$bloodTypeName = 'AB';
			}

			$this->set('bloodTypeName', $bloodTypeName);
			$this->set('result', $result);
		}
	}
}
<?php
// 120秒に設定
set_time_limit(120);

// TEmployeeData
App::import('Model','TEmployeeData');

// エクセル出力用ライブラリ
App::import('Vendor', 'PHPExcel', array('file'=>'phpexcel' . DS . 'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'IOFactory.php'));
App::import('Vendor', 'PHPExcel_Cell_AdvancedValueBinder', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Cell' . DS . 'AdvancedValueBinder.php'));

// Excel95用ライブラリ
App::import('Vendor', 'PHPExcel_Writer_Excel5', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Writer' . DS . 'Excel5.php'));
App::import('Vendor', 'PHPExcel_Reader_Excel5', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Reader' . DS . 'Excel5.php'));

class CareerOutputController extends Controller {


	/**
	 * 初期表示アクション
	 */
	public function index(){

	}

	/**
	 * 経歴書出力アクション
	 */
	public function download(){

		// レイアウトは使わない
		$this->layout = false;

		// ファイル名を作成
		$fileName = '職務経歴書(平野).xls';
		$fileName = mb_convert_encoding($fileName, 'sjis', 'utf-8');

		// 保存ファイルパス
// 			$upload = relpath(TMP);
// 			$upload .= '/excel/';
		$upload = 'C:/Users/hirano/Desktop/';
		$downloadPath = $upload.$fileName;

		$this->set(compact('fileName', 'downloadPath'));

		// DBのデータを読み込む
		// $data = $this->Model->find('all');
		// $this->set('data', $data);

		// エクセルシート
		$objRender = PHPExcel_IOFactory::createReader('Excel5');

		// テンプレートファイルフルパス
// 			$template = realpath(TMP);
// 			$template .= '/excel/';
// 			$templatePath = $template."tmp.xls";
		$template = 'C:/pleiades/workspace/wiss1/app/tmp/excel/';
		$templatePath = $template."tmp.xls";

		$PHPExcel = $objRender->load($templatePath);

		// 表紙への出力
		$PHPExcel->setActiveSheetIndex(0);  // 一番左のシート(0はSheet1)
		$sheet = $PHPExcel->getActiveSheet();

		$sheet->setCellValue('A4', 'ヒラノ　ハヤト');
		$sheet->setCellValue('A5', '平野　隼都');

		// 保存
		$objWrite = new PHPExcel_Writer_Excel5($PHPExcel);
		$objWrite->save($downloadPath);

// 			// エクセルファイルをクライアントに出力
// 			$convertFileName = mb_convert_encoding($fileName, 'sjis', 'utf-8');

// 			// 保存をしてから出力(ダイアログ出力)
// 			Configure::write('debug', 0);  // debugコードを非表示
// 			header('Content-Type: application/octet-stream');
// 			header('Content-Disposition: attachment;filename="' . $convertFileName . '"');
// 			readfile($downloadPath);

		// 遷移
		$this->render('complete');

	}

}

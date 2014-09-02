// カレンダー生成処理メソッド
function calendarInit() {
	// 表示対象の年
	var year = $("#stdDtYear").text();

	// 休日データ（JSON形式）の格納先を取得
	var $dateInput = $('#jsonDate');

	// JSON形式のデータからJavaScriptオブジェクトに変換
	var dateMap = parseJson($dateInput.val());

	// 入力種別の読み込み
	var inputType = $('#inputType').val();

	// 休日データが更新された時の処理
	var updateDataFunc = function(json) {
		$dateInput.val(json);
	};

	// 入力用カレンダー生成
	createDatePicker("#holidayCalendar", getInputDatePickerOption(year, dateMap, inputType, updateDataFunc));
}

// 画面読み込み完了時の初期化処理
$(calendarInit);

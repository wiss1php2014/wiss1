// カレンダー生成処理メソッド
function calendarInit() {
	// 表示対象の年
	var year = $("#stdDtYear").text();

	// 休日データ（JSON形式）の格納先を取得
	var $dateInput = $('#jsonDate');

	// JSON形式のデータからJavaScriptオブジェクトに変換
	var dateMap = parseJson($dateInput.val());

	// 表示用カレンダー生成
	createDatePicker("#holidayCalendar", getViewDatePickerOption(year, dateMap));
}

// 画面読み込み完了時の初期化処理
$(calendarInit);

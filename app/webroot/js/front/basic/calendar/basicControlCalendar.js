//休日の種別
var HOLIDAY_TYPE = {
	// 営業日
	'BUSINESSDAY' : {
		'value' : undefined,
		'css' : 'ui-state-default',
	},
	// 全日休日
	'HOLIDAY' : {
		'value' : 1,
		'css' : 'ui-state-default ui-datepicker-holiday',
	},
	// 半日営業
	'HALFDAY' : {
		'value' : 2,
		'css' : 'ui-state-default ui-datepicker-halfday',
	},
}

// カレンダー入力種別毎のセル選択時の状態変化処理
var INPUT_TYPE = {
	// 休日・半日を選択する場合
	'NORMAL' : function(holidayType) {
		// 次状態の設定
		var nextHolidayType;

		switch (holidayType) {
			case HOLIDAY_TYPE.BUSINESSDAY.value:
				nextHolidayType = HOLIDAY_TYPE.HOLIDAY.value;
				break;
			case HOLIDAY_TYPE.HOLIDAY.value:
				nextHolidayType = HOLIDAY_TYPE.HALFDAY.value;
				break;
			case HOLIDAY_TYPE.HALFDAY.value:
				nextHolidayType = HOLIDAY_TYPE.BUSINESSDAY.value;
				break;
			default:
				// 想定外の値の場合、営業日に設定する
				nextHolidayType = HOLIDAY_TYPE.BUSINESSDAY.value;
				break
		}

		return nextHolidayType;
	},
	// 休日のみ選択する場合
	'ONLY_HOLIDAY' : function(holidayType) {
		// 次状態の設定
		var nextHolidayType;

		switch (holidayType) {
			case HOLIDAY_TYPE.BUSINESSDAY.value:
				nextHolidayType = HOLIDAY_TYPE.HOLIDAY.value;
				break;
			case HOLIDAY_TYPE.HOLIDAY.value:
				nextHolidayType = HOLIDAY_TYPE.BUSINESSDAY.value;
				break;
			default:
				// 想定外の値の場合、営業日に設定する
				nextHolidayType = HOLIDAY_TYPE.BUSINESSDAY.value;
				break
		}
		return nextHolidayType;
	},
}

// 表示用のカレンダーオプションの生成
function getViewDatePickerOption(year, dateMap) {
	return getDatePickerOption(year, dateMap, false, null);
}

// 入力用のカレンダーオプションの生成
function getInputDatePickerOption(year, dateMap, inputType, updateDataFunc) {
	// カレンダーの入力タイプの設定
	var changeFlg = INPUT_TYPE[inputType];

	// 日付選択時の処理定義
	var onSelect = function(dateText, inst) {
		// 休日データの更新
		dateMap[dateText] = changeFlg(dateMap[dateText]);

		// 値の更新処理
		updateDataFunc(JSON.stringify(dateMap));
	};

	return getDatePickerOption(year, dateMap, true, onSelect);
}

// カレンダーの生成
function createDatePicker(id, option) {
	var datePicker = $("#holidayCalendar").datepicker(option);

	// カレンダーの初期フォーカスを消去する
	$('.ui-state-hover').removeClass('ui-state-hover');

	return datePicker;
}

// datepickerへ渡すオプションを生成する
function getDatePickerOption(year, dateMap, isEdit, onSelectFunc) {
	// カレンダー表示先頭日付（1/1）
	var minD = new Date(year, (1 - 1), 1);
	// カレンダー表示末尾日付（12/31）
	var maxD = new Date(year, (12 - 1), 31);

	// datepickerへ渡すオプションを生成する
	var optionObj = {
		// 週の先頭(0:日曜日、1:月曜日、デフォルトは日曜日）
		firstDay : 0,

		// 表示数[行 ,列]
		numberOfMonths : [ 3, 4 ],

		// デフォルトの初期日付（設定しない）
		defaultDate : null,

		// 選択可能な最小の日付を設定する
		minDate : minD,

		// 選択可能な最大の日付を設定する
		maxDate : maxD,

		// 日付表示前の処理
		beforeShowDay : function(date) {
			// 休日データの取得
			holidayType = dateMap[$.datepicker.formatDate("yy/mm/dd", date)]

			// 編集可否・CSSの設定
			switch (holidayType) {
				case HOLIDAY_TYPE.BUSINESSDAY.value:
					return [ isEdit, HOLIDAY_TYPE.BUSINESSDAY.css ]
					break;
				case HOLIDAY_TYPE.HOLIDAY.value:
					return [ isEdit, HOLIDAY_TYPE.HOLIDAY.css ];
					break;
				case HOLIDAY_TYPE.HALFDAY.value:
					return [ isEdit, HOLIDAY_TYPE.HALFDAY.css ];
					break;
				default:
					break
			}
			// 休日データが存在しない場合や想定外の値は営業日扱いとする
			return [ isEdit, HOLIDAY_TYPE.BUSINESSDAY.css ];
		},

		// 日付選択時の動作
		onSelect : onSelectFunc,

	};

	return optionObj;
}

// JSONのパース処理
// パースできない場合はただのObjectを返す
function parseJson(jsonStr) {
	var obj;

	try {
		obj = JSON.parse(jsonStr)
	}
	catch (e) {
		obj = new Object();
	}

	return obj;
}

// defalutDateの日（dd）と同じ値の日(dd)を選択するとdefalutDateの年月日ににフォーカスが設定される不具体の暫定対応
// defaultDateを強制的にカレンダーの表示外の日付に設定して対応する
jQuery(function($) {
	$.datepicker._getDefaultDate = function(inst) {
		return new Date(this._get(inst, "minDate").getTime() - 1);
	}
});

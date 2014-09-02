$(function() {
        // 祝日を配列で確保
        var holidays = [ '2013-04-29', '2013-11-03', '2013-12-24' ];

        $("#datepicker").datepicker({
            numberOfMonths: [1,3],
            beforeShowDay: function(date) {
                // 祝日の判定
                for (var i = 0; i < holidays.length; i++) {
                    var htime = Date.parse(holidays[i]);    // 祝日を 'YYYY-MM-DD' から time へ変換
                    var holiday = new Date();
                    holiday.setTime(htime);                 // 上記 time を Date へ設定

                    // 祝日
                    if (holiday.getYear() == date.getYear() &&
                        holiday.getMonth() == date.getMonth() &&
                        holiday.getDate() == date.getDate()) {
                        return [true, 'holiday'];
                    }
                }
                // 日曜日
                if (date.getDay() == 0) {
                    return [true, 'sunday'];
                }
                // 土曜日
                if (date.getDay() == 6) {
                    return [true, 'saturday'];
                }
                // 平日
                return [true, ''];
            },
            onSelect: function(dateText, inst) {
                $("#date_val").val(dateText);
            }
        });
    });
function startday(){
    // Lấy các element select
    var startDaySelect = document.getElementById("start-day");
    
    // Tạo danh sách ngày từ 1 đến 31
    for (var i = 1; i <= 31; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        startDaySelect.appendChild(option);
    }
}
function endday(){
    var endDaySelect = document.getElementById("end-day");
    for (var i = 1; i <= 31; i++) {
    var option2 = document.createElement("option");
    option2.value = i;
    option2.text = i;
    endDaySelect.appendChild(option2);
    }
}

function startmonth(){
    var startMonthSelect = document.getElementById("start-month");
     // Tạo danh sách tháng từ 1 đến 12
    for (var i = 1; i <= 12; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        startMonthSelect.appendChild(option);
    }
}
function endmonth(){
    var endMonthSelect = document.getElementById("end-month");
    for (var i = 1; i <= 12; i++) {
        var option2 = document.createElement("option");
        option2.value = i;
        option2.text = i;
        endMonthSelect.appendChild(option2);
    }
}

function startyear(){
    var startYearSelect = document.getElementById("start-year");
    // Tạo danh sách năm từ 2020 đến 2024 (hoặc năm hiện tại)
    var currentYear = new Date().getFullYear();
    for (var i = 2020; i <= currentYear; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        startYearSelect.appendChild(option);
    }
}
function endyear(){
    var endYearSelect = document.getElementById("end-year");
    var currentYear = new Date().getFullYear();
    for (var i = 2020; i <= currentYear; i++) {
        var option2 = document.createElement("option");
        option2.value = i;
        option2.text = i;
        endYearSelect.appendChild(option2);
    }
}
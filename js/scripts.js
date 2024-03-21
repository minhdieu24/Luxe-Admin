function day(){
    var startDaySelect = document.getElementById("start-day");
    var endDaySelect = document.getElementById("end-day");
if (startDaySelect.options.length === 0) {
    for (var i = 1; i <= 31; i++) {
      var option = document.createElement("option");
      option.value = i;
      option.text = i;
      startDaySelect.appendChild(option);

      var option2 = document.createElement("option");
      option2.value = i;
      option2.text = i;
      endDaySelect.appendChild(option2);
    }
  }
}
function month(){
var startMonthSelect = document.getElementById("start-month");
  var endMonthSelect = document.getElementById("end-month");
if (startMonthSelect.options.length === 0) {
    for (var i = 1; i <= 12; i++) {
      var option = document.createElement("option");
      option.value = i;
      option.text = i;
      startMonthSelect.appendChild(option);

      var option2 = document.createElement("option");
      option2.value = i;
      option2.text = i;
      endMonthSelect.appendChild(option2);
    }
  }
}
function year(){
  var startYearSelect = document.getElementById("start-year");
  var endYearSelect = document.getElementById("end-year");
  if (startYearSelect.options.length === 0) {
    var currentYear = new Date().getFullYear();
    for (var i = 2020; i <= currentYear; i++) {
      var option = document.createElement("option");
      option.value = i;
      option.text = i;
      startYearSelect.appendChild(option);

      var option2 = document.createElement("option");
      option2.value = i;
      option2.text = i;
      endYearSelect.appendChild(option2);
    }
  }
}
function chart(){
  // Tạo dữ liệu cho biểu đồ
var data = {
  labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
  datasets: [{
    label: "ABC",
    data: [1000, 1500, 1200, 1800, 2000, 1600],
    borderColor: "blue",
    fill: false
  }]
};

// Cấu hình biểu đồ
var options = {
  scales: {
    x: {
      display: true,
      title: {
        display: false,
      }
    },
    y: {
      display: true,
      title: {
        display: false,
      }
    }
  }
};

// Vẽ biểu đồ
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: data,
  options: options
});
}
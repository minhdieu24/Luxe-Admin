$(document).ready(function(){
  $('#TGBatDauIcon').click(function(){
      $('#TGBatDauInput').datetimepicker({
          format: 'DD/MM/YYYY' // Định dạng hiển thị thời gian
      });
      $('#TGBatDauInput').datetimepicker('show'); // Hiển thị datetimepicker khi icon được click
  });

  $('#TGKetThucIcon').click(function(){
      $('#TGKetThucInput').datetimepicker({
          format: 'DD/MM/YYYY' // Định dạng hiển thị thời gian
      });
      $('#TGKetThucInput').datetimepicker('show'); // Hiển thị datetimepicker khi icon được click
  });
});

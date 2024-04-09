function ChooseNgaySinh() {
  var ngaySinhInput = document.getElementById("NgaySinh");
  var ngaySinh = ngaySinhInput.value;
  console.log("Ngày sinh: " + ngaySinh);
}
document.getElementById("NgaySinh").addEventListener("change", ChooseNgaySinh);

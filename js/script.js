//pagination sản phẩm
// Lựa chọn các phần tử DOM
const pagination_startBtn = document.querySelector("#pagination_startBtn"),
  pagination_endBtn = document.querySelector("#pagination_endBtn"),
  prevNext = document.querySelectorAll(".prevNext"),
  numbers = document.querySelectorAll(".link");

// Thiết lập bước khởi đầu
let currentStep = 0; //Biến currentStep được sử dụng để lưu trạng thái hiện tại của bước.

//Hàm cập nhật trạng thái nút
const updateBtn = () => {
  // Nếu ở bước cuối tức là trang cuối
  if (currentStep === 3) {
    pagination_endBtn.disabled = true; //nút "End" sẽ bị vô hiệu hóa
    prevNext[1].disabled = true; //nút "Next" bị vô hiệu hóa
  }
  //Nếu currentStep bằng 0, hoặc đang ở trang đầu tiên
  else if (currentStep === 0) {
    // Nếu ở trang đầu tiên
    pagination_startBtn.disabled = true; //nút "Start" sẽ bị vô hiệu hóa
    prevNext[0].disabled = true; // nút "Previous" bị vô hiệu hóa
  }
  //Nếu currentStep không phải là 0 hoặc 3
  /*tất cả các nút "Start", "End", "Previous" và "Next" đều được kích hoạt để cho phép người dùng di chuyển qua các trang khác nhau. */
  else {
    pagination_endBtn.disabled = false;
    prevNext[1].disabled = false;
    pagination_startBtn.disabled = false;
    prevNext[0].disabled = false;
  }
};

// Add event listeners to the number links
numbers.forEach((number, numIndex) => {
  number.addEventListener("click", (e) => {
    e.preventDefault();
    // Set the current step to the clicked number link
    currentStep = numIndex;
    // Remove the "active" class from the previously active number link
    document.querySelector(".active").classList.remove("active");
    // Add the "active" class to the clicked number link
    number.classList.add("active");
    updateBtn(); // Update the button states
  });
});

// Add event listeners to the "Previous" and "Next" buttons
prevNext.forEach((button) => {
  button.addEventListener("click", (e) => {
    // Increment or decrement the current step based on the button clicked
    currentStep += e.target.id === "pagination_next" ? 1 : -1;
    numbers.forEach((number, numIndex) => {
      // Toggle the "active" class on the number links based on the current step
      number.classList.toggle("active", numIndex === currentStep);
      updateBtn(); // Update the button states
    });
  });
});

// Add event listener to the "Start" button
pagination_startBtn.addEventListener("click", () => {
  // Remove the "active" class from the previously active number link
  document.querySelector(".active").classList.remove("active");
  // Add the "active" class to the first number link
  numbers[0].classList.add("active");
  currentStep = 0;
  updateBtn(); // Update the button states
  pagination_endBtn.disabled = false;
  prevNext[1].disabled = false;
});

// Add event listener to the "End" button
pagination_endBtn.addEventListener("click", () => {
  // Remove the "active" class from the previously active number link
  document.querySelector(".active").classList.remove("active");
  // Add the "active" class to the last number link
  numbers[3].classList.add("active");
  currentStep = 4;
  updateBtn(); // Update the button states
  pagination_startBtn.disabled = false;
  prevNext[0].disabled = false;
});

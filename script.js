const toggleButton = document.getElementById("toggle-button");
const box2Content = document.querySelector(".box3-content");

toggleButton.addEventListener("click", function() {
  box2Content.classList.toggle("hidden");
  box2Content.classList.toggle("visible");
});

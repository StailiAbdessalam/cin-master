let clickk = document.querySelectorAll(".comm");
clickk.forEach((r) => {
  r.addEventListener("click", () => {
    r.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode
      .querySelector(".tach")
      .classList.toggle("agogo");
  });
});
const close = document.getElementById("close");
let popup = document.querySelectorAll(".dropdown-item");
popup.forEach((t) => {
  t.addEventListener("click", () => {
    t.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode
      .querySelector(".popup")
      .classList.add("popuppp");
    t.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode
      .querySelector(".popup")
      .classList.remove("abv");
  });
});
close.addEventListener("click", () => {
  document.querySelector(".popup").classList.toggle("abv");
  document.querySelector(".popup").classList.remove("popuppp");
});

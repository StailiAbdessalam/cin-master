let clickk = document.querySelectorAll(".comm");
clickk.forEach((r) => {
  r.addEventListener("click", () => {
    r.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector(".tach").classList.toggle("agogo");
  });
});


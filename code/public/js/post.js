let clickk = document.querySelectorAll(".comm");
const comment = document.querySelector('.tach');
clickk.forEach((r) => {
  r.addEventListener("click", () => {
    r.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector(".tach").classList.toggle("agogo");
  });
});
comment.style.paddingTop = '20px';

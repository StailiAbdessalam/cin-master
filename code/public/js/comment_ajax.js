const myform = document.querySelectorAll(".commentss");
myform.forEach((taha) => {
  taha.addEventListener("submit", (ta) => {
    ta.preventDefault();
    const formData = new FormData(taha);
    const searchParaps = new URLSearchParams();
    for (const pair of formData) {
      searchParaps.append(pair[0], pair[1]);
    }

    fetch("../../app/controllers/comments.php", {
      method: "post",
      body: searchParaps,
    })
      .then((Response) => {
        return Response.text();
      })
      .then((text) => console.log(text))
      .catch((erour) => console.log(erour));
  });
});

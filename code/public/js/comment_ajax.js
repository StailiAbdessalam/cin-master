const myform = document.querySelectorAll(".commentss");
const comm = document.querySelector(".tach");
myform.forEach((taha) => {
  taha.addEventListener("submit", (ta) => {
    ta.preventDefault();
    const formData = new FormData(taha);
    const postId = formData.get("post_id");
    const postCon = formData.get("content");
    const post = document.querySelector(`.prent[data-id='${postId}']`);
    const commentList = post.querySelector(".tach");
    fetch("../../app/controllers/comments.php", {
      method: "post",
      body: formData,
    })
      .then((Response) => {
        return Response.json();
      })
      .then((data) => {
        const user = data.user;
        const parce = data.comment;
        const comment = `<div class="relative grid grid-cols-1 gap-4 my-8 p-4 mb-8 border rounded-lg bg-white shadow-lg w-full" id="hhh">
<div class="relative flex gap-4">
    <img id="p_comments" src="../../app/prophile_img/${user.img}" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
    <div class="flex flex-col w-full">
        <div class="flex flex-row justify-between">
            <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">${user.nom} ${user.prenom}</p>
            <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
        </div>
        <p class="text-gray-400 text-sm">${parce.created_at}</p>
    </div>
</div>
<p class="-mt-4 text-gray-500">${parce.content}</p>
</div>`;
        commentList.innerHTML = comment + commentList.innerHTML;
        const anuller = document.querySelectorAll("#annuler");
        anuller.forEach((g) => {
          g.value = "";
        });
      })
      .catch((erour) => console.log(erour));
  });
});

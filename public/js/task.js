window.addEventListener("load",function () {
  let head = document.querySelector(".panel-body");
    $(head).on('click','.task',function () {
       $(this).css("text-decoration","line-through");

  });
});
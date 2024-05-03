const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  },
});

const cloud = new Puller();

$("body").on("click", ".panel-nav-toggler", function (e) {
  e.preventDefault();
  $("body").toggleClass("panel-nav-active");
});

$("body").on("click", ".btn-slider:not(.dispose)", function (e) {
  e.preventDefault();
  const target = $(this).data("target");
  $(`.page-slider[data-slider=${target}]`).addClass("active");
});
$("body").on("click", ".btn-slider.dispose", function (e) {
  e.preventDefault();
  $(this).closest(".page-slider").removeClass("active");
});

$.ajaxSetup({
  error: function (xhr, status, error) {
    let messages = JSON.parse(xhr.responseText).messages;
    if (typeof messages == "object") {
      messages = Object.values(messages);
    }
    console.log(messages);
    Toast.fire({
      icon: "error",
      title: messages
    });
  },
});

function tableMenuDrawer(id, menu = []) {
  let menuEl = `<ul id='menu-${id}' class='dropdown-content'>`;
  $.each(menu, function (i, v) {
    if (typeof v == 'string') {
      menuEl += v == "line" ? `<li class="divider" tabindex="-1"></li>` : `<li><a href="#!" class="btn-action" data-action="${v}">${v}</li>`;
    }
    if (typeof v == 'object') {
      const list = {
        action: v.action ?? "action-menu",
        label: v.label ?? "Label Menu",
        class: v.class ?? "",
        data: v.data ?? {},
      };
      let dataAttr = '';
      $.each(list.data, (a,b) => dataAttr += ` data-${a}="${b}"`);
      menuEl += `<li><a href="#!" class="btn-action ${list.class}" data-action="${list.action}"${dataAttr}>${list.label}</li>`;
    }
  });
  menuEl += `</ul>`;
  return menuEl;
}

$(document).ready(function () {
  $("select").formSelect();
});

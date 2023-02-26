document.addEventListener("DOMContentLoaded", function () {
  // SIDEBAR
  var dropdownMenus = document.querySelectorAll(".sidebar-dropdown-menu");
  var menuItems = document.querySelectorAll(
    ".sidebar-menu-item.has-dropdown > a"
  );

  for (var i = 0; i < dropdownMenus.length; i++) {
    dropdownMenus[i].style.display = "none";
  }

  for (var i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener("click", function (e) {
      e.preventDefault();

      var menuItem = this.parentNode;

      if (!menuItem.classList.contains("focused")) {
        var parent = menuItem.parentNode;
        var dropdownMenus = parent.querySelectorAll(".sidebar-dropdown-menu");
        var dropdownItems = parent.querySelectorAll(".has-dropdown");

        for (var j = 0; j < dropdownMenus.length; j++) {
          dropdownMenus[j].style.display = "none";
        }

        for (var j = 0; j < dropdownItems.length; j++) {
          dropdownItems[j].classList.remove("focused");
        }
      }

      var dropdownMenu = this.nextElementSibling;
      dropdownMenu.style.display =
        dropdownMenu.style.display === "block" ? "none" : "block";
      menuItem.classList.toggle("focused");
    });
  }

  // SIDEBAR
});

// // SIDEBAR
// document
//   .querySelectorAll(".sidebar-dropdown-menu")
//   .forEach((menu) => (menu.style.display = "none"));
// document
//   .querySelectorAll(".sidebar-menu-item.has-dropdown > a")
//   .forEach((item) => {
//     item.addEventListener("click", (e) => {
//       e.preventDefault();
//       //   item.nextElementSibling.style.transition = "all 0.3s ease-in";
//       item.nextElementSibling.style.display =
//         item.nextElementSibling.style.cssText = `
//         display: ${
//           item.nextElementSibling.style.display === "block" ? "none" : "block"
//         };
//         transition: all 0.3s ease-in;
//         animation: growDown 300ms ease-in-out forwards;
//       `;
//     });
//   });

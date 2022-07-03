// Navbar Fixed
// window.onscroll = function () {
//   const header = document.querySelector("header");
//   const fixedNav = header.offsetTop;

//   if (window.pageYOffset > fixedNav) {
//     header.classList.add("navbar-fixed");
//   } else {
//     header.classList.remove("navbar-fixed");
//   }
// };

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

const dataPie = {
  labels: ["JavaScript", "PDI", "Python", "Ruby"],
  datasets: [
    {
      label: "My First Dataset",
      data: [150, 220, 50, 100],
      backgroundColor: [
        "rgb(133, 105, 241)",
        "rgb(164, 101, 241)",
        "rgb(101, 143, 241)",
      ],
      hoverOffset: 5,
    },
  ],
};

const configPie = {
  type: "pie",
  data: dataPie,
  options: {},
};

var chartBar = new Chart(document.getElementById("chartPie"), configPie);



var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}


function hideSection() {
  var section = document.querySelector(".cookies");
  section.style.display = "none";
}

document.querySelector(".cookies-si").addEventListener("click", hideSection);
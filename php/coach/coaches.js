function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.classList.toggle("show");
}

let clientContainer = document.querySelector(".client-container");

// clientContainer.innerHTML = '<p>vinit</p><br><p>Manuj</p>'; //working....

const toggleSwitch = document.querySelector('#darkModeToggle');

function switchTheme(e) {
  if (e.target.checked) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }
}

toggleSwitch.addEventListener('change', switchTheme, false);
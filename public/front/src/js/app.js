const offCanvas = document.querySelector("#header-off-canvas");
const navbarToggler = document.querySelector("#navbar-toggler");
const roomSlider = document.querySelector(".swiper-wrapper");
const feedbackBackdrop = document.querySelector("#feedback-backdrop");
const userNameFirst = document.querySelector("#userName-first");
const userNumberFirst = document.querySelector("#userNumber-first");
const userCommentFirst = document.querySelector("#userComment-first");
const userNameSecond = document.querySelector("#userName-second");
const userNumberSecond = document.querySelector("#userNumber-second");
const userCommentSecond = document.querySelector("#userComment-second");

navbarToggler?.addEventListener("click", () => {
  offCanvas.classList.add("open-canvas");
  offCanvas.children[0].classList.remove("-translate-x-[100%]");
  offCanvas.children[0].classList.add("translate-x-o");
});

document.body.addEventListener("click", (e) => {
  if (e.target === offCanvas) {
    offCanvas.children[0].classList.add("-translate-x-[100%]");
    offCanvas.children[0].classList.remove("translate-x-o");
    setTimeout(() => {
      offCanvas.classList.remove("open-canvas");
    }, 100);
  } else if (e.target === feedbackBackdrop) {
    feedbackBackdrop.classList.remove("active-feedback-backdrop");
    feedbackBackdrop.classList.remove("flex");
    feedbackBackdrop.classList.add("hidden");
  }
});

(function () {
  let counter = roomSlider?.childElementCount;
  if (counter == 1) {
    for (let i = 0; i < 4; i++) {
      roomSlider.appendChild(roomSlider.children[0].cloneNode(true));
    }
  } else if (counter == 2) {
    for (let i = 0; i < 2; i++) {
      roomSlider.appendChild(roomSlider.children[0].cloneNode(true));
      roomSlider.appendChild(roomSlider.children[1].cloneNode(true));
    }
  } else if (counter == 3) {
    for (let i = 0; i < 1; i++) {
      roomSlider.appendChild(roomSlider.children[0].cloneNode(true));
      roomSlider.appendChild(roomSlider.children[1].cloneNode(true));
      roomSlider.appendChild(roomSlider.children[2].cloneNode(true));
    }
  } else if (counter == 4) {
    roomSlider.appendChild(roomSlider.children[0].cloneNode(true));
    roomSlider.appendChild(roomSlider.children[1].cloneNode(true));
    roomSlider.appendChild(roomSlider.children[2].cloneNode(true));
    roomSlider.appendChild(roomSlider.children[3].cloneNode(true));
  }
})();

function activeVideo(e) {
  let parent = e.target.parentElement.parentElement.parentElement;
  if (parent.className.includes("img-content"))
    parent.querySelector("a img").click();
  else parent.querySelector(".img-content a img").click();
}

function sentFeedback() {
  feedbackBackdrop.classList.add("active-feedback-backdrop");
  feedbackBackdrop.classList.remove("hidden");
  feedbackBackdrop.classList.add("flex");

  userNameSecond.value = userNameFirst.value.trim();
  userCommentSecond.value = userCommentFirst.value.trim();
  userNumberSecond.value = userNumberFirst.value.trim();
}

function takeFileName(e) {
  document.querySelector("#fileLabel").textContent = e.target.files[0].name;
}

let lang = location.pathname.substring(0, 3);
let uz = document.querySelector(".infinity-wrapper-uz");
let ru = document.querySelector(".infinity-wrapper-ru");

if (lang == "/uz" || lang == "/in" || lang == "/ab") {
  ru.classList.remove("flex");
  ru.classList.add("hidden");
} else if (lang == "/ru") {
  ru.classList.remove("flex");
  ru.classList.add("hidden");
}

const counters = document.querySelectorAll(".number");
const speed = 200; // The lower the slower

document.addEventListener("DOMContentLoaded", () => {
  var counted = 0;
  $(window).scroll(function () {
    var oTop = $("#number-wrapper").offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
      counters.forEach((counter) => {
        const updateCount = () => {
          const target = +counter.getAttribute("data-target");
          const count = +counter.innerText;

          const inc = Math.ceil(target / speed);
          if (count < target) {
            counter.innerText = count + inc;
            setTimeout(updateCount, 1);
          } else {
            counter.innerText = target;
          }
        };

        updateCount();
      });
      counted = 1;
    }
  });
});

console.log(10000);

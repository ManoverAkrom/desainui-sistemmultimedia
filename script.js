// Navbar berubah saat scroll
{
  const nav = document.querySelector(".nav");
  let nilaiRol = window.scrollY;

  window.addEventListener("scroll", () => {
    if (nilaiRol < window.scrollY) {
      nav.classList.add("nav--rol");
      // console.log("Turun turun turun");
    }
    else {
      nav.classList.remove("nav--rol");
      // console.log("Naik naik naik");
    }

    nilaiRol = window.scrollY;
  });
}



// Memunculkan Menu Toggle
const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
  nav.classList.toggle('slide');
});



// Efek Mengetik
function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}
const phrases = ["Manover di sini", "dan saya mencoba", "Desain Frontend Web"];
const el = document.getElementById("typewriter");

let sleepTime = 100;
let curPhraseIndex = 0;

const writeLoop = async () => {
  while (true) {
    let curWord = phrases[curPhraseIndex];

    for (let i = 0; i < curWord.length; i++) {
      el.innerText = curWord.substring(0, i + 1);
      await sleep(sleepTime);
    }
    await sleep(sleepTime * 10);

    for (let i = curWord.length; i > 0; i--) {
      el.innerText = curWord.substring(0, i - 1);
      await sleep(sleepTime);
    }
    await sleep(sleepTime * 5);

    if (curPhraseIndex === phrases.length - 1) {
      curPhraseIndex = 0;
    }
    else {
      curPhraseIndex++;
    }
  }
};

writeLoop();

// animação de digitação
const words = ["inteligentes", "eficientes", "automatizadas"];
let wordIndex = 0;
let charIndex = 0;

function typeLoop() {
  const element = document.getElementById("typing-word");
  const currentWord = words[wordIndex];

  if (charIndex < currentWord.length) {
    element.innerHTML += currentWord.charAt(charIndex);
    charIndex++;
    setTimeout(typeLoop, 80);
  } else {
    setTimeout(() => {
      element.innerHTML = "";
      charIndex = 0;
      wordIndex = (wordIndex + 1) % words.length;
      typeLoop();
    }, 1500);
  }
}

typeLoop();


// accordion
const accordions = document.querySelectorAll('.accordion-header');

accordions.forEach(accordion => {
    accordion.addEventListener('click', () => {
        const body = accordion.nextElementSibling;
        body.classList.toggle('active');
    });
});







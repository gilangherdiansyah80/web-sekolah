const handleMenu = () => {
  const hamburger = document.getElementById("hamburger-menu");
  const menu = document.getElementById("menu");
  const close = document.getElementById("close-menu");

  hamburger.addEventListener("click", () => {
    menu.classList.remove("hidden");
    hamburger.classList.add("hidden");
    close.classList.remove("hidden");
  });

  close.addEventListener("click", () => {
    menu.classList.add("hidden");
    hamburger.classList.remove("hidden");
    close.classList.add("hidden");
  });
};

const type = () => {
  const typedTextElement = document.getElementById("typedText");
  const fullText =
    "Innovative Learning Environment & Holistic Education Approach for Academic Excellence, Personal Growth, and Character Development.";
  let index = 0;
  const typingSpeed = 100; // Kecepatan mengetik (ms)

  const typeChar = () => {
    if (index < fullText.length) {
      typedTextElement.innerHTML += fullText[index];
      index++;
      setTimeout(typeChar, typingSpeed);
    }
  };

  typeChar();
};

const fasilityScroll = () => {
  const slides = [
    {
      title: "Modern Library with Extensive Collections",
      desc: "A state-of-the-art library with a vast collection of books, digital resources, and comfortable reading spaces",
    },
    {
      title: "Spacious Auditorium & Theater Hall",
      desc: "A well-designed auditorium equipped with advanced acoustics and seating for large-scale events and performances.",
    },
    {
      title: "Olympic-Standard Swimming Pool",
      desc: "A professional-grade swimming pool with modern facilities for training, competitions, and leisure activities",
    },
    {
      title: "Indoor Basketball Court",
      desc: "A high-quality indoor basketball facility suitable for tournaments and daily practice sessions.",
    },
  ];

  let currentIndex = 0;
  const slider = document.getElementById("slider");
  const dots = document.querySelectorAll(".dot");
  const fasilityTitle = document.getElementById("fasility-title");
  const fasilityDesc = document.getElementById("fasility-desc");

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    dots.forEach((dot, index) => {
      dot.classList.toggle("bg-black", index === currentIndex);
      dot.classList.toggle("bg-gray-400", index !== currentIndex);
    });
    fasilityTitle.textContent = slides[currentIndex].title;
    fasilityDesc.textContent = slides[currentIndex].desc;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
  }

  document.getElementById("next").addEventListener("click", nextSlide);
  document.getElementById("prev").addEventListener("click", prevSlide);

  setInterval(nextSlide, 5000);
};

const handleShowCard = () => {
  const showCards = document.querySelectorAll("#show-card");

  showCards.forEach((showCard) => {
    showCard.addEventListener("click", () => {
      const listCard = showCard.parentElement.nextElementSibling; // Dapatkan ul terkait
      const arrowUp = showCard.querySelector("#arrow-up");
      const arrowDown = showCard.querySelector("#arrow-down");

      if (!listCard || !arrowUp || !arrowDown) {
        console.error("Element tidak ditemukan!");
        return;
      }

      // Tutup semua kategori sebelum membuka yang baru
      document.querySelectorAll("ul[id='list-card']").forEach((ul) => {
        if (ul !== listCard) {
          ul.setAttribute("hidden", true);
          ul.previousElementSibling
            .querySelector("#arrow-up")
            .removeAttribute("hidden");
          ul.previousElementSibling
            .querySelector("#arrow-down")
            .setAttribute("hidden", true);
        }
      });

      // Toggle tampilan kategori yang diklik
      const isHidden = listCard.hasAttribute("hidden");

      if (isHidden) {
        listCard.removeAttribute("hidden");
        arrowUp.setAttribute("hidden", true);
        arrowDown.removeAttribute("hidden");
      } else {
        listCard.setAttribute("hidden", true);
        arrowUp.removeAttribute("hidden");
        arrowDown.setAttribute("hidden", true);
      }
    });
  });
};

document.addEventListener("DOMContentLoaded", () => {
  handleMenu();
});
document.addEventListener("DOMContentLoaded", () => {
  type();
});
document.addEventListener("DOMContentLoaded", () => {
  fasilityScroll();
});
document.addEventListener("DOMContentLoaded", () => {
  handleShowCard();
});

// Ambil semua elemen pertanyaan
const questions = document.querySelectorAll('.faq-question');

// Loop setiap elemen pertanyaan
questions.forEach(question => {
  // Tambahkan event listener klik pada setiap pertanyaan
  question.addEventListener('click', () => {
    // Toggle class 'active' pada elemen pertanyaan
    question.classList.toggle('active');

    // Ambil elemen jawaban dari elemen pertanyaan yang diklik
    const answer = question.nextElementSibling;

    // Toggle class 'show' pada elemen jawaban
    if (answer.style.maxHeight) {
      // Jika elemen jawaban sudah terbuka, tutup
      answer.style.maxHeight = null;
    } else {
      // Jika elemen jawaban belum terbuka, buka
      answer.style.maxHeight = answer.scrollHeight + 'px';
    }
  });
});

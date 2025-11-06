(() => {
  document.addEventListener('DOMContentLoaded', () => {
    const ctas = document.querySelectorAll('.ucon-btn');
    ctas.forEach(btn => btn.addEventListener('mouseenter', () => btn.style.filter = 'brightness(1.06)'));
    ctas.forEach(btn => btn.addEventListener('mouseleave', () => btn.style.filter = ''));
  });
})();

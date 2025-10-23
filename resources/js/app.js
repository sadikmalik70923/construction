import './bootstrap';

// Counter animation on scroll
document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('[data-counter]');
  if (!('IntersectionObserver' in window) || counters.length === 0) return;

  const animate = (el) => {
    const target = parseInt(el.getAttribute('data-target') || '0', 10);
    const duration = parseInt(el.getAttribute('data-duration') || '1500', 10);
    const start = 0;
    const startTime = performance.now();

    const step = (now) => {
      const progress = Math.min((now - startTime) / duration, 1);
      const value = Math.floor(start + (target - start) * progress);
      el.textContent = value.toLocaleString();
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        // Append suffix if present (e.g., +)
        const suffix = el.getAttribute('data-suffix');
        if (suffix && !el.dataset.suffixed) {
          el.textContent = el.textContent + suffix;
          el.dataset.suffixed = '1';
        }
      }
    };

    requestAnimationFrame(step);
  };

  const once = new Set();
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const el = entry.target;
        if (!once.has(el)) {
          once.add(el);
          animate(el);
        }
      }
    });
  }, { threshold: 0.35 });

  counters.forEach((el) => observer.observe(el));
});

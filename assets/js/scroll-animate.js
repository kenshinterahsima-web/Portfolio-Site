document.addEventListener('DOMContentLoaded', function () {
  var targets = document.querySelectorAll('.fade-in-left, .fade-in-up');
  if (!targets.length) return;

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      }
    });
  }, {
    root: null,
    threshold: 0.2,
    rootMargin: '0px 0px -10% 0px'
  });

  targets.forEach(function (el) { io.observe(el); });
});


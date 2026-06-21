// funaabhub - Interactive Scripts

document.addEventListener('DOMContentLoaded', () => {

  // ========== STICKY HEADER ==========
  const header = document.getElementById('header');
  const handleScroll = () => {
    header.classList.toggle('scrolled', window.scrollY > 20);
  };
  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // ========== MOBILE NAV TOGGLE ==========
  const hamburger = document.getElementById('hamburger');
  const mainNav = document.getElementById('mainNav');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mainNav.classList.toggle('active');
  });

  // Close mobile nav on link click
  mainNav.querySelectorAll('.header__link').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      mainNav.classList.remove('active');
    });
  });

  // ========== AGENT FILTER BUTTONS ==========
  const filterBtns = document.querySelectorAll('.filter-btn');
  const agentCards = document.querySelectorAll('.agent-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Update active state
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;

      agentCards.forEach(card => {
        if (filter === 'all' || card.dataset.area === filter) {
          card.style.display = '';
          card.style.opacity = '0';
          card.style.transform = 'translateY(10px)';
          requestAnimationFrame(() => {
            card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          });
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // ========== ANIMATED COUNTERS ==========
  const statsSection = document.querySelector('.stats__row');
  let countersAnimated = false;

  const animateCounters = () => {
    if (countersAnimated) return;

    const numbers = document.querySelectorAll('.stat__number[data-target]');
    if (!numbers.length) return;

    const rect = statsSection.getBoundingClientRect();
    if (rect.top < window.innerHeight * 0.8) {
      countersAnimated = true;

      numbers.forEach(num => {
        const target = parseInt(num.dataset.target);
        const duration = 2000;
        const start = performance.now();

        const update = (now) => {
          const elapsed = now - start;
          const progress = Math.min(elapsed / duration, 1);
          // Ease out cubic
          const eased = 1 - Math.pow(1 - progress, 3);
          num.textContent = Math.floor(target * eased).toLocaleString();

          if (progress < 1) {
            requestAnimationFrame(update);
          } else {
            num.textContent = target.toLocaleString() + '+';
          }
        };

        requestAnimationFrame(update);
      });
    }
  };

  window.addEventListener('scroll', animateCounters, { passive: true });
  animateCounters();

  // ========== FORM SUBMISSIONS ==========
  const registerForm = document.getElementById('registerForm');
  if (registerForm) {
    registerForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('reg-name').value;
      alert(`Thank you, ${name}! Your registration has been submitted for SUG verification. You will be notified within 24-48 hours.`);
      registerForm.reset();
    });
  }

  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Your message has been sent to the SUG Welfare Office. We will respond within 24 hours.');
      contactForm.reset();
    });
  }

  // Report forms
  document.querySelectorAll('.report-card__form').forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = form.querySelector('input');
      if (input && input.value.trim()) {
        alert(`Thank you. Your request regarding "${input.value}" has been submitted to SUG Welfare.`);
        form.reset();
      }
    });
  });

  // ========== SMOOTH REVEAL ON SCROLL ==========
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe section elements for reveal
  document.querySelectorAll('.agent-card, .area-card, .why-card, .team-card, .blog-card, .step, .stat, .report-card, .dashboard-preview__inner').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
  });

});

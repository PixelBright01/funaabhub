/* ============================================
   funaabhub - Main JavaScript
   ============================================ */

(function () {
  'use strict';

  /* ------------------------------------------
     Sticky Navbar
  ------------------------------------------ */
  const navbar = document.getElementById('navbar');
  if (navbar) {
    const onScroll = () => {
      navbar.classList.toggle('navbar--scrolled', window.scrollY > 40);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ------------------------------------------
     Mobile Hamburger Toggle
  ------------------------------------------ */
  const hamburger = document.getElementById('hamburger');
  const mainNav = document.getElementById('mainNav');
  if (hamburger && mainNav) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('is-active');
      mainNav.classList.toggle('is-open');
    });
    mainNav.querySelectorAll('.nav-link').forEach((link) => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('is-active');
        mainNav.classList.remove('is-open');
      });
    });
  }

  /* ------------------------------------------
     Active Nav Link Highlighting
  ------------------------------------------ */
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-link').forEach((link) => {
    const href = link.getAttribute('href');
    if (href === currentPage) {
      link.classList.add('active');
    }
  });

  /* ------------------------------------------
     Agent Filter Buttons (data-area)
  ------------------------------------------ */
  const filterPills = document.querySelectorAll('.filter-pill');
  const agentCards = document.querySelectorAll('.agent-card');

  filterPills.forEach((pill) => {
    pill.addEventListener('click', () => {
      filterPills.forEach((p) => p.classList.remove('is-active'));
      pill.classList.add('is-active');
      const area = pill.dataset.area;
      agentCards.forEach((card) => {
        if (area === 'all' || card.dataset.area === area) {
          card.style.display = '';
          card.classList.remove('is-hidden');
        } else {
          card.style.display = 'none';
          card.classList.add('is-hidden');
        }
      });
    });
  });

  /* ------------------------------------------
     Animated Stat Counters (data-target)
  ------------------------------------------ */
  const counters = document.querySelectorAll('[data-target]');
  if (counters.length) {
    const animateCounter = (el) => {
      const target = parseInt(el.dataset.target, 10);
      const duration = 2000;
      const step = Math.max(1, Math.floor(target / (duration / 16)));
      let current = 0;
      const tick = () => {
        current += step;
        if (current >= target) {
          el.textContent = target.toLocaleString();
          return;
        }
        el.textContent = current.toLocaleString();
        requestAnimationFrame(tick);
      };
      tick();
    };

    const counterObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );
    counters.forEach((c) => counterObserver.observe(c));
  }

  /* ------------------------------------------
     Form Submission Handlers
  ------------------------------------------ */
  const handleFormSubmit = (formId, successMessage) => {
    const form = document.getElementById(formId);
    if (!form) return;
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      alert(successMessage);
      form.reset();
    });
  };

  handleFormSubmit('registerForm', 'Registration submitted! SUG will review your application within 48 hours.');
  handleFormSubmit('contactForm', 'Message sent! We will get back to you within 24 hours.');
  handleFormSubmit('reportForm', 'Report submitted. Our team will investigate this matter promptly.');
  handleFormSubmit('verifyForm', 'Agent verified! This agent is registered and in good standing with SUG.');

  /* ------------------------------------------
     Scroll Reveal (IntersectionObserver)
  ------------------------------------------ */
  const revealElements = document.querySelectorAll('.reveal');
  if (revealElements.length) {
    const revealObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15 }
    );
    revealElements.forEach((el) => revealObserver.observe(el));
  }

  /* ------------------------------------------
     Dashboard Sidebar Toggle
  ------------------------------------------ */
  const sidebarToggle = document.getElementById('sidebarToggle');
  const sidebar = document.getElementById('sidebar');
  if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener('click', () => {
      sidebar.classList.toggle('is-open');
      sidebarToggle.classList.toggle('is-active');
    });
  }

  /* ------------------------------------------
     Modal Open / Close
  ------------------------------------------ */
  window.openModal = function (modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.add('is-active');
      document.body.style.overflow = 'hidden';
    }
  };

  window.closeModal = function (modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.remove('is-active');
      document.body.style.overflow = '';
    }
  };

  document.querySelectorAll('[data-modal-close]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const modal = btn.closest('.modal');
      if (modal) {
        modal.classList.remove('is-active');
        document.body.style.overflow = '';
      }
    });
  });

  document.querySelectorAll('.modal__backdrop').forEach((backdrop) => {
    backdrop.addEventListener('click', () => {
      const modal = backdrop.closest('.modal');
      if (modal) {
        modal.classList.remove('is-active');
        document.body.style.overflow = '';
      }
    });
  });

  /* ------------------------------------------
     Dropdown Filter (find-agent / listings)
  ------------------------------------------ */
  const areaFilter = document.getElementById('areaFilter');
  const deptFilter = document.getElementById('deptFilter');
  const searchBtn = document.getElementById('searchBtn');

  if (searchBtn) {
    searchBtn.addEventListener('click', () => {
      const area = areaFilter ? areaFilter.value : 'all';
      const dept = deptFilter ? deptFilter.value : 'all';
      document.querySelectorAll('.agent-card, .listing-card').forEach((card) => {
        const matchArea = area === 'all' || card.dataset.area === area;
        const matchDept = dept === 'all' || card.dataset.dept === dept;
        card.style.display = matchArea && matchDept ? '' : 'none';
      });
    });
  }

  /* ------------------------------------------
     Listing Price / Room Filters
  ------------------------------------------ */
  const priceFilter = document.getElementById('priceFilter');
  const roomFilter = document.getElementById('roomFilter');

  if (priceFilter || roomFilter) {
    const applyListingFilters = () => {
      const maxPrice = priceFilter ? parseInt(priceFilter.value, 10) || Infinity : Infinity;
      const rooms = roomFilter ? roomFilter.value : 'all';
      document.querySelectorAll('.listing-card').forEach((card) => {
        const price = parseInt(card.dataset.price, 10) || 0;
        const cardRooms = card.dataset.rooms || 'all';
        const matchPrice = price <= maxPrice;
        const matchRooms = rooms === 'all' || cardRooms === rooms;
        card.style.display = matchPrice && matchRooms ? '' : 'none';
      });
    };
    if (priceFilter) priceFilter.addEventListener('change', applyListingFilters);
    if (roomFilter) roomFilter.addEventListener('change', applyListingFilters);
  }

  /* ------------------------------------------
     Smooth Scroll for Anchor Links
  ------------------------------------------ */
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
})();

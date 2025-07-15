/**
 * Smart Vision - Engineering Consultations Custom Scripts
 * Enhanced functionality for the website
 */

document.addEventListener('DOMContentLoaded', function() {
  "use strict";

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

  /**
   * Scroll to section with smooth behavior
   */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      if (this.getAttribute('href').length > 1) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 60,
            behavior: 'smooth'
          });
          
          // Update active state in navigation
          document.querySelectorAll('.navmenu a').forEach(navLink => {
            navLink.classList.remove('active');
          });
          this.classList.add('active');
        }
      }
    });
  });

  /**
   * Enhanced mobile navigation
   */
  const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('.navmenu');
  
  if (mobileNavToggle) {
    mobileNavToggle.addEventListener('click', function(e) {
      document.body.classList.toggle('mobile-nav-active');
      this.classList.toggle('bi-list');
      this.classList.toggle('bi-x');
      navMenu.classList.toggle('active');
    });
  }

  /**
   * Animation for elements when they come into view
   */
  const animateElements = document.querySelectorAll('.fade-up');
  
  if (animateElements.length > 0) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, { threshold: 0.1 });
    
    animateElements.forEach(element => {
      observer.observe(element);
    });
  }

  /**
   * Counter animation for stats section
   */
  const statsSection = document.getElementById('stats');
  if (statsSection) {
    const statsObserver = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting && !statsSection.classList.contains('counted')) {
        statsSection.classList.add('counted');
        
        const counters = document.querySelectorAll('.stats-item .purecounter');
        counters.forEach(counter => {
          const start = parseInt(counter.getAttribute('data-purecounter-start'));
          const end = parseInt(counter.getAttribute('data-purecounter-end'));
          const duration = parseInt(counter.getAttribute('data-purecounter-duration')) * 1000;
          
          let startTime = null;
          
          function count(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            const percentage = Math.min(progress / duration, 1);
            
            const currentCount = Math.floor(start + (end - start) * percentage);
            counter.innerText = currentCount;
            
            if (progress < duration) {
              window.requestAnimationFrame(count);
            } else {
              counter.innerText = end;
            }
          }
          
          window.requestAnimationFrame(count);
        });
      }
    }, { threshold: 0.5 });
    
    statsObserver.observe(statsSection);
  }

  /**
   * Enhanced header behavior on scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      
      if (scrollTop > headerOffset) {
        selectHeader.classList.add('header-scrolled');
        document.body.classList.add('scrolled');
      } else {
        selectHeader.classList.remove('header-scrolled');
        document.body.classList.remove('scrolled');
      }
      
      // Hide/show header on scroll direction
      if (scrollTop > lastScrollTop && scrollTop > 100) {
        selectHeader.style.transform = 'translateY(-100%)';
      } else {
        selectHeader.style.transform = 'translateY(0)';
      }
      
      lastScrollTop = scrollTop;
    });
  }

  /**
   * Back to top button
   */
  const backtotop = document.querySelector('#scroll-top');
  if (backtotop) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        backtotop.classList.add('active');
      } else {
        backtotop.classList.remove('active');
      }
    });
    
    backtotop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      setTimeout(() => {
        preloader.classList.add('loaded');
        setTimeout(() => {
          preloader.remove();
        }, 1000);
      }, 1000);
    });
  }

  /**
   * Testimonials slider enhanced
   */
  const testimonialSwiper = document.querySelector('.testimonials .swiper');
  if (testimonialSwiper) {
    testimonialSwiper.addEventListener('mouseover', function() {
      this.swiper.autoplay.stop();
    });
    
    testimonialSwiper.addEventListener('mouseout', function() {
      this.swiper.autoplay.start();
    });
  }
}); 
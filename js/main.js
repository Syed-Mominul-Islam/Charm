(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();
    
    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

        
    // Highlighted Project carousel
    $('.highlighted-carousel').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        loop: true,
        autoplay: true,
        smartSpeed: 1200,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            }
        }
    });
    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 45,
        dots: false,
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:4
            },
            768:{
                items:6
            },
            992:{
                items:8
            }
        }
    });
})(jQuery);
// ================== Navebar responsive ====================
//For mobile devices to toggle submenus
document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function(element) {
    element.addEventListener('click', function(e) {
        if (window.innerWidth < 992) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        }
    });
});

// =========================================Navebar start ==========================================
document.addEventListener('DOMContentLoaded', function() {
    // Function to set active nav item based on current page
    function setActiveNavItem() {
        const currentPage = window.location.pathname.split('/').pop();
        const navLinks = document.querySelectorAll('.nav-link:not(.dropdown-toggle)');
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        
        // Reset all active states
        navLinks.forEach(link => link.classList.remove('active'));
        dropdownItems.forEach(item => item.classList.remove('active'));
        
        // Check regular nav items
        navLinks.forEach(link => {
            const linkHref = link.getAttribute('href');
            if (linkHref && currentPage.includes(linkHref.replace(/\.php$/, '').replace(/\.html$/, ''))) {
                link.classList.add('active');
                
                // If this is inside a dropdown, also activate the dropdown toggle
                const dropdownToggle = link.closest('.dropdown-menu')?.previousElementSibling;
                if (dropdownToggle && dropdownToggle.classList.contains('nav-link')) {
                    dropdownToggle.classList.add('active');
                }
            }
        });
        
        // Check dropdown items
        dropdownItems.forEach(item => {
            const itemHref = item.getAttribute('href');
            if (itemHref && currentPage.includes(itemHref.replace(/\.php$/, '').replace(/\.html$/, ''))) {
                item.classList.add('active');
                
                // Activate parent dropdown toggle
                const dropdownToggle = item.closest('.dropdown-menu')?.previousElementSibling;
                if (dropdownToggle && dropdownToggle.classList.contains('nav-link')) {
                    dropdownToggle.classList.add('active');
                }
            }
        });
    }
    
    // Set active item on page load
    setActiveNavItem();
    
    // Your existing dropdown mobile handling code
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                e.stopPropagation();
                
                const parentItem = this.parentElement;
                const submenu = this.nextElementSibling;
                
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (menu !== submenu && !menu.contains(submenu)) {
                        menu.classList.remove('show');
                    }
                });
                
                if (submenu) {
                    submenu.classList.toggle('show');
                }
                
                let currentParent = parentItem.closest('.dropdown-menu');
                while (currentParent) {
                    currentParent.classList.add('show');
                    currentParent = currentParent.parentElement.closest('.dropdown-menu');
                }
            }
        });
    });
    
    document.addEventListener('click', function(e) {
        if (window.innerWidth < 992 && !e.target.closest('.navbar-collapse')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.remove('show');
            });
        }
    });
});
// =========================================Navebar end ==========================================


const faqItems = document.querySelectorAll('.faq-panel-item');

    faqItems.forEach(function (item) {
        item.addEventListener('click', function () {
            // Toggle active class
            this.classList.toggle('active');
            
        });
    });

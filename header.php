document.addEventListener('DOMContentLoaded', function () {
    const interactiveCards = document.querySelectorAll('.product-card, .category-card, .testimonial, .trust-item');

    interactiveCards.forEach(function (card) {
        card.addEventListener('mouseenter', function () {
            card.style.transform = 'translateY(-6px)';
            card.style.transition = 'transform 0.2s ease, box-shadow 0.2s ease';
            card.style.boxShadow = '0 24px 44px rgba(20,20,20,0.12)';
        });

        card.addEventListener('mouseleave', function () {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = 'none';
        });
    });
});

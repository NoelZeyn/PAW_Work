const showCategoriesBtn = document.getElementById('showCategoriesBtn');
const hideCategoriesBtn = document.getElementById('hideCategoriesBtn');
const allCategoriesDiv = document.getElementById('allCategories');

showCategoriesBtn.addEventListener('click', function() {
    allCategoriesDiv.style.display = 'block';
    showCategoriesBtn.style.display = 'none';
    hideCategoriesBtn.style.display = 'inline-block';
});

hideCategoriesBtn.addEventListener('click', function() {
    allCategoriesDiv.style.display = 'none';
    showCategoriesBtn.style.display = 'inline-block';
    hideCategoriesBtn.style.display = 'none';
});
$(document).ready(function() {
    $('.category-scroll a').on('click', function(event) {
        if (this.hash !== '') {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });
        }
    });
});
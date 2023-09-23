window.onload = function() {
    var preloader = document.querySelector('.spinner');
    var content = document.getElementById('content');

    setTimeout(function() {
        preloader.classList.add('hidden');
        content.style.display = 'block';

        // Remove the loader from the DOM
        preloader.remove();
    }, 300);
}

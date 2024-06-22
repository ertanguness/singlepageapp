function loadContent(page, updateHistory = true) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '/content.php?page=' + page, true);
    xhr.onload = function() {
        if (this.status === 200) {
            document.getElementById('content').innerHTML = this.responseText;
            if (updateHistory) {
                history.pushState({
                    page: page
                }, '', '/' + page);
            }
            setActiveLink(page);
        }
    };
    xhr.send();
}

function setActiveLink(page) {
    const links = document.querySelectorAll('#menu a');
    links.forEach(link => {
        if (link.getAttribute('href').substring(1) === page) {
            console.log(link.getAttribute('href').substring(1));
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

window.addEventListener('popstate', function(event) {
    if (event.state && event.state.page) {
        loadContent(event.state.page, false);
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('#menu a');
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const page = this.getAttribute('href').substring(1);
            loadContent(page);
        });
    });

    // Load the initial content
    const initialPage = window.location.pathname.substring(1) || 'home';
    loadContent(initialPage, false);
    setActiveLink(initialPage);
});

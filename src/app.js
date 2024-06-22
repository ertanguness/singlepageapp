function loadContent(page, updateHistory = true) {
    $.ajax({
        url: '/content.php?page=' + page,
        method: 'GET',
        success: function(response) {
            $('#content').html(response);
            if (updateHistory) {
                history.pushState({
                    page: page
                }, '', '/' + page);
            }
            setActiveLink(page);
        }
    });
}

function setActiveLink(page) {
    $('#menu a').each(function() {
        if ($(this).attr('href').substring(1) === page) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
}

$(window).on('popstate', function(event) {
    if (event.originalEvent.state && event.originalEvent.state.page) {
        loadContent(event.originalEvent.state.page, false);
    }
});

$(document).ready(function() {
    $('#menu a').click(function(event) {
        event.preventDefault();
        const page = $(this).attr('href').substring(1);
        loadContent(page);
    });

    // Load the initial content
    const initialPage = window.location.pathname.substring(1) || 'home';
    if (initialPage == 'index.php') {
        const initialPage = 'home';
        history.replaceState({
            page: initialPage
        }, '', '/' + initialPage);
    }
  console.log(initialPage);
    loadContent(initialPage, false);
    setActiveLink(initialPage);
});

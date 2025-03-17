    document.getElementById('technology').addEventListener('mouseenter', function() {
        document.querySelector('.left-panel').style.width = '100%';
        document.querySelector('.right-panel').style.width = '0';
        document.querySelector('#technology .panel-content').style.opacity = '1';
    });

    document.getElementById('design').addEventListener('mouseenter', function() {
        document.querySelector('.left-panel').style.width = '0';
        document.querySelector('.right-panel').style.width = '100%';
        document.querySelector('#design .panel-content').style.opacity = '1';
    });

    document.getElementById('technology').addEventListener('mouseleave', function() {
        document.querySelector('.left-panel').style.width = '50%';
        document.querySelector('.right-panel').style.width = '50%';
        document.querySelector('#technology .panel-content').style.opacity = '1';
    });

    document.getElementById('design').addEventListener('mouseleave', function() {
        document.querySelector('.left-panel').style.width = '50%';
        document.querySelector('.right-panel').style.width = '50%';
        document.querySelector('#design .panel-content').style.opacity = '1';
    });

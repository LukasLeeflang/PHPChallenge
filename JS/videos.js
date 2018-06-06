const buttons = document.querySelectorAll('.createIframe');

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', createIframe, false);
}

function createIframe(e) {
    let iframe = document.createElement('iframe');
    iframe.width = 560;
    iframe.height = 315;
    iframe.frameborder = 0;
    iframe.src = `https://www.youtube.com/embed/${e.target.getAttribute('data-video')}`;

    e.target.parentNode.insertBefore(iframe, e.target.nextSibling);

    e.target.remove();
}
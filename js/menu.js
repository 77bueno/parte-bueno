function menuShow() {
    let ul = document.querySelector('.navbar ul');

    if (ul.classList.contains('open')) {
        ul.classList.remove('open');
        document.querySelector('.menu-icon p').src = '&equiv;';
    }else {
        ul.classList.add('open');
        document.querySelector('.menu-icon p').src = '&times;';

    }
}

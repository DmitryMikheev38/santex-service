window.onload = () => {
    document.querySelectorAll('.slider').forEach(s => {
        let images = s.getAttribute('data-images').split(',');
        let imageGroup = document.createElement('div');
        imageGroup.classList.add('image-group', 'slider__image-group');

        images.forEach((img, idx, arr) => {
            let el = document.createElement('img');
            el.style.width = s.offsetWidth + 'px';
            el.classList.add('image', 'slider__image');
            el.setAttribute('src', `./images/${img}`);
            imageGroup.appendChild(el);

            if (idx + 1 === arr.length) {
                let lastEl = document.createElement('img');
                lastEl.style.width = s.offsetWidth + 'px';
                lastEl.classList.add('image', 'slider__image');
                lastEl.setAttribute('src', `./images/${images[0]}`);
                imageGroup.appendChild(lastEl);
            }
        });

        s.appendChild(imageGroup);
        imageGroup.style.width = imageGroup.childNodes[0].offsetWidth * imageGroup.childNodes.length + 'px';

        s.interval = setTimeout(function tick(el, t = 0) {
            s.timeout = 7000;
            t++;
            if (t > el.childNodes.length - 1) {
                t = 0;
                el.style.transition = '0s';
                el.style.transform = `translateX(-${el.childNodes[0].offsetWidth * t}px)`;
                setTimeout(() => {
                    el.style.transition = '1s';
                }, 0);
                s.timeout = 0;
            } else {
                el.style.transform = `translateX(-${el.childNodes[0].offsetWidth * t}px)`;
            }
            s.interval = setTimeout(tick.bind(this, el, t), s.timeout);
        }.bind(this, imageGroup), 7000);
    });
}

window.addEventListener('resize', () => {
    document.querySelectorAll('.slider').forEach(s => {
        let imageGroup = s.children[0];
        let images = imageGroup.childNodes;

        images.forEach(img => {
            img.style.width = s.offsetWidth + 'px';
        })
        imageGroup.style.width = s.offsetWidth * images.length + 'px';

    })
})

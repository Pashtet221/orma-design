document.querySelectorAll('.orma-menu-toggle').forEach((toggle) => {
    const navigation = toggle.closest('nav');
    const setExpanded = (expanded) => {
        toggle.setAttribute('aria-expanded', String(expanded));
        toggle.setAttribute('aria-label', expanded ? 'Закрыть меню' : 'Открыть меню');
    };
    toggle.addEventListener('click', () => setExpanded(toggle.getAttribute('aria-expanded') !== 'true'));
    document.addEventListener('click', (event) => {
        if (!navigation.contains(event.target) || event.target.closest('.orma-menu-items a')) setExpanded(false);
    });
    navigation.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
            setExpanded(false);
            toggle.focus();
        }
    });
});
document.querySelectorAll('.orma-filters').forEach((filters) => {
    const layout = filters.closest('.orma-layout');
    const buttons = [...filters.querySelectorAll('button[data-filter]')];
    const cards = [...layout.querySelectorAll('[data-category]')];
    filters.addEventListener('click', (event) => {
        const control = event.target.closest('button[data-filter]');
        if (!control) return;
        const category = control.dataset.filter;
        layout.classList.toggle('orma-filtered', category !== 'all');
        buttons.forEach((button) => button.setAttribute('aria-pressed', String(button === control)));
        cards.forEach((card) => {
            card.hidden = category !== 'all' && !card.dataset.category.split(' ').includes(category);
        });
    });
});
document.querySelectorAll('.orma-portfolio').forEach((portfolio) => {
    const cards = [...portfolio.querySelectorAll('.orma-portfolio-tab')];
    const activate = (card) => cards.forEach((item) => item.setAttribute('aria-pressed', String(item === card)));
    cards.forEach((card) => {
        card.addEventListener('pointerenter', (event) => {
            if (event.pointerType !== 'touch') activate(card);
        });
        card.addEventListener('focus', () => activate(card));
        card.addEventListener('click', () => activate(card));
        card.addEventListener('keydown', (event) => {
            const direction = { ArrowRight: 1, ArrowLeft: -1 }[event.key];
            if (!direction) return;
            event.preventDefault();
            cards[(cards.indexOf(card) + direction + cards.length) % cards.length].focus();
        });
    });
});

// Keep native details semantics while animating both opening and closing.
document.querySelectorAll('.orma-faq, .orma-service-faq').forEach((details) => {
    const summary = details.querySelector('summary');
    let animation;
    let expanded = details.open;
    summary.addEventListener('click', (event) => {
        if (matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        event.preventDefault();
        const start = details.getBoundingClientRect().height;
        animation?.cancel();
        expanded = !expanded;
        details.open = true;
        details.style.height = '';
        const end = expanded ? details.getBoundingClientRect().height : summary.getBoundingClientRect().height
            + parseFloat(getComputedStyle(details).paddingTop) + parseFloat(getComputedStyle(details).paddingBottom)
            + parseFloat(getComputedStyle(details).borderTopWidth) + parseFloat(getComputedStyle(details).borderBottomWidth);
        details.style.overflow = 'hidden';
        animation = details.animate({ height: [start + 'px', end + 'px'] }, {
            duration: 360, easing: 'cubic-bezier(.22, 1, .36, 1)',
        });
        animation.onfinish = () => {
            details.open = expanded;
            details.style.overflow = '';
            animation = null;
        };
    });
});

// Native swipe and scroll snap on the mobile home; desktop accordion stays intact.
document.querySelectorAll('.orma-home .orma-portfolio, .orma-home .v2-articles').forEach((track) => {
    const slides = [...track.children];
    if (slides.length < 2) return;
    const mobile = matchMedia('(max-width: 600px)');
    const projects = track.classList.contains('orma-portfolio');
    const controls = document.createElement('div');
    controls.className = 'v2-carousel-controls';
    const dots = document.createElement('div');
    dots.className = 'v2-carousel-dots';
    const arrows = document.createElement('div');
    arrows.className = 'v2-carousel-arrows';
    const previous = document.createElement('button');
    const next = document.createElement('button');
    [previous, next].forEach((button, index) => {
        button.type = 'button';
        button.className = 'v2-carousel-arrow';
        button.textContent = index ? '→' : '←';
        button.setAttribute('aria-label', index ? 'Следующая карточка' : 'Предыдущая карточка');
        arrows.append(button);
    });
    let current = 0;
    const position = (slide) => slide.getBoundingClientRect().left - track.getBoundingClientRect().left + track.scrollLeft;
    const go = (index) => {
        const target = Math.max(0, Math.min(slides.length - 1, index));
        track.scrollTo({ left: position(slides[target]), behavior: matchMedia('(prefers-reduced-motion: reduce)').matches ? 'instant' : 'smooth' });
    };
    const indicators = slides.map((slide, index) => {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'v2-carousel-dot';
        dot.setAttribute('aria-label', `Показать карточку ${index + 1} из ${slides.length}`);
        dot.addEventListener('click', () => go(index));
        dots.append(dot);
        return dot;
    });
    const update = () => {
        if (!mobile.matches) return;
        const maxScroll = track.scrollWidth - track.clientWidth;
        current = track.scrollLeft >= maxScroll - 2 ? slides.length - 1 : slides.reduce((closest, slide, index) =>
            Math.abs(position(slide) - track.scrollLeft) < Math.abs(position(slides[closest]) - track.scrollLeft) ? index : closest, 0);
        indicators.forEach((dot, index) => dot.setAttribute('aria-current', String(index === current)));
        previous.disabled = current === 0;
        next.disabled = current === slides.length - 1;
        if (projects) slides.forEach((slide, index) => slide.setAttribute('aria-pressed', String(index === current)));
    };
    previous.addEventListener('click', () => go(current - 1));
    next.addEventListener('click', () => go(current + 1));
    controls.append(dots, arrows);
    track.after(controls);
    track.addEventListener('scroll', update, { passive: true });
    track.addEventListener('keydown', (event) => {
        if (!mobile.matches || event.target !== track || !['ArrowLeft', 'ArrowRight'].includes(event.key)) return;
        event.preventDefault();
        go(current + (event.key === 'ArrowRight' ? 1 : -1));
    });
    const configure = () => {
        if (mobile.matches) {
            track.setAttribute('tabindex', '0');
            track.setAttribute('aria-label', projects ? 'Карусель проектов' : 'Карусель статей');
            track.scrollTo({ left: 0, behavior: 'instant' });
        } else {
            track.removeAttribute('tabindex');
            track.removeAttribute('aria-label');
        }
        update();
    };
    mobile.addEventListener('change', configure);
    window.addEventListener('resize', update, { passive: true });
    configure();
});

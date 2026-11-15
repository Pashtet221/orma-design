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

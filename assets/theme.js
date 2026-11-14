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
    const cards = [...portfolio.querySelectorAll('button')];
    portfolio.addEventListener('click', (event) => {
        const card = event.target.closest('button');
        if (card) cards.forEach((item) => item.setAttribute('aria-pressed', String(item === card)));
    });
});

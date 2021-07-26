(function (){
    "use strict";
    let infoBlockName = document.querySelectorAll('.info-block--name'),
        infoBlockValue = document.querySelectorAll('.info-block--value'),
        isOverflowed = el => (el.scrollWidth > el.offsetWidth),
        dropDown = item => {
            let parent = item.parentNode,
                overflow = isOverflowed(item);
            if (overflow) {
                parent.setAttribute('data-dropdown', true);
                if (!parent.lastElementChild.classList.contains('info-block--icon')) {
                    let spanIcon = document.createElement('span');
                    spanIcon.className = 'info-block--icon';
                    spanIcon.setAttribute('uk-icon', 'chevron-down')
                    parent.append(spanIcon);
                }
            } else {
                // parent.setAttribute('data-dropdown', false);
                // if (parent.lastElementChild.classList.contains('info-block--icon')) {
                //     parent.lastElementChild.remove();
                // }
            }
        };

    infoBlockName.forEach(dropDown);
    infoBlockValue.forEach(dropDown);
    window.addEventListener('resize', () => {
        if(infoBlockName) {
            infoBlockName.forEach(dropDown);
            infoBlockValue.forEach(dropDown);
        }
    }, false);


    let dropDownAction = element => {
            let dropdown = element.parentNode.getAttribute('data-dropdown');
            if (dropdown === 'true') {
                if (element.parentNode.classList.contains('show')) {
                    element.parentNode.classList.remove('show');
                    element.parentNode.style.height = '';

                } else {
                    element.parentElement.classList.add('show');
                    element.parentElement.style.height = element.parentElement.scrollHeight + 'px';

                }
            }
        };
    document.addEventListener('click', e => {
        const t = e.target,
            name = t.closest('.info-block--name'),
            value = t.closest('.info-block--value'),
            icon = t.closest('.info-block--icon'),
            abc = el => {
                !el.parentElement.classList.contains('show') && dropDownAction(value)
            };

        name && dropDownAction(name);
        value && abc(value);
        icon && dropDownAction(icon);

    });
}());

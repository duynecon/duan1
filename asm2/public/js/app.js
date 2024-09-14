const header = document.querySelector('header');

window.addEventListener('scroll', function(){
    header.classList.toggle('sticky', this.window.scrollY > 0)
});


const btnSearch = document.querySelector('.bx-search');
const btnCloseSearch = document.querySelector('.closeSearch');
const menuUser = document.getElementById('menu_user');
const formSearch = document.querySelector('.form-search');

btnSearch.addEventListener('click', function(){
    formSearch.style.display = 'block';
    menuUser.style.display = 'none';
});

btnCloseSearch.addEventListener('click', function(){
    formSearch.style.display = 'none';
    menuUser.style.display = 'block';
});




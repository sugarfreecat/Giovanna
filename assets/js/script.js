const icon = document.querySelectorAll('.bi-heart');
const backToTop = document.querySelector('.back-to-top');
let deleteUrl = '';

document.querySelectorAll('.deletar-btn').forEach(btn => {
    btn.addEventListener('click', function(e){
        e.preventDefault();
        deleteUrl = this.href;
        document.getElementById('popup').style.display = 'flex';
    })
});

document.getElementById('cancelar').addEventListener('click', function(){
    document.getElementById('popup').style.display = 'none';
});

document.getElementById('confirmar').addEventListener('click', function(){
    window.location.href = deleteUrl;
});

function scrollTop(){
    if(window.scrollY > 50){
        backToTop.classList.add('show');
    }
    else{
        backToTop.classList.remove('show');
    }
};

icon.forEach(element =>{
    element.addEventListener('click', () => {
        if(element.classList.contains('bi-heart')){
            element.classList.replace('bi-heart', 'bi-heart-fill')
        }
        else{
            element.classList.replace('bi-heart-fill', 'bi-heart')
        }
    });
});

window.addEventListener('scroll', scrollTop);
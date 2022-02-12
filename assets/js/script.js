function abrir_modal_crud() {
    var modal = document.querySelector('.modal');
    var crud = document.querySelector('.crud');
    var header = document.querySelector('.header');

    header.style.opacity = '.7';
    modal.style.display = 'flex';
}

function fechar_modal() {
    var modal = document.querySelector('.modal');
    var modal_visualizar = document.querySelector('.modal_visualizar');
    var header = document.querySelector('.header');

    header.style.opacity = '';
    modal.style.display = 'none';
    modal_visualizar.style.display = 'none';
}

function modal_visualizar() {
    var modal_visualizar = document.querySelector('.modal_visualizar');
    var header = document.querySelector('.header');

    header.style.opacity = '1';
    modal_visualizar.style.display = 'flex';
}

function refresh() {
    var btn = document.querySelector('.atualizar_button');

    btn.addEventListener('click', () => {
        location.reload();
    });
}

function showDelete() {
    var crud_filmes_acoes = document.querySelector('.crud_filmes_acoes');

    crud_filmes_acoes.style.display = 'flex';
}

function delete_filme_crud(id,obj) {
    
    $(obj).closest('.crud_filmes').fadeOut();
    $.ajax({
        type:'POST',
        url:'../ajax/delete_filme_crud',
        data:{id:id}
    });
}
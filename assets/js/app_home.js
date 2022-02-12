function enviar_post() {

    var valor = $('#post_enviar').val()

    if(valor != '') {
        $.ajax({
            method:'POST',
            url:'ajax/enviar_post',
            data:{valor:valor}
        });
        valor.innerHTML = ''
    }else {
        alert('o campo está vazio...')
    }
}
function delete_post(obj,id_post) {
    $(obj).closest('.feed_card').fadeOut()
    $.ajax({
        method:'POST',
        url:'ajax/apagar_post',
        data:{id_post:id_post}
    });
}
function add_like_post(id_post) {
    if(id_post != '') {
        $.ajax({
            method:'POST',
            url:'ajax/add_post_like',
            data:{id_post:id_post}
        });
    }
}
function del_like_post(id_post) {
    if(id_post != '') {
        $.ajax({
            method:'POST',
            url:'ajax/del_post_like',
            data:{id_post:id_post}
        });
    }
}
function add_friend(id_friend) {
    $.ajax({
        method:'POST',
        url:'ajax/add_friend',
        data:{id_friend:id_friend}
    });
}
function cancel_friend(id_friend) {
    $.ajax({
        method:'POST',
        url:'ajax/cancel_friend',
        data:{id_friend:id_friend}
    });
}
function abrir_messenger() {
    var messenger_modal = document.querySelector('.messenger_modal')

    messenger_modal.style.display = 'flex'
}
function fechar_messenger(obj) {
    $(obj).closest('.messenger_modal').fadeOut()
}
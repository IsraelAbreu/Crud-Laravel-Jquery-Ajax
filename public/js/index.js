$("a").css("color","navy");
const _token = $('#_token').val()

const salvarProcesso = ()=>{
    const objeto = $('#objeto').val()
    const status = $('#status').val()

    //Inserir
    if((objeto != "") && (status != "")){
        $.ajax({
            url: "/processos",
            type: "POST",
            data: {
                objeto,
                status,
                _token
            },
            success: function(response){
                if(!response.error){
                    alert('Mensagem: '+ response.msg)
                    $("tbody").append(`
                    <tr>
                        <td>${response.processo.id}</td>
                        <td>${response.processo.objeto}</td>
                        <td>${response.processo.status}</td>
                        <td>
                            <button class="btn btn-danger" onclick="abrirAlertParaExcluirProcesso({{$processo->id}})">Excluir</button>
                            <button class="btn btn-info" onclick="abrirAlertParaExcluirProcesso({{$processo->id}})">Editar</button>
                        </td>
                    </tr>`);
                }
            }
        });
    }else{
        alert('Preencha todos os campos')
    }
        
       
}

const abrirAlertParaExcluirProcesso = (processoId)=>{
    if(confirm('Deseja excluir o processo?')){
        deletarProcesso(processoId)
    }
 }

const deletarProcesso = (processoId) =>{       
    $.ajax({
        type: "DELETE",
        url:`/processos/${processoId}`,
        data: {
            _token
        },
        success: function (response) {
            alert(response.msg);
            //location.reload();
            $(`#tr-processo-${processoId}`).remove();
        }
    });
}
//Edição de cadastro

$(document).on(click,'.btnEditarObjeto', function () {
    
});



//Fim da edição
$(document).ready(function(){
    $("#btn-teste").click(function (){ 
        salvarProcesso()
    });
})

'use strict';

const preencherFormulario = (endereco) =>{
    document.getElementById('endereco').value =  endereco.logradouro;
    document.getElementById('bairro').value =  endereco.bairro;
    document.getElementById('estado').value =  endereco.uf;
    document.getElementById('cidade').value =  endereco.localidade;
}

const pequisaCep = async() =>{
    const cep = document.getElementById('cep').value;
    const url = `http://viacep.com.br/ws/${cep}/json/`;
    
    const dados = await fetch(url);
    const endereco = await dados.json();
    if(endereco.hasOwnProperty('erro')){
        
        document.getElementById('bairro').value =  'bairro não encontrado!';
        document.getElementById('estado').value =  'Estado não encontrado!';
        document.getElementById('cidade').value =  'Cidade não encontrado!';
        document.getElementById('endereco').value = 'endereco não encontrado!';
    }else{
        preencherFormulario(endereco);
    }
    
}

document.getElementById('cep').addEventListener('focusout',pequisaCep);
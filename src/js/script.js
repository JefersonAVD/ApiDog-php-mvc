async function lista() {
    const data = new FormData();
    data.append('race',breed.value)
    const req = await fetch("/racelist",{
        method:'POST',
        body:data
    })
    const lista = await req.json();
    
    const campo = document.querySelector('.campo')
    const sugestoes = document.querySelector('.sugestoes')
    sugestoes.innerHTML = `${lista.message.map(texto).join('')}`
    

    campo.addEventListener('input', ({ target }) => {
        const dadosDoCampo = target.value
        if(dadosDoCampo.length) {
            const autoCompleteValores = autoComplete(dadosDoCampo,lista.message)
            sugestoes.innerHTML = `${autoCompleteValores.map(texto).join('')}`
        }
    })
}

function autoComplete(campo, array) {

    const subraca = array;
    return subraca.filter((valor) => {
            const valorMinusculo = valor.toLowerCase()
            const campoMinusculo = campo.toLowerCase()

            return valorMinusculo.includes(campoMinusculo)
        })
}

function texto (valor){return `<option>${valor.charAt(0).toUpperCase()+ valor.slice(1)}</option>`};

const colorOpt = document.querySelector('#color');
const fontOpt = document.querySelector('#font');
const body = document.querySelector('main');

body.style.color = localStorage.getItem('color');
body.style.fontFamily = localStorage.getItem('font');
colorOpt.value = localStorage.getItem('color');
fontOpt.value = localStorage.getItem('font');
fontOpt.style.fontFamily = localStorage.getItem('font');
colorOpt.style.background = localStorage.getItem('color');

function setValues(){
    event.preventDefault();
    localStorage.setItem('color',colorOpt.value);
    localStorage.setItem('font',fontOpt.value);
    alert('Configurations sucessifuly saved!');
    location.reload();
}

function onloadFunctions(){
    event.preventDefault();
    lista(breed.value);

    [...fontOpt.options].forEach(ele=>ele.style.fontFamily = ele.value);
    [...colorOpt.options].forEach(ele=>ele.style.background = ele.value);
}

function selectChange({target}){
    target.style.background = target.value;
    target.style.fontFamily = target.value;
}

const breed = document.querySelector('.breed');
const opt = document.querySelector('#form-options');
window.onload = onloadFunctions
breed.addEventListener('change',lista);
opt.addEventListener('submit',setValues);
colorOpt.addEventListener('change',selectChange);
fontOpt.addEventListener('change',selectChange);

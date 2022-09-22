anobissexto = (ano) =>{
    return (ano % 4 === 0 && ano % 100 !== 0 && year % 400 !==0) || (ano % 100 === 0 && ano % 400 === 0)
}

diasFevereiro = (ano) => {
    return anobissexto(ano) ? 29 : 28
}

let calendario = document.querySelector('.calendario')

const nomes_mes = ['Janeiro', 'Fevereiro', 'MarÃ§o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']

let dataAtual = new Date()

let mesAtual = {value: dataAtual.getMonth()}
let anoAtual = {value: dataAtual.getFullYear()}

let escolher_mes = document.querySelector('#escolher_mes')

let mes_lista = calendario.querySelector('#mes_lista')

let ano = anoAtual;

escolher_mes.onclick = () => {
    mes_lista.classList.add('show')
}


gerarCalendario = (mes,ano) => {
    let calendario_dia = document.querySelector('.calendario_dia')
    calendario_dia.innerHTML = ''
    let calendario_header_ano = document.querySelector('#ano')

    let dias_do_mes = [31, diasFevereiro(ano), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    let dataAtual = new Date()

    escolher_mes.innerHTML = nomes_mes[mes]
    calendario_header_ano.innerHTML = ano

    let primeiro_dia = new Date(ano, mes, 1)

    for (let i = 0; i<= dias_do_mes[mes] + primeiro_dia.getDay() - 1; i++){
        let dia = document.createElement('div')
        if(i >= primeiro_dia.getDay()) {
            dia.classList.add('calendario_dia_hover')
            dia.innerHTML = i - primeiro_dia.getDay() + 1
            dia.innerHTML += `<span></span>
            <span></span>
            <span></span>
            <span></span>`
            if(i- primeiro_dia.getDay() + 1 === dataAtual.getDate() && ano === dataAtual.getFullYear() && mes === dataAtual.getMonth()) {
                dia.classList.add('dataAtual')
            }
        }
        calendario_dia.appendChild(dia)
    }
}

document.querySelector('#anterior_mes').onclick = () => {
    if(mesAtual.value > 0){
        --mesAtual.value
    }
    gerarCalendario(mesAtual.value, anoAtual.value)
}


document.querySelector('#proximo_mes').onclick = () => {
    if(mesAtual.value < 11){
        ++mesAtual.value
    }
    gerarCalendario(mesAtual.value, anoAtual.value)
}


gerarCalendario(mesAtual.value, anoAtual.value)
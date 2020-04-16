// aqui estan los bloques de interaccion con los respectivos enlaces de los botenes de la cabecera.

const adminPage = (persona, sexo) => {
    let saludo = sexo === 'm' ?
        'Bienvenido' :
        'Bienvenida'
    return `${saludo} a SEA, ${persona}`
}

//alert(adminPage('Arturo', 'm'));


function Clikerr_() {
    alert('Página de pruebas');
    console.log('acabas de clickar xD');
}


function Clickear() {
    alert('Página de pruebas');
    console.log('se está ejectuando la funcion clickear');
}

function Nuevos_ingresos() {
    alert('nuevos ingresos');
}

function Informes() {
    alert('Informes');
}


const SumarTodos = (...numeros) => {
    console.log(numeros)
}

SumarTodos(1, 2, 3, 4, 5, 6, 7);
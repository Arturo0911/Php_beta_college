class Busqueda {
    constructor(cedula) {
        this.cedula = cedula;
    }
}

// aqui generamos otra clase para poder instanciarlo
// dentro del form


// clase de la interfaz gráfica
class UI {
    /*searchCedula() {

    }*/

    putCedula(busqueda_general) {

        // aqui ponemos la obtencion del div para poder incluirle elementos de la clase
        // hijo o sea la clase que va a contener dentro del div.
        const put_container = document.getElementById('put-container');

        // este es el elemento hijo, como su nombre lo indica.
        const elementos_hijo = document.createElement('div');
        elementos_hijo.innerHTML = `<strong> valor de la cedula </strong>: ${busqueda_general.cedula}`;
        put_container.appendChild(elementos_hijo);

    }
}


document.getElementById('form-busqueda')
    .addEventListener('submit', function(e) {

        const Cedula = document.getElementById('Cedula').value;

        const busqueda = new Busqueda(Cedula);
        const ui = new UI();

        ui.putCedula(busqueda);
        e.preventDefault();
        console.log(busqueda);

    });
class Product {
    constructor(name, price, year) {
        this.name = name;
        this.price = price;
        this.year = year;
    }
}


// la interfaz de usuario interactua con el html
class UI {
    addProduct(product) {
        const productList = document.getElementById('product-list');
        const element = document.createElement('div')

        element.innerHTML = `
            <div class= "card text-center mb-4">
                <div class="card-body">
                    <strong>Product Name </strong>: ${product.name}
                    <strong>Product Price</strong>: ${product.price}
                    <strong>Product year</strong>: ${product.year}
                    <a href="#" class= "btn btn-danger" name="delete" >Delete</a>
                </div>
            </div>  
        `;
        productList.appendChild(element);
        this.resetForm();
    }

    resetForm() {
        document.getElementById('product-form').reset();
    }


    deleteProducts(element) {
        if (element.name === 'delete') {
            element.parentElement.parentElement.parentElement.remove();
            this.showMessage('product deleted successfully', 'success');

        }
    }

    showMessage(message, cssClass) {
        const div = document.createElement('div');
        div.className = `alert alert-${cssClass} mt-2`;
        div.appendChild(document.createTextNode(message));

        // mostrando en el  DOM
        const container = document.querySelector('.container');
        const app = document.querySelector('#App');
        container.insertBefore(div, app);
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 3000);



    }
}

// eventos del DOM (document object model)
// aqui estamos tomando valores del form para poder despues enviarlo al archivo php para poder hacer
// las respectivas consultas en las clases de base de datos.


document.getElementById('product-form')
    .addEventListener('submit', function(e) {
        const name = document.getElementById('name').value;
        const price = document.getElementById('price').value;
        const year = document.getElementById('year').value;


        const product = new Product(name, price, year);
        const ui = new UI();


        if (name === '' || price === '' || year === '') {
            return ui.showMessage('complete los datos', 'danger');
        }


        ui.addProduct(product);
        ui.resetForm();
        ui.showMessage('product added successfully', 'success');


        // se cancela el comportamiento por defecto del formulario con este método =>
        e.preventDefault();
        // ==========================================================================
    });

document.getElementById('product-list').addEventListener('click', function(e) {
    const ui = new UI();
    ui.deleteProducts(e.target);
});
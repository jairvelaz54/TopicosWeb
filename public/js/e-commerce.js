$(document).ready(function () {
    init();

    // Inicializa Select2 para la búsqueda de categorías por AJAX
    $('.js-data-example-ajax').select2({
        ajax: {
            url: '/api/categories',
            dataType: 'json',
            data: function (params) {
                return {
                    term: params.term, // término de búsqueda
                };
            },
            processResults: function (data) {
                return {
                    results: data.results,
                };
            },
            cache: true,
        },
        minimumInputLength: 1,  // Requiere al menos 1 carácter para comenzar la búsqueda
    });

    // Evento al seleccionar una categoría
    $('#cmbCategoryList').on('select2:select', function (e) {
        var data = e.params.data;
        console.log(data);

        // Actualiza la tabla con productos según la categoría seleccionada
        $("#tblProducts2").DataTable().ajax.url("/api/products/" + data.id).load();
    });
});

// Inicializa las DataTables
function init() {
    new DataTable('#tblProducts');

    // Configuración inicial para la tabla de productos
    new DataTable('#tblProducts2', {
        ajax: '/api/products',  // carga productos por defecto
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'sale_price' },
            { data: 'quantity' },
            { data: 'size' },
            { data: 'color' },
            { data: 'category.name'}
        ]
    });
}

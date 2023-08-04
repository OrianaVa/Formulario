$(document).ready(function() {
    function agregarCategoria() {
        var cod_cat = $('#cod_cat').val();
        var nombre_categoria = $('#nombre_categoria').val();

        $.ajax({
            url: 'agregarcategoria.php',
            type: 'POST',
            data: {
                cod_cat: cod_cat,
                nombre_categoria: nombre_categoria
            },
            success: function(data) {
                if (data == 'success') {
                    alertify.success('Categoría agregada con éxito');
                } else {
                    alertify.error('Error al agregar categoría');
                }
            }
        });
    }

    $('#btnAgregarCategoria').click(agregarCategoria);
});

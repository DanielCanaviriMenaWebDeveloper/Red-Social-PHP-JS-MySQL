for (i = new Date().getFullYear(); i > 1904; i--) {
	// 2021, 2020, 2019, ... 1902, 1905
    $("#years").append($('<option />').val(i).html(i));
}

for (i = 1; i < 13; i++) {
    $('#months').append($('<option />').val(i).html(i));
}

/* Actualizar el número de dias */
updateNumberOfDays();

function updateNumberOfDays() {
    $('#days').html('');
    month = $('#months').val();
    year = $('#years').val();
    /* Dias en el mes */
    days = daysInMonth(month, year);
    for (i = 1; i < days+1; i++) {
        $('#days').append($('<option />').val(i).html(i));
    }
}

function daysInMonth(month, year) {
    /* Dado un año y mes obtiene el número de dias en ese mes y año.*/
    return new Date(year, month, 0).getDate();
}

$('#years, #months').on('change', function() {
    updateNumberOfDays();
});


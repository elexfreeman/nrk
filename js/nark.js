/**
 * Created by User on 04.04.2016.
 */

$(function() {
    $('.hasDatepicker2').datetimepicker({
        format:'d.m.Y',
        lang:'ru',
        timepicker:false,
        closeOnDateSelect:true,

    });
});

var nark = [];

nark.Search = function()
{
    var SearchForm = $('#search-form').serializeArray();

    //$('.results-area').html(SearchForm);
    $('.results').fadeIn();

    $.ajax({
        type: 'GET',
        url: 'search',
        data: SearchForm,
       // dataType : "json",
        success: function(data) {
            $('.results-area').html(data);

        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });


}
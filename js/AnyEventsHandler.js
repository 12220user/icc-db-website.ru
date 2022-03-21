function LinqEnter(linq){
    document.location.replace(linq);
}

function SearchReplace(){
    let filter = document.getElementById('filter_data').innerHTML;
    document.location.replace('index.php?search='+document.getElementById('search_catalog_input').value + (filter != ''? '&filter=' + filter: ''));
}

$(document).ready(function(){
	// плавное перемещение страницы к нужному блоку
	$('#to_up').click(function () {
		destination = $('header').offset().top;
		$("body , html").animate({scrollTop: destination-75 }, 200);
	});

    // Событие изменения фильтра
    $('#fitler_select').change(function () {
        let value = $('#fitler_select').val();
        let search = document.getElementById('search_data').innerHTML;
        LinqEnter('index.php?' +(search == ''? '' : 'search=' + search + '&' )+ (value == '' ? '': 'filter=' + value));
    });

    let filter = document.getElementById('filter_data').innerHTML;
    $("#fitler_select option[value="+filter+"]").attr("selected", "selected");
});


$(window).scroll(function () { 
    let oneScrenHeight = $(window).height();
    let scroll = $(window).scrollTop();
    if(scroll > 100){
        $('#to_up').attr('class','visible');
    }
    else if (scroll < 100){
        $('#to_up').attr('class','hide');
    }
});




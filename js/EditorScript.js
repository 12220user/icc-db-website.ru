function EnterEditor(){
    let login = $('#login_i').val();
    let pass =  $('#password_i').val();
    Cookie.set('login' , login , 3600*24);
    Cookie.set('password' , pass , 3600*24);
    document.location.replace('./Editor.php');
}

function linqEnter(linq){
    document.location.replace(linq);
}

function CheckCorrectFormData(){
    let name = $('#ec_name').val();
    let author = $('#ec_i_author').val();
    let date = $('#ec_i_date').val();

    if(name == "" || author == "" || date == ""){
        alert("Некоторые обязательные поля пустые, заполните их!")
    }
    else{
        $('#cheack_b_f_c').attr('class' , 'button hide');
        $('#submit_button_createform').attr('class' , 'button');
    }
}
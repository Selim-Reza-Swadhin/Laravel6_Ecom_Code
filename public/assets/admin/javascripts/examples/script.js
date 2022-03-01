<!--Status ajax fn-->
$(document).ready(function(){

    $.validate({
        lang: 'en'
    });

	<!--Status ajax brand fn-->
$('body').on('change', '#brandStatus', function(){
    //alert('Ok');
    var id = $(this).attr('data-id');
    //alert(id);
    if(this.checked){
var status = 1;
    }else{
    var status = 0;
    }
    //alert(status);


    //ajax start
    $.ajax({
url: 'brandStatus/'+id+'/'+status, //brandStatus is route
method: 'get',
success: function(result){
console.log(result);
}
    });

});


<!--Status ajax category fn-->
$('body').on('change', '#categoryStatus', function(){
    //alert('Ok');
    var id = $(this).attr('data-id');
    //alert(id);
    if(this.checked){
var status = 1;
    }else{
    var status = 0;
    }
    //alert(status);


    //ajax start
    $.ajax({
url: 'categoryStatus/'+id+'/'+status, //categoryStatus is route
method: 'get',
success: function(result){
console.log(result);
}
    });

});

	
	});
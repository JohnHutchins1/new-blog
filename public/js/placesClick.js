 //getting the #add id when clicked on
 $.ajaxSetup({

    headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

});


 
 $(".btn-submit").click(function(e) {

    e.preventDefault();

    //getting the id of the picture being clicked
    var imgId = String(this.id);

    //adding the record to the user_pictures database
    $.ajax({
        type: 'post',
        url: '/places',
        data: {img_id:imgId},
        success: function(data) {
            alert(data.success);
        }
    });

});
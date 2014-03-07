$(document).ready(function(){
    var preview = $("#blah");
    var preview1 = $("#blah1");
    var preview2 = $("#blah2");

    $("#input").change(function(event){
        var input = $(event.currentTarget);
        var file = input[0].files[0];
        var reader = new FileReader();
        reader.onload = function(e){
            image_base64 = e.target.result;
            preview.attr("src", image_base64);

        };
        reader.readAsDataURL(file);
    });

    $("#imgInput1").change(function(event){
        var input = $(event.currentTarget);
        var file = input[0].files[0];
        var reader = new FileReader();
        reader.onload = function(e){
            image_base64 = e.target.result;
            preview1.attr("src", image_base64);

        };
        reader.readAsDataURL(file);
    });


    $("#imgInput2").change(function(event){
        var input = $(event.currentTarget);
        var file = input[0].files[0];
        var reader = new FileReader();
        reader.onload = function(e){
            image_base64 = e.target.result;
            preview2.attr("src", image_base64);

        };
        reader.readAsDataURL(file);
    });

});

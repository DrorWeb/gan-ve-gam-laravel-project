$('#userRole').on('change',function(){
    var selection = $(this).val();
    switch(selection){
    case "3":
    $("#adminWarning").show()
   break;
    default:
    $("#adminWarning").hide()
    }
});

$('#passChange').on('change',function(){
    var selection = $(this).val();
    switch(selection){
    case "1":
    $("#hideOrShow").show()
   break;
    default:
    $("#hideOrShow").hide()
    }
});

$('#passChangeLG').on('change',function(){
    var selection = $(this).val();
    switch(selection){
    case "1":
    $("#hideOrShowLG").show()
   break;
    default:
    $("#hideOrShowLG").hide()
    }
});


//
//// Image preview for adding slider slide
//document.getElementById("files").onchange = function () {
//    var reader = new FileReader();
//
//    reader.onload = function (e) {
//        // get loaded data and render thumbnail.
//        document.getElementById("image").src = e.target.result;
//    };
//
//    // read the image file as a data URL.
//    reader.readAsDataURL(this.files[0]);
//};

          


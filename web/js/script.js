$(function () {

// вызываем аккордион
$('.categories-sheps').dcAccordion({speed: 300});

// focus на мод. окно

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

//comments

$ (document).on('beforeCreate', '#comment-form', function(e) {
 if( !confirm("Здесь все правильно. Submit?")) {
 return false;
 }
 return true;
});

});

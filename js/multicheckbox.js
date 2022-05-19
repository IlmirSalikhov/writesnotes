var genusExpanded = false;
function showGenusMulticheckbox() {
  var selectGenusList = document.getElementById("selectGenusList");
  if (!genusExpanded) {
    selectGenusList.style.display = "block";
    selectGenusList.style.width = "176px";
    genusExpanded = true;
  } else {
    selectGenusList.style.display = "none";
    genusExpanded = false;
  }
}

var typeExpanded = false;
function showTypeMulticheckbox() {
  var selectTypeList = document.getElementById("selectTypeList");
  if (!typeExpanded) {
    selectTypeList.style.display = "block";
    selectTypeList.style.width = "176px";
    typeExpanded = true;
  } else {
    selectTypeList.style.display = "none";
    typeExpanded = false;
  }
}

var genreExpanded = false;
function showGenreMulticheckbox() {
  var selectGenreList = document.getElementById("selectGenreList");
  if (!genreExpanded) {
    selectGenreList.style.display = "block";
    selectGenreList.style.width = "190px";
    genreExpanded = true;
  } else {
    selectGenreList.style.display = "none";
    genreExpanded = false;
  }
}

var ARExpanded = false;
function showARMulticheckbox() {
  var selectARList = document.getElementById("selectARList");
  if (!ARExpanded) {
    selectARList.style.display = "block";
    selectARList.style.width = "52px";
    ARExpanded = true;
  } else {
    selectARList.style.display = "none";
    ARExpanded = false;
  }
}

// чекбокс для выбора рода произведений ~
$('#selectGenusList .genus-checkbox').change(function(){
    if($('#selectGenusList .genus-checkbox:checked').length >= 1){
        $('#selectGenusList .genus-checkbox:not(:checked)').attr('disabled', "disabled");
        $('#genusOption').html($('#selectGenusList .genus-checkbox:checked').val());
        $('#typeList select').removeAttr("disabled");
        $('#genreList select').removeAttr("disabled");
        if($('#epicGenusCheckbox').prop('checked')){
          $('#epicTypeList').css('display', "block");
        }
        if($('#lyricsGenusCheckbox').prop('checked')){
          $('#lyricsTypeList').css('display', "block");
        }
        if($('#dramaGenusCheckbox').prop('checked')){
          $('#dramaTypeList').css('display', "block");
        }
        if($('#lyroepicGenusCheckbox').prop('checked')){
          $('#lyroepicTypeList').css('display', "block");
        }
        // чекбокс для выбора типа произведений ~
        $('#selectTypeList .genus-checkbox').change(function(){
          if($('#selectTypeList .genus-checkbox:checked').length >= 1){
            $('#selectTypeList .genus-checkbox:not(:checked)').attr('disabled', "disabled");
            $('#typeOption').html($('#selectTypeList .genus-checkbox:checked').val());
              // чекбокс для выбора жанра произведений
              $('#selectGenreList .genus-checkbox').change(function(){
                if($('#selectGenreList .genus-checkbox:checked').length >= 1){
                  $('#genreOption').html('Выбрано: '+ $('#selectGenreList .genus-checkbox:checked').length);
                }
                if($('#selectGenreList .genus-checkbox:checked').length == 0){
                  $('#genreOption').html('Жанр произведения');
                }
              });
              // ~ чекбокс для выбора типа произведений   
          }else{
            $('#selectTypeList .genus-checkbox:disabled').removeAttr('disabled');
            $('#typeOption').html('Выбрано: '+ $('#selectTypeList .genus-checkbox:checked').length);
          }
          if($('#selectTypeList .genus-checkbox:checked').length == 0){
            $('#typeOption').html('Вид произведения');
          }
        });
        // чекбокс для выбора жанра произведений
        $('#selectGenreList .genus-checkbox').change(function(){
          if($('#selectGenreList .genus-checkbox:checked').length >= 1){
            $('#genreOption').html('Выбрано: '+ $('#selectGenreList .genus-checkbox:checked').length);
          }
          if($('#selectGenreList .genus-checkbox:checked').length == 0){
            $('#genreOption').html('Жанр произведения');
          }
        });      
        // ~ чекбокс для выбора рода произведений
    }else{
        $('#selectGenusList .genus-checkbox:disabled').removeAttr('disabled');
        $('#genusOption').html("Род произведения");
        $('#typeList select').attr('disabled', "disabled");
        $('#genreList select').attr('disabled', "disabled");
        if('#selectTypeList .genus-checkbox:checked'){
          $('#selectTypeList .genus-checkbox').prop('checked', false);
          $('#typeOption').html("Вид произведения");
        }
        if($('#epicGenusCheckbox').prop('checked', false)){
          $('#epicTypeList').css('display', "none");
        }
        if($('#lyricsGenusCheckbox').prop('checked', false)){
          $('#lyricsTypeList').css('display', "none");
        }
        if($('#dramaGenusCheckbox').prop('checked', false)){
          $('#dramaTypeList').css('display', "none");
        }
        if($('#lyroepicaGenusCheckbox').prop('checked', false)){
          $('#lyroepicTypeList').css('display', "none");
        }
        $('#selectTypeList').css('display', "none");
        $('#selectGenreList').css('display', "none");
        genreExpanded = false;
        typeExpanded = false;
    }
});

$('#selectARList .genus-checkbox').change(function(){
  if($('#selectARList .genus-checkbox:checked').length >= 1){
    $('#selectARList .genus-checkbox:not(:checked)').attr('disabled', "disabled");
    $('#AROption').html($('#selectARList .genus-checkbox:checked').val());
  }
  if($('#selectARList .genus-checkbox:checked').length == 0){
    $('#selectARList .genus-checkbox:disabled').removeAttr('disabled');
    $('#AROption').html('—');
  }
});
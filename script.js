function send() {
  var msg   = $('#form').serialize();
    $.ajax({
      type: 'POST',
      url: 'send.php',
      data: msg,
      success: function(data) {
        alert('Запись успешно добавлена!');
      },
      error:  function(xhr, str){
        alert('Возникла ошибка: ' + xhr.responseCode);
      }
    });

}
function task() {
  var msg   = $('#form').serialize();
    $.ajax({
      type: 'POST',
      url: 'send.php',
      data: msg,
      success: function(data) {
        $("#task").html(data);
      },
      error:  function(xhr, str){
        alert('Возникла ошибка: ' + xhr.responseCode);
      }
    });

}

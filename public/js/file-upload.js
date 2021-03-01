$(function(){
  $('#btnInputFile').on('click', function() {
    $('#uploadFile').trigger('click');
  });
  $('#uploadFile').on('change', function () {
    $('.image-form').submit();
    window.location.href = '/image-uploader/upload';
  });

  $('html').on('drop', function (e) {
    e.preventDefault();
    e.stopPropagation();
  });

  var droppable = $("#dropZone");
  // File API が使用できない場合は諦めます.
  if(!window.FileReader) {
    alert("File API がサポートされていません。");
    return false;
  }

  // イベントをキャンセルするハンドラです.
  var cancelEvent = function(event) {
    event.preventDefault();
    event.stopPropagation();
    return false;
  };

  // dragenter, dragover イベントのデフォルト処理をキャンセルします.
  droppable.bind("dragenter", cancelEvent);
  droppable.bind("dragover", cancelEvent);

  // ドロップ時のイベントハンドラを設定します.
  var handleDroppedFile = function(event) {
    // ファイルは複数ドロップされる可能性がありますが, ここでは 1 つ目のファイルを扱います.
    var file = event.originalEvent.dataTransfer.files[0];

    // ファイルの内容は FileReader で読み込みます.
    var fileReader = new FileReader();
    fileReader.onload = function(event) {
      // event.target.result に読み込んだファイルの内容が入っています.
      // ドラッグ＆ドロップでファイルアップロードする場合は result の内容を Ajax でサーバに送信しましょう!
      // $("#dropZone").text("[" + file.name + "]" + event.target.result);
      $.ajax({
        url: '/image-uploader/upload',
        type: 'POST',
        data: event.target.result
      }).done(function() {
        console.log('ローディング画面に移動する');
      }).fail(function() {
        console.log('アップロードに失敗しました。');
      });
    };
    fileReader.readAsText(file);

    // デフォルトの処理をキャンセルします.
    cancelEvent(event);
    return false;
  };

  // ドロップ時のイベントハンドラを設定します.
  droppable.bind("drop", handleDroppedFile);
});

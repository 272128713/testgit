
<!DOCTYPE html>
<html lang="cn">
    <head>
        <meta charset="UTF-8"/>
        <title>test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div id="uploadbox" style="height: 200px;background-image:url('upload/camera-outline_318-8404.jpg');background-size:contain;background-position:center center;background-repeat:no-repeat;position: relative;margin: 10px 15px 15px;border: 1px solid #ddd;border-radius: 3px;transition: all 0.3s;-webkit-transition: all 0.3s;overflow: hidden;margin-bottom: 0;">
        <input id="filetest"  type="file" accept="image/*" style="width: 100%;height: 100%;opacity: 0;position: absolute;left: 0px;top: 0px;z-index: 4;"/>
    </div>
    <script src="../../common/js/jquery.min.js"></script>
    <script>
        $('#filetest').change(function(){

//            var file = this.files[0];
//            name = file.name;
//            size = file.size;
//            type = file.type;
//            var filepath = $(this).val();
//            $.post('upload.php',{'file':file},function(data){
//                console.log(data);
//            });
            var file = $(this)[0].files[0];
            console.log(file);
            var formData = new FormData();
            formData.append('file', $('#filetest')[0].files[0]);
            $.ajax({
                url: 'upload.php',
                type: 'POST',
                cache: false,
                data: formData,
                processData: false,
                contentType: false
            }).done(function(data) {
                if(data){
                    $("#uploadbox").css("background-image","url('http://"+data+"')") ;
                }
            }).fail(function(data) {
                alert("上传失败!");
            });
        });
    </script>
</html>
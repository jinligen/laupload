<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>uploadfile test</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label>单文件上传</label>
        <input type="file" name="uploadfile">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label>多文件上传</label>
        <input type="file" name="uploadfile[]">
        <input type="file" name="uploadfile[]">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
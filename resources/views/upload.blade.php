<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <form method="POST" action="{{ route('file.upload') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
</body>
</html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Edit Investment</h1>
  <form action="/edit-investment/{{$investment->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$investment->title}}">
    <textarea name="body">{{$investment->body}}</textarea>
    <button>Save Changes</button>
  </form>
</body>
</html>
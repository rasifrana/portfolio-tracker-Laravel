<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @auth
        <p>You are Logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>

        {{-- Create a post --}}

    <div style="border: 1px solid black; margin-top: 10px;">
        <h2>Create a New Post</h2>
        <form action="/create-investment" method="POST">
          @csrf
          <input type="text" name="title" placeholder="post title">
          <textarea name="body" placeholder="body content..."></textarea>
          <button>Save Post</button>
        </form>
      </div>

      {{-- Show all Investments --}}
      <div style="border: 3px solid black;">
        <h2>All Posts</h2>
        @foreach($investments as $investment)
        <div style="background-color: gray; padding: 10px; margin: 10px;">
          <h3>{{$investment['title']}} by {{$investment->user->name}}</h3>
          {{$investment['body']}}
          <p><a href="/edit-post/{{$investment->id}}">Edit</a></p>
          <form action="/delete-post/{{$investment->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
          </form>
        </div>
        @endforeach
      </div>
    @else
    <div style="border: 1px solid grey; padding: 10px;">
        <h2>Register</h2>
        <form action="/register" method="POST">
          @csrf
          <input name="name" type="text" placeholder="name">
          <input name="email" type="text" placeholder="email">
          <input name="password" type="password" placeholder="password">
          <button>Register</button>
        </form>
    </div>

    
      
      {{-- login --}}

      <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
          @csrf
          <input name="loginname" type="text" placeholder="name">
          <input name="loginpassword" type="password" placeholder="password">
          <button>Log in</button>
        </form>
      </div>
    @endauth


    
</body>
</html>
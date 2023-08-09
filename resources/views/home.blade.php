@extends('base')

@section('title', 'Welcome')

@section('content')

    @auth
        <p>You are Logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>

       

    <div style="border: 1px solid black; margin-top: 10px;">
        <h2>Create a New Asset</h2>
        <form action="/create-investment" method="POST">
          @csrf
          <input type="text" name="title" placeholder="Asset Name">
          <textarea name="body" placeholder="Details"></textarea>
          <select name="asset-type" id="asset-type">
            <option value="">Asset Type</option>
            @foreach($categories as $category)
                <option value="{{$category->category_name}}">{{ $category->category_name }}</option>
            @endforeach
          </select>
          <button>Add Asset</button>
        </form>
      </div>

      {{-- Show all Investments --}}
      <div style="border: 3px solid black;">
        <h2>All Assets</h2>
        @foreach($investments as $investment)
        <div style="background-color: gray; padding: 10px; margin: 10px;">
          <h3>{{$investment['title']}} by {{$investment->user->name}}</h3>
          {{$investment['body']}}
          <p>Category - {{$investment->asset_type}}</p>
          <p><a href="/edit-investment/{{$investment->id}}">Edit</a></p>
          <form action="/delete-investment/{{$investment->id}}" method="POST">
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
          <input name="loginemail" type="text" placeholder="Email">
          <input name="loginpassword" type="password" placeholder="password">
          <button>Log in</button>
        </form>
      </div>
    @endauth

    @endsection
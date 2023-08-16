@extends('base')

@section('title', 'Welcome')

@section('content')

    <div class="container mt-5">
        {{-- <p class="text-danger my-5 w-50 mx-auto ">Email or Password Incorrect</p> --}}
        <div class="w-50 mx-auto  p-3 rounded shadow shadow-lg">
            <h3 class="text-center mb-5">Update asset details</h3>
            <div>
                <form action="/edit-investment/{{$investment->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" value="{{$investment->title}}">
                      </div>
                    <div class="form-group">
                        <textarea name="body" class="form-control">{{$investment->body}}</textarea>
                    </div>
                    <div class="form-group">
                        <select name="asset-type" class="form-control" id="asset-type">
                            <option value="">Asset Type</option>
                            @foreach($categories as $category)
                            @if($category->category_name == $investment->asset_type)         
                                <option selected value="{{$category->category_name}}">{{ $category->category_name }}</option>
                            @else
                                <option value="{{$category->category_name}}">{{ $category->category_name }}</option>
                            @endif
                                
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </form>
            </div>
        </div>
    </div>



 
  {{-- <form action="/edit-investment/{{$investment->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$investment->title}}">
    <textarea name="body">{{$investment->body}}</textarea>
    <select name="asset-type" id="asset-type">
        <option value="">Asset Type</option>
        @foreach($categories as $category)
        @if($category->category_name == $investment->asset_type)         
            <option selected value="{{$category->category_name}}">{{ $category->category_name }}</option>
        @else
            <option value="{{$category->category_name}}">{{ $category->category_name }}</option>
        @endif
            
        @endforeach
      </select>
    <button>Save Changes</button>
  </form> --}}

  @endsection
@extends('base')

@section('title', 'Welcome')

@section('content')

    @auth
        {{-- <p>You are Logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form> --}}

       

    {{-- <div style="margin-top: 10px;">
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
      </div> --}}

      {{-- Show all Investments --}}
    <div class="container py-5">
        
            <div class="d-flex align-items-center justify-content-between my-4">
                <h3 class="text-center">Welcome {{ Auth::user()->name }} !</h3>
                <h4>Your Portfolio: €{{$assets['assetsVal']}}</h4>
            </div>
            
            <div class="text-center py-3 mb-3">
                <button type="button" class="btn btn-success ml-2" data-toggle="modal" data-target="#assetModal">
                    +Add Asset
                </button>
                <div class="modal fade" id="assetModal" tabindex="-1" role="dialog" aria-labelledby="assetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add to Portfolio</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-left">
                            <div>
                                <form action="/create-investment" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="title" placeholder="Asset Name" class="form-control" id="exampleInputName1" placeholder="Enter Name">
                                      </div>
                                    <div class="form-group">
                                      <textarea name="body" placeholder="Details"  class="form-control"></textarea> 
                                    </div>
                                    <div class="form-group">
                                        <input type="number" step=".01" name="price" placeholder="Price" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <input type="number" name="quantity" placeholder="Quantity" class="form-control">
                                      </div>
                                    <div class="form-group">
                                        <select name="asset-type" id="asset-type" class="form-control">
                                            <option value="">Asset Type</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->category_name}}">{{ $category->category_name }}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Asset</button>
                                  </form>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
        
        <div class="row">
            @foreach($assets['investments'] as $investment)
            <div class="col-s-12 col-md-6 p-2">
           
                <div class="border-7 border-left border-{{$investment->color}} p-3 d-flex flex-column align-items-center justify-content-center shadow shadow-lg rounded">
          
            <div class="d-flex align-items-center justify-content-start w-100">
                <h4>{{$investment['title']}}</h4>
                <small class="rounded px-1 bg-{{$investment->color}} ml-2 mb-2 text-white text-sm">{{$investment->asset_type}}</small>
            </div>
              
              {{-- by {{$investment->user->name}} --}}
              <div class="text-left w-100">
                <small  class="">{{$investment['body']}}</small>
              <div class="d-flex align-items-center">
                <p>Price - €{{$investment['price']}}</p>
                <p class="ml-2">Qty - {{$investment['quantity']}}</p>
              </div>
              <div class="d-flex align-items-center mb-4">
                <p>Total: €</p>
                 <h4 class="mb-2">{{$investment->assetVal}}</h4>
              </div>
              </div>
              
              
              
              {{-- <div>
                <i class="fa fa-money text-secondary fa-4x" aria-hidden="true"></i>
              </div> --}}
              <div class="d-flex">
                <a class="btn btn-sm btn-warning mr-2" href="/edit-investment/{{$investment->id}}">Edit</a>
              <form action="/delete-investment/{{$investment->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
              </form>
              </div>
              
          </div>
          </div>
          @endforeach
        </div>
    </div>
      
    @else
      {{-- login --}}

      <div class="container">
        {{-- <p class="text-danger my-5 w-50 mx-auto ">Email or Password Incorrect</p> --}}
        <div class="w-50 mx-auto  p-3 rounded shadow shadow-lg">
            <h3 class="text-center mb-5">Login</h3>
            <form action="/login" method="POST">
                @csrf
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="loginemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="loginpassword"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
    @endauth

    @endsection
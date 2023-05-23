<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Edit Inventory</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<body>
    
 

 
    <header class="title">
        <h1>{{ __('Edit Inventory') }} </h1>
        <a href="{{ route('inventory.index') }}" class="btn btn-sm btn-primary">
            {{ __('Back') }}
        </a>
    </header>



    <div class="grid">
     
        <div class="grid-col">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @elseif ($message = Session::get('success'))
                <div class="alert alert-success text-capitalize">
                    {{ $message }}
                </div>
            @endif



            <form action="{{url('inventory/update',$inventory->id)}}" method="post">
                @csrf
            <div class="formwrap mb-4">
                <div class="panel">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name" class = "form-label">Name:</label>                           
                            <input type="text" placeholder="Enter name" name="name" value="{{$inventory->name}}" class="form-control">
                                                                              
                        </div>

                        <div class="form-group col-md">
                            <label for="currency">currency:</label>
                            <select name="currency" id="currency" class="form-control">
                                <option value="INR">INR</option>
                                <option value="€">€</option>
                               
                              </select>
                                                                      
                        </div>

                        <div class="form-group col-md">
                            <label for="price" class = "form-label">Price:</label>                           
                            <input type="text" placeholder="Enter price" name="price" value="{{$inventory->price}}" class="form-control euroFormat">
                                                                                
                        </div>
                        <div class="form-group col-md">
                            <label for="stock" class = "form-label">Stock:</label>                           
                            <input type="text" placeholder="Enter stock" name="stock" value="{{$inventory->stock}}" class="form-control">
                                                                      
                        </div>
                        <div class="form-group col-md">
                            <label for="tax" class = "form-label">Tax:</label>                           
                            <input type="text" placeholder="Enter nataxme" name="tax" value="{{$inventory->tax}}" class="form-control">
                                                                       
                        </div>
                    </div>
                </div>


            </div>
            <button type="submit" name="action" value="Update"
            class="btn btn-primary">{{ __('Update') }}</button>
</form>
            
        </div>
    </div>
 </body>
</html>

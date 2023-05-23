  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Inventory</title>
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <body>
    <header class="title">
        <h1>{{ __('Inventory') }}</h1>
        <div><a href="{{ route('inventory.create') }}" class="btn btn-sm btn-primary">
            {{ __('Create') }}
        </a></div>
    </header>
    <div class="grid">
       
        <div class="grid-col">
            @if ($message = Session::get('success'))
                <div class="alert alert-success text-capitalize">
                    {{ $message }}
                </div>
            @endif
            <div class="formwrap">
                <table class="table table-striped" id="my-table">
                    <thead>
                        <tr class=" table-primary">
                            <th scope="col">{{ __('Item Name') }}</th>
                            <th scope="col">{{ __('Price') }}</th>
                            <th scope="col">{{ __('Tax') }}</th>
                            <th scope="col">{{ __('Stock') }}</th>                        
                            <th scope="col" width="150">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($inventory) and !empty($inventory))
                            @foreach ($inventory as $key => $inv)
                                <tr class="data-row">
                                    <td>{{ $inv->name??'' }}</td>
                                    <td>{{ $inv->currency??'' }} {{ $inv->price??'' }}</td>
                                    <td>{{ $inv->tax??'' }}</td>
                                    <td>{{ $inv->stock??'' }}</td>                                    
                                    <td>
                                        <form method='POST' action="{{url('inventory/destroy/' . $inv->id)}}">
                                            <input name='_method' type='hidden' value='DELETE'><input name='_token' type='hidden' value='" . csrf_token() . "'>
                                        
                                            <a class='btn btn-primary btn-sm' href="{{url('inventory/edit/' . $inv->id)}}">Edit</a>
                                            <button type='submit' class='ms-1 btn btn-danger text-white btn-sm'>Delete</button>                                                                                                                                                                                                  
                                                                                                </form> 
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            {{$inventory->render()}}
        </div>
    </div>
</body>
</html>



    

       

@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Start 1
</h1>

<div class="row">
    @foreach ($comics as $comic)
        <div class="col-12 col-sm-3">
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
    <p class="card-text">{{ $comic['description'] }}</p>
  <ul>
                
                <li>
                    {{ $comic['price'] }}
                </li>
                <li>
                    {{ $comic['series'] }}
                </li>
                <li>
                    {{ $comic['sale_date'] }}
                </li>
                <li>
                    {{ $comic['type'] }}
                </li>
            </ul>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            
        </div>
    @endforeach
</div>
@endsection

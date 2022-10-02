@extends('layout.main')

@section('content')

  <h1> questa è la vista home dentro section/content</h1>
  <h2></h2>
  <ul class="list-inline">
    <li>
      img
      <i class="fa-thin fa-bars-sort"></i>
    </li>
    <li class="{{Route::currentRouteName() == 'prodotto' ? 'active' : ''}}">
      <a href="#">link</a>
    </li>
    <li>
      <a href="#">link2</a>
    </li>
    <li>
      <a href="#">link3</a>
    </li>
    <li>
      <a href="#">link4</a>
    </li>
  </ul>
  <h2></h2>

  <section>
    <h2>terzo anno</h2>
    @foreach ($terzoAnno as $modulo)
      <div class="modulo">
        <h3>questo e il nome del modulo: {{$modulo['nome']}}</h3>
        <h3>link alla pagina parametrica del prodotto</h3>
        <a href="{{route('prodotto', ['id'=> $modulo['id']])}}">{{$modulo['video']}}</a>
      </div>
        
    @endforeach
  </section>

  <a href="{{route('prodotto', ['id' => 0])}}">vai alla pagina product id 0</a>
  <a href="{{route('prodotto', ['id' => 1])}}">vai alla pagina product id 1</a>
@endsection
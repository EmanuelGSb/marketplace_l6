@extends('layouts.app')


@section('content')
<a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>loja</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>R$ {{number_format($product->price, 2, ',', '.')}}</td>
                <td>{{$product->store->name}}</td>
                <td>
                <div class="btn-group">
                  <a href="{{route('admin.products.edit',['product' => $product->id])}}" class="btn btn-sn btn-warning">Editar</a>
                    <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="post">
                    @csrf 
                    @method('DELETE')
                      <button type="submit" class="btn btn-sn btn-danger">Remover</button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

    {{
      $products->links()
    }}
  @endsection
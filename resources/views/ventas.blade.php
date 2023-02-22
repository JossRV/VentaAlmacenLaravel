@extends('./layouts/main')
@section('contenido')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="display-4 text-center">Ventas</div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                {{-- {{print($items)}} --}}
                <table class="table table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Serial</th>
                            <th>Precio</th>
                            <th>Fecha vendido</th>
                            <th>Vendedor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <img src="{{asset("img/".$item->imagen.".png")}}" style="width: 100px" alt="{{$item->imagen}}">
                                </td>
                                <td>{{$item->producto}}</td>
                                <td>{{$item->serial}}</td>
                                <td>${{$item->precio}}</td>
                                <td>{{$item->vendido}}</td>
                                <td>{{$item->usuario}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@extends('./layouts/main')
@section('contenido')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="display-4 text-center">Productos del almacen</div>
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
                            <th>Almacenado</th>
                            <th>Ubicacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <img src="{{asset("img/".$item->imagen)}}" style="width: 100px" alt="">
                                </td>
                                <td>{{$item->producto}}</td>
                                <td>{{$item->serial}}</td>
                                <td>{{$item->almacen}}</td>
                                <td>{{$item->ubicacion}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
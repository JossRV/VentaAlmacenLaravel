@extends('./layouts/main')
@section('contenido')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="display-4 text-center">Personal</div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                {{-- {{print($items)}} --}}
                <table class="table table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre completo</th>
                            <th>Genero</th>
                            <th>Puesto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre .' '. $item->paterno}}</td>
                                <td>{{$item->genero}}</td>
                                <td>{{$item->puesto}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
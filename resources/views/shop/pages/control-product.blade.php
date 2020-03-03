@extends('shop/main')
@section('content')

    <div class="row justify-content-around">
        <h3 class=" text-black">Valdykite produktus</h3>
    </div>
    <div class="site-section bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-2">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Pavadinimas</th>
                        <th scope="col">Aprašymas</th>
                        <th scope="col">kaina</th>
                        <th scope="col">kiekis</th>
                        <th scope="col">Kategorija</th>
                        <th scope="col"></th>
                        <th scope="col">Veiksmai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            @foreach($categories as $category)
                                @if($product->catid == $category->id)
                                    <td>{{$category->category}}</td>
                                @endif
                            @endforeach
                            <td><a href="/delete-product/{{$product->id}}">Šalinti</a></td>
                            <td><a href="/edit/{{$product->id}}">Redaguoti</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="buton">
                    <a class="btn btn-primary" href="/add-product" role="button">Pridėti produktą</a>
                </div>
                <br>
            </div>
        </div>
    </div>
    </div>
@stop
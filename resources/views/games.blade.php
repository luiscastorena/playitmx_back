<div>
    <h2>Inventario</h2>
    @foreach($ListGames as $juegos)
    {{$juegos->id }} - {{$juegos->nombre }} - {{$juegos->precio }} - {{$juegos->unidades }} <br>
    @endforeach
</div>

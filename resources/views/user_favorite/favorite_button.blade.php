    @if (Auth::user()->is_fav($micropost->id))
        {!! Form::open(['route' => ['user.unfav', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFavorite', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.fav', $micropost->id]])!!}
            {!! Form::submit('Favorite', ['class' => 'btn btn-primary btn-xs']) !!}
        {!! Form::close() !!}
    @endif
@if (Auth::user()->id != $user->id)
    @if (Auth::favorites()->is_fav($favotrites->id))
    
        {!! Form::open(['route' => ['micropost.unfav', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFavotrite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    
    @else
    
        {!! Form::open(['route' => ['micropost.fav', $user->id], 'method' => 'put']) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    
    @endif
@endif
@extends('layout.layout')
@section('title', 'Games')

@section('content')
    @if ($exists)
        <table class="table">
            <tbody>
                @foreach ($games as $game)
                    @if ($loop->first || $loop->index % 3 === 0)
                        <tr>
                    @endif
                    <td>
                        <div class="card mb-3">
                            <img src="{{ $game['image'] }}" class="card-img-top" alt="{{ $game['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $game['name'] }}</h5>
                                <p class="card-text">Genre: {{ $game['genre'] }}</p>
                            </div>
                        </div>
                    </td>
                    @if ($loop->last || $loop->iteration % 3 === 0)
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @else
        <p>No games found.</p>
    @endif
@endsection

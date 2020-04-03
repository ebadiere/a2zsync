@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Movies Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @foreach($movies as $movie)
                        @php
                        {{ $current_year = date("Y"); }}
                        @endphp
                        <tr>
                            <td>{{ $movie->title}} released in </td>
                            <td>{{ $movie->year_released  }} ( {{$current_year - $movie->year_released }} years ago)</td><br />
                        </tr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

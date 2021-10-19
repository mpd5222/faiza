@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-succes" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-responsive table-striped">
                        <thread>
                            <tr>
                                <th>NIM</th>
                                <th>Name</th>
                                <th>Class</th>
                            </tr>
                        </thread>
                        <tbody>
                            @foreach($student as $s)
                            <tr>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->class }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/students/create" class="btn btn-primary">Add Data</a> <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
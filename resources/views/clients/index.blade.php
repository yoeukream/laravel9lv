@extends('layouts.app-master')

@section('content')


    <div class="bg-light p-4 rounded mt-2">
        <h2>Clients</h2>
        <div class="lead">
            Manage your clients here.
            <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm float-right">Add row</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($clients as $key => $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->title }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('clients.show', $row->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('clients.edit', $row->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $row->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $clients->links() !!}
        </div>

    </div>
@endsection

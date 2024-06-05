<!-- resources/views/mobs/index.blade.php -->

@extends('base2')

@section('content')
    <div class="container">
        <h1>Mobs</h1>
        <a href="{{ route('mobs2.create') }}" class="btn btn-primary mb-3">Add Mob</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PIC</th>
                    <th>Moroccan Partner</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mobs2 as $mob2)
                    <tr>
                        <td>{{ $mob->id }}</td>
                        <td>{{ $mob->pic }}</td>
                        <td>{{ $mob->moroccan_partner }}</td>
                        <td>
                            <a href="{{ route('mobs2.edit', $mob2->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('mobs2.destroy', $mob2->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<h1 class="text-3xl text-green-500 mb-3">Nos freelances</h1>


<div>
    <p><b> {{ $count[0]->total }} freelances inscrits.</b></p><br>
</div>


<div>

    <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded border-2 border-blue-300">
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Rate</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($freelances as $freelance)
                    <tr>
                        <td>{{ $freelance->name }}</td>
                        <td>{{ $freelance->email }}</td>
                        <td>{{ $freelance->location }}</td>
                        <td>{{ $freelance->rate }}</td>
                        <td>
                            <a href="{{ route('freelances.show', $freelance->id) }}">View</a>
                            <a href="{{ route('freelances.edit', $freelance->id) }}">Edit</a>
                            <form action="{{ route('freelances.destroy', $freelance->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>


    </div>

</div>

@endsection
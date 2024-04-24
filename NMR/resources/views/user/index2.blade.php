@extends('partials.base')
@section('title', 'Users')
@section('content')
    <h1>Users</h1>
    <div>
        <div>
            <div>
                <div>
                    <h5>Users</h5>
                </div>
                <div>
                    <table >
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Recettes</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <a
                                            href="{{ route('user.edit', $user->id) }}"class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  text-green-500 border-green-500 hover:bg-green-500 hover:text-white bg-white hover:green-600">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

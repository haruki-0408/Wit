@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <table>
                <tr>
                    <th>Name</th>
                    <th>EMail</th>
                    <th>remember_token</th>
                    <th>email_verified_at</th>
                    <th>profile_message</th>
                    <th>profile_image_PATH</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>deleted_at</th>
                </tr>
                @foreach ($items as $item)
                    <tr>
                        <td><img src="{{ asset($item->profile_image) }}" alt="" width="50" height="50" class="rounded-circle">
                        <strong>{{ $item->name }}</strong></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->remember_token }}</td>
                        <td>{{ $item->email_verified_at }}</td>
                        <td>{{ $item->profile_message }}</td>
                        <td>{{ $item->profile_image }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>{{ $item->deleted_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container-fluid app-body settings-page">
        <h3>Calendar (Coming Soon)</h3>
        <table class="table table-striped">
            <tr>
                <th>Group Name</th>
                <th>Group Type</th>
                <th>Account Name</th>
                <th>Post Text</th>
                <th>Time</th>
            </tr>
            @foreach($mesgs as $key)
            <tr>
                <td>{{$key->group->name}}</td>
                <td>{{$key->group->type}}</td>
                <td>
                    <img src="{{base_path($key->group->user->id)}}">
                </td>
                <td>{{$key->text}}</td>
                <td>{{$key->created_at}}</td>
            </tr>
                @endforeach
        </table>
        {{$mesgs->links()}}
    </div>



@endsection

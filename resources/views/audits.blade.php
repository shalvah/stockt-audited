@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Model</th>
                <th scope="col">Action</th>
                <th scope="col">User</th>
                <th scope="col">Time</th>
                <th scope="col">Old Values</th>
                <th scope="col">New Values</th>
            </tr>
            </thead>
            <tbody>
            @foreach($audits as $audit)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $audit->auditable_type }}</td>
                    <td>{{ $audit->event }}</td>
                    <td>{{ $audit->user->name }}&nbsp;({{ $audit->user_id }})</td>
                    <td>{{ $audit->created_at->diffForHumans() }}</td>
                    <td>
                        <table class="table">
                            <tbody>
                            @foreach($audit->old_values as $attribute => $value)
                                <tr>
                                    <td><b>{{ $attribute }}</b></td>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table class="table">
                            <tbody>
                            @foreach($audit->new_values as $attribute => $value)
                                <tr>
                                    <td><b>{{ $attribute }}</b></td>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

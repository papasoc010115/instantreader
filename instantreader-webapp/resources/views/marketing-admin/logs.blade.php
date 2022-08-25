@extends('layouts.marketing-admin-layout')

@section('content')
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">LOGS</h1> 
        <p>Shown here are the changes made by the admins.</p>  
    </section>

    <section class="forms">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                <th scope="col">Date-Time</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($logs as $log)
                    <tr>
                    <td>{{ $log->user_email }}</td>
                    <td>{{ $log->activity }}</td>
                    <td>{{ date('m/d/Y - h:i a', strtotime($log->created_at)) }}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>

        <!--Pagination-->
        <div class="d-flex flex-row-reverse">
            {{ $logs->links() }}
        </div>
    </section>
</div>
@endsection
@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header d-flex">
            News Details
            <div class="ml-auto">
                <a style="text-decoration: none;" href="{{ route('home') }}"><span style="color: #761b18">Home</span></a> -
                <a style="text-decoration: none;" href="{{ route('news.index') }}"><span style="color: #761b18">News</span></a>

            </div>

        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <div class="table-responsive">

                <table class="table">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Author</th>
                        <th>publish_date</th>
                        <th>comments</th>
                    </tr>
                    </thead>

                    <tbody>


                        <tr>
                            <td> {{ $news->title }} </td>
                            <td> {{ $news->body }} </td>
                            <td> {{ $news->user->name }} </td>
                            <td> {{ $news->publish_date }} </td>
                            <td> {{ $comments->content}} </td>

                        </tr>




                    </tbody>

                </table>


            </div>


        </div>
    </div>


@endsection

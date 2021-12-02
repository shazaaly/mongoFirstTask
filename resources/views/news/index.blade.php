@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header d-flex">
            News List  <span class="badge badge-primary badge-pill ml-1"> {{ $news->count() }} </span>
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
                        <th>written By</th>
                        <th>publish_date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>


                    @forelse($news as $item)
                        <tr>
                            <td> {{ $item->title }} </td>
                            <td> {{ $item->body }} </td>
                            <td> {{ $item->user->name }} </td>
                            <td> {{ $item->publish_date }} </td>
                            <td>

                                <a class="btn btn-primary" href=" {{ route('news.show', ['news_id', $item->id]) }}">Show</a>

                            </td>
                        </tr>

                    @empty
                        <td> No news</td>

                    @endforelse


                    </tbody>

                </table>


            </div>


        </div>
    </div>


@endsection

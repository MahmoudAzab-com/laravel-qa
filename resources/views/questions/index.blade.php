@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    @foreach ($questions as $question)
                        <div class="media">
                             <div class="d-flex flex-column counters">
                                 <div class="vote">
                                <strong>{{$question->votes}} {{str_plural('vote', $question->votes)}}</strong>
                                </div>
                            <div class="status {{$question->status}}">
                                    <strong>{{$question->answers}} {{str_plural('answer', $question->answers)}}</strong>
                                 </div>
                                 <div class="view">
                                     <strong>{{$question->views}} {{str_plural('view', $question->views)}}</strong>
                                 </div>
                            </div>
                            <div class="media-body">
                              <h3 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a></h3>
                            <p class="lead">
                            Asked By <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                            <small class="text-muted">{{$question->created_date}}</small>
                            </p>
                            {{str_limit($question -> body, 250)}}
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="justify-content-center">
                        {{$questions -> links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

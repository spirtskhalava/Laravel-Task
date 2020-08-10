@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($data) == 0)
                    <div>No record found</div>
                    @else
                    @foreach($data as $single)
                     <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$single->fname .'-'. $single->lname}}</h5>
                          <p class="card-text">Number {{$single->number}}</p>
                          <p class="card-text">Hired: {{$single->hired==0 ?  'No' : 'Yes' }}</p>
                          @if($single->hired==0)
                          <a href="{{route('changestatus',$id=$single->id)}}" class="btn btn-primary">Hire</a>
                          @endif
                        </div>
                      </div>
                      @endforeach
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

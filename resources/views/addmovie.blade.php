@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-5 mt-5 mb-5">
      <div class="card">
        <h5 class="card-header">Add a movie</h5>
        <div class="card-body">
          {!! Form::open(array('class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST', 'action' => 'MovieController@moviestore')) !!}

          {{--TITLE--}}
          <div class="form-group">
            {{ Form::label('title', 'Title', ['class' => 'col-form-label']) }}
            <?php if($errors->has('title')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::text('title', '', ['placeholder' => 'Oblivion', 'class' => 'form-control'.$err, 'id'=>'title', 'autofocus'=>'autofocus']) }}
            @if ($errors->has('title'))
              <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('title') }}</div>
            @endif
          </div>

          {{--YEAR--}}
          <div class="form-group">
            {{ Form::label('year', 'Year', ['class' => 'col-form-label']) }}
            <?php if($errors->has('year')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::number('year', '', ['placeholder' => 2013, 'class' => 'form-control'.$err, 'id'=>'year']) }}
            @if ($errors->has('year'))
              <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('year') }}</div>
            @endif
          </div>

          {{--SCORE--}}
          <div class="form-group">
            {{ Form::label('score', 'Score', ['class' => 'col-form-label']) }}
            <?php if($errors->has('score')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::number('score', '', ['placeholder' => '7,0', 'step' => '0.1', 'class' => 'form-control'.$err, 'id'=>'score']) }}
            @if ($errors->has('score'))
                <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('score') }}</div>
            @endif
          </div>

          {{--DESCRIPTION--}}
          <div class="form-group">
            {{ Form::label('description', 'Description', ['class' => 'col-form-label']) }}
            <?php if($errors->has('description')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::textarea('description', '', ['placeholder' => "A veteran assigned to extract Earth's remaining resources begins to question what he knows about his mission and himself.", 'class' => 'form-control'.$err, 'id'=>'description']) }}
            @if ($errors->has('description'))
              <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('description') }}</div>
            @endif
          </div>

          {{--DURATION--}}
          <div class="form-group">
            {{ Form::label('duration', 'Duration', ['class' => 'col-form-label']) }}
            <?php if($errors->has('duration')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::number('duration', '', ['placeholder' => '2,04 (2h 04m)', 'step' => '0.01', 'class' => 'form-control'.$err, 'id'=>'duration']) }}
            @if ($errors->has('duration'))
              <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('duration') }}</div>
            @endif
          </div>

          {{--GENRE--}}
          <div class="form-group">
            {{ Form::label('genre', 'Genre (ctrl or cmd click for multiple selection)', ['class' => 'col-form-label']) }}
            <?php if($errors->has('genres')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::select('genres[]', \App\Genre::pluck('genre', 'id'), null, ['multiple'=>'multiple', 'class' => 'form-control'.$err, 'id'=>'genre']) }}
            @if ($errors->has('genres'))
              <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('genres') }}</div>
            @endif
          </div>

          {{--CAST--}}
          <div class="form-group">
            {{ Form::label('cast', 'Cast (ctrl or cmd click for multiple selection)', ['class' => 'col-form-label']) }}
            <?php if($errors->has('casts')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::select('casts[]', \App\Cast::pluck('full_name', 'id'), null, ['multiple'=>'multiple', 'class' => 'form-control'.$err, 'id'=>'cast']) }}
            @if ($errors->has('casts'))
              <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('casts') }}</div>
            @endif
          </div>

          {{--TRAILER URL--}}
          <div class="form-group">
            {{ Form::label('trailer_url', 'Trailer url', ['class' => 'col-form-label']) }}
            <?php if($errors->has('trailer_url')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::url('trailer_url', '', ['placeholder' => 'https://', 'class' => 'form-control'.$err, 'id'=>'trailer_url']) }}
            @if ($errors->has('trailer_url'))
              <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('trailer_url') }}</div>
            @endif
          </div>

          {{--POSTER URL--}}
          <div class="form-group">
            {{ Form::label('poster_url', 'Poster url', ['class' => 'col-form-label']) }}
            <?php if($errors->has('poster_url')){$err=' is-invalid';}else{$err='';}?>
            {{ Form::url('poster_url', '', ['placeholder' => 'https://', 'class' => 'form-control'.$err, 'id'=>'poster_url'])}}
            @if ($errors->has('poster_url'))
              <div class="alert alert-danger mt-2" role="alert">{{ $errors->first('poster_url') }}</div>
            @endif
          </div>

          {{--SUBMIT--}}
          <div class="form-group mt-5">
            {{ Form::submit('Add movie', ['class' => 'btn btn-primary']) }}
          </div>
          
        
        {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
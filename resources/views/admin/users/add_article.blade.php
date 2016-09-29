@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Add article</h1>
                <div class="panel panel-default" style="padding: 20px">
                    {{--<div class="form-group">--}}
                        {{--<label for="title">Title</label>--}}
                        {{--<input type="text" name="title" value="" class="form-control">--}}
                        {{--<label for="description" style="margin-top: 15px;">Text</label>--}}
                        {{--<textarea name="description" class="form-control" rows="10" style="resize: none;"></textarea>--}}
                        {{--<div style="text-align: right;">--}}
                            {{--<input type="button" style="margin-top: 15px;" href="{{ url('/cabinet') }}" value="Cancel">--}}
                            {{--<input style="margin-top: 15px; margin-left: 10px" type="submit" value="Submit" name="submit">--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    {!! Form::open(['route' => 'news_store', 'class' => 'form']) !!}

                    <div class="form-group">
                        {!! Form::label('Title') !!}
                        {!! Form::text('title', null,
                            ['required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Title']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Description') !!}
                        {!! Form::textarea('description', null,
                            ['required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Article text']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Save',
                          array('class'=>'btn btn-primary')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Cancel',
                          ['class'=>'btn', 'name' => 'cancel']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

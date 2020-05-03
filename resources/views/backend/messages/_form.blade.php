<!-- subject Form Input -->
<div class="form-row mb-3{{ $errors->has('subject') ? ' has-error': 'subject'}}">
    {{ Form::label('subject','Subject :') }}
    <div class="col-10 col-sm-11">
        {{ Form::text('subject', old('subject') ,['class'=> 'form-control','placeholder'=>'Subject']) }}
    </div>
    @if($errors->has('subject'))
        <span class="help-block">{{$errors->first('subject')}}</span>
    @endif
</div>

<!--  Checkbox Input -->
<div class="form-row mb-3 {{ $errors->has('recipients') ? ' has-error': ''}}">
    @if($users->count() > 0)
        <div class="checkbox">
            @foreach($users as $user)
                <label title="{{ $user->name }}">
                    <input type="checkbox" name="recipients[]" value="{{ $user->id }}">
                    {!!$user->name!!}
                </label>
            @endforeach
        </div>
    @endif
    @if($errors->has('recipients'))
        <span class="help-block">{{$errors->first('recipients')}}</span>
    @endif
</div>

<!-- Messages Form Input -->
<div class="form-row mb-3 {{ $errors->has('message') ? ' has-error': 'message'}}">
    {{ Form::label('message','Messages',['class' => 'col-2 col-sm-1 col-form-label']) }}
    {{ Form::textarea('message', old('message') ,['class'=> 'form-control' , 'placeholder' => 'Ye Messages']) }}
    @if($errors->has('message'))
        <span class="help-block">{{$errors->first('message')}}</span>
    @endif
</div>


<div>
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>
<div>
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content') !!}
</div>
{!! Form::submit($submitButtonText) !!}
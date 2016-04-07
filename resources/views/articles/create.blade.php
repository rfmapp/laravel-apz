{!! Form::open(['route' => 'articles.store', 'id' => 'articles-form']) !!}
    @include('articles.form', array('submitButtonText' => 'Add Article'))
{!! Form::close() !!}
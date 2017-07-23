@extends ('layouts.app')

@section('content')

    @include('common.errors')
    <form action="./new" method="post">
        <input type="text" name="title" placeholder="Your Theory title here">
        <textarea name="theory"></textarea>
        <button type="submit">Add Theory</button>
        {{csrf_field()}}
    </form>

@endsection
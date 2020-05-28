@section('seo')<link rel="canonical" href="{{$profile->owner->slug(true)}}">
<meta name="description" content="Laravel messenger ">
<meta name="keywords" content="laravel" />
@endsection
@section('title'){{$profile->owner->name}} | {{ config('app.name') }} @endsection

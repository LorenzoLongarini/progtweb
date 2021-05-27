@extends('/layouts.public')

@section('page-title', 'Chi siamo')

@section('content')

@include('helpers/cover-page', [
        'title' => 'Chi siamo', 
        'description' => 'Tutte le informazioni di cui hai bisogno per contattarci o per assistenza',
        'img_url' => '../storage/app/public/images/covers/about-cover.jpg'])
@endsection
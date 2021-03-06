@extends('layouts.app')

@section('content')

    @sectionRow([
        'sectionTitle' => __('strings.missao_titulo2')
    ])
        @include('partials.column',[
            'columnDescriptions' => [
                __('strings.missao_text1'),
                __('strings.missao_text2'),
                __('strings.missao_text3')
            ]
        ])
    @endsectionRow

    @sectionRow([
        'sectionTitle' => __('strings.missao_titulo3')
    ])
        @include('partials.column',[
            'columnDescriptions' => [
                __('strings.missao_text4'),
                __('strings.missao_text5')
            ]
        ])
    @endsectionRow

@endsection

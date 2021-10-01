<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta content="Natacha Waldmann" name="author">
    <meta content="Portfolio pagina van Natacha Waldmann" name="description">
    <meta content="Portfolio pagina van Natacha Waldmann" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Natacha Waldmann</title>

    <meta property="og:title" content="Natacha Waldmann" />
    <meta property="og:type" content="Portfolio" />
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:image" content="{{  $post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" />
    <meta property="og:site_name" content="GROEN" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:alt" content="Portfolio foto van Natacha Waldmann van de partij Groen in Oostende" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Natacha Waldmann">
    <meta name="twitter:creator" content="Natacha Waldmann">
    <meta name="twitter:title" content="Portfolio pagina van Natacha Waldmann">
    <meta name="twitter:description" content="Kom hier meer te weten over Natacha Waldmann">
    <meta name="twitter:image" content="{{  $post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}">

    <!-- Styles -->
    <link href="{{ asset('css/front-app.css') }}" rel="stylesheet">

    <link rel="icon"
          type="image/jpg"
          href="{{ asset('images/frontend/favicon.png') }}" />
</head>

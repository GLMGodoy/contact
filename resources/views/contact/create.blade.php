<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>New Contact</title>
</head>
<body>
    <h1>New Contact</h1>
    <form method="post" action="{{ route('contact.store') }}">
        @csrf
        @component('contact._components.form')
        @endcomponent
</body>
</html>
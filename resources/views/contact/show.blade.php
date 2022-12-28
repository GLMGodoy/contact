<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact View</title>
</head>
<body>
    <a href="{{ route('contact.index') }}">Back</a>
    <h1>Contact Details</h1>
        <table>
            <tr>
                <td>ID</td>
                <td>{{$contact->id}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$contact->name}}</td>
            </tr>
            <tr>
                <td>Contact</td>
                <td>{{$contact->contact}}</td>
            </tr>
            <tr>
                <td>E-mail<td>
                <td>{{$contact->email}}</td>
            </tr>
        </table>
        <a href="{{ route('contact.edit',['contact' => $contact->id]) }}">Edit</a>
        <form id="form_{{$contact->id}}" method="post" action="{{ route('contact.destroy', ['contact' => $contact->id]) }}">
            @method('DELETE')
            @csrf
            <a href="#" onclick="document.getElementById('form_{{$contact->id}}').submit()">Delete</a>
        </form>
    </body>
</html>
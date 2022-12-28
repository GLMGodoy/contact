<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Contact List</title>
</head>
<body>
    <a href="{{ route('contact.create') }}">New</a>
    <h1>Contact List</h1>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>E-mail</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <th>{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->contact }}</td>
                            <td>{{ $contact->email }}</td>
                            <th><a href="{{ route('contact.show',['contact' => $contact->id]) }}">View</a></th>
                            <td><a href="{{ route('contact.edit',['contact' => $contact->id]) }}">Edit</a></td>
                            <td>
                                <form method="post" action="{{ route('contact.destroy', ['contact' => $contact->id]) }}">
                                    @method('DELETE')
                                    @csrf
            
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>
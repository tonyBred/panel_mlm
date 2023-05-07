<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Member</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td>{{ $data['id_member'] }}</td>
        </tr>
        <tr>
            <td>Inisial</td>
            <td>:</td>
            <td>{{ $data['inisial'] }}</td>
        </tr>
        <tr>
            <td>Level</td>
            <td>:</td>
            <td>{{ $data['lvl'] }}</td>
        </tr>
        <tr>
            <td>Anggota Level Lebih Rendah</td>
            <td>:</td>
            <td>
                <ul>
                    @foreach ($data['child'] as $item)
                        <li> {{ $item }} </li>
                    @endforeach
                </ul>
            </td>
        </tr>
        <tr>
            <td><a href="{{ route('panel') }}"><button>Go Back</button></a></td>
        </tr>
    </table>
</body>
</html>
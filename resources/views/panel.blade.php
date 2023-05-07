<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel MLM</title>
</head>
<body>
    <div>
        <h2>Buat Member Baru</h2>
        <form action="{{ route('store-member') }}" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Inisial</td>
                    <td>:</td>
                    <td><input type="text" name="inisial"></td>
                </tr>
                <tr>
                    <td>Select Parent</td>
                    <td>:</td>
                    <td>
                        <select name="id_parent">
                            <option selected="selected">
                                @foreach ($dataMember as $key) 
                                <option value='{{$key->id_member}}'>{{$key->id_member . '. ' . $key->inisial}}</option>
                                @endforeach
                            </option>
                        </select><br>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit">Simpan Member Baru</button></td>
                </tr>
            </table>
        </form>
    </div>
    <br>
    <div>
        <h2>Cek Member</h2>
        <form action="{{ route('check-member') }}" method="get">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Select Parent</td>
                    <td>:</td>
                    <td>
                        <select name="id_member">
                            <option selected="selected">
                                @foreach ($dataMember as $key) 
                                    <option value='{{$key->id_member}}'>{{$key->id_member . '. ' . $key->inisial}}</option>
                                @endforeach
                            </option>
                        </select><br>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit">Cek Member</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
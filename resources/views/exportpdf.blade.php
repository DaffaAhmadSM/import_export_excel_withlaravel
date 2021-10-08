
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <div class= "container">
        <table class="table" border="1"> 
            <tr class= "text-center">
                <th>
                    Nama
                </th>
                <th>
                    NIS
                </th>
            </tr>
            @foreach ($siswas as $siswa)
            <tr class="text-center">
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->nis}}</td>
            </tr>
                
            @endforeach
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    
</head>
<body>
    <div class="m-5">
        <form action="{{route('importexcel')}}" method="POST" enctype="multipart/form-data">
            <input class="form-control" type="file" accept=".xls,.xlsx" name="file" >
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <a href="/export" class="btn btn-warning">export Excel</a>
        <a href="/exportpdf" class="btn btn-warning">export PDF</a>
        
    </div>
    
    <div class= "container">
        <table class="table"> 
            <tr class= "text-center">
                <th>
                    Nama
                </th>
                <th>
                    NIS
                </th>
                <th>#</th>
        
            </tr>
            @foreach ($siswas as $siswa)
            <tr class="text-center">
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->nis}}</td>
                <td>
                    <form action={{url('/delete/'.$siswa->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apa Anda yakin inging Menghapus Data?')">Delete</button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


</head>
<body>
<div class="container">

    @if ( count($modules)  > 0)

    <table class="table table-striped table-primary table-bordered mt-5">
        <thead class="bg-dark">
            <tr> 
                <th>Code du module</th>
                <th>titre</th>
                <th>masse horaire</th>
                <th>modifier/supprimer</th>
            </tr>
        </thead>
        <thead>
            @foreach ($modules as $module)
            <tr>
                <td> {{ $module->codeM }}</td>
                <td> {{ $module->titre }}</td>
                <td> {{ $module->MH }}</td>
                <td> 
                    <a href="/modif/{{$module->codeM}}">modifier</a> 
                    <a href="/supp/{{$module->codeM}}">supprimer</a> 
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
    @else
      <p>pas de modules dans la base do donnes</p>
    @endif
    <div> {{ $modules->links() }}</div>
    

    
</div>



    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Document</title>
    <H1 class="text-center" stlye="color:#001F32S">Lista de favoritos</H1>
    <BR>
    <BR>

      <div class="container">
               
        <table class="table shadow rounded ">

            <thead class = "bg-info text-light">
              <tr>
                <th>#</th>
                <th>URL</th>
                <th>TEMA</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($obj as $item)

              <tr class="table-active">
                <th scope="row">1</th>
                <td>{{$item->Url}}</td>
                <td>{{$item->Tema}}</td>
              </tr>

               
        @endforeach
            </tbody>
          </table>
        </div> 

    </ul>



</head>
<body>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Carné</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <div class="text-center pt-4 pb-2">
                <img src="https://www.sena.edu.co/Style%20Library/alayout/images/logoSena.png" width="140px">
            </div>
            <br>
            <form action="Upload.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 ps-5 mx-10">
                        <label for="firstName" class="form-label">Nombre(s)</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nombre(s)" autocomplete="off">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 pe-5 mx-10">
                        <label for="lastName" class="form-label">Apellido(s)</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellido(s)" autocomplete="off">
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3 ps-5 mx-10">
                            <label for="typeDocument" class="form-label">Tipo de Documento</label>
                            <select name="typeDocument" class="form-select" id="typeDocument"  placeholder="" class="form-control">
                                <option value="Seleccionar">Seleccionar</option>   
                                <option value="CC">CC</option>
                               <option value="CE">CE</option>
                               <option value="TI">TI</option>
                               <option value="PAS">PAS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3 pe-5 mx-10">
                            <label for="document" class="form-label">Numero de Documento</label>
                            <input type="text" class="form-control" id="document" name="document" placeholder="#Documento" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 ps-5 mx-10">
                        <label for="recordNumber" class="form-label">Ficha</label>
                        <input type="number" class="form-control" id="recordNumber" name="recordNumber" placeholder="#Ficha">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3  mx-10">
                        <label for="typeBlood" class="form-label">Tipo de Sangre</label>
                        <select name="typeBlood" class="form-select" id="typeBlood"  placeholder="" class="form-control">
                            <option value="Seleccionar">Seleccionar</option>      
                            <option value="O">O</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3 pe-5 mx-10">
                        <label for="rh" class="form-label">RH</label>
                        <select name="rh" class="form-select" id="rh"  placeholder="" class="form-control">
                            <option value="Seleccionar">Seleccionar</option>      
                            <option value="+">+</option>
                            <option value="-">-</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3 px-5 mx-10">
                <label for="file" class="form-label">Foto</label>
                <input type="file" name="file" id="file" accept=".png, .jpg" class="form-control">
            </div>
            <br>
            <div class="mb-3 px-5 mx-10 text-center d-grid gap-2 col-4 mx-auto">
                <input type="submit" value="Solicitar Carné" class="btn btn-success">
            </div>
            </form>
        </div>
    </main>
    
</body>
</html>
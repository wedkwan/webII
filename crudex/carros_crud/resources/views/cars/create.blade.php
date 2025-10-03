
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="my-4">Adicionar carro</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div >
            <label for="modelo" >Modelo :</label>
            <input type="text" id="name" name="modelo" required>            
        </div>
        <div >
            <label for="marca" >Marca : </label>
            <input type="text" id="marca" name="marca" required>            
        </div>
       
        <div >
            <label for="cor" >Cor: </label>
            <input type="text" id="cor" name="cor" required>            
        </div>


         <div >
            <label for="ano" >Ano: </label>
            <input type="date" id="expiration_date" name="ano" required>            
        </div> 
        
        <div >

            <label for="valor" >Valor : </label>
            <input type="number" id="value" name="valor" required>            
        </div>

       

     

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Salvar
        </button>
        
    </form>
</body>
</html>
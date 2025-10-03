<html>

<head></head>

<body>
    Editar Carro

    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf
        @method('PUT')


        <div>
            <label for="modelo">Modelo do carro</label>
            <input type="text" id="name" name="name" value="{{ $car->modelo }}" required>
        </div>
        <div>
            <label for="marca">Marca do carro: </label>
            <input type="text" id="description" name="description" value="{{ $car->marca }}" required>
        </div>

        <div>
            <label for="cor">Cor do carro: </label>
            <input type="text" id="cor" name="cor" value="{{ $car->cor }}" required>
        </div>

        <div>
            <label for="ano">Ano: </label>
            <input type="date" id="ano" name="ano" value="{{ $car->ano }}" required>
        </div>

        <div>
            <label for="stock">Valor: </label>
            <input type="number" id="stock" name="stock" value="{{ $car->valor }}" required>
        </div>

        <button type="submit"> Atualizar </button>

    </form>
    </div>

</body>

</html>
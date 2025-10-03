<html>
<head></head>
<body>
    <h1 >Lista de Carros </h1>
    <h3>
      <a href="{{ route('cars.create') }}" class="btn btn-primary">
        Aicionar novo carro
    </a>
    </h3>
<table>
  <tr>
    <th>ID</th>
    <th>modelo</th>
    <th>marca</th>
    <th>cor</th>
    <th>ano</th>
    <th>valor</th>
  </tr>
    @foreach($cars as $car)
    <tr>
        <td> {{ $car->id }}</td>
        <td> {{ $car->modelo }}</td>
        <td> {{ $car->marca }}</td>
        <td> {{ $car->cor }}</td>
        <td> {{ $car->ano }}</td>
        <td> {{ $car->valor }}</td>
        
            
        <!-- Botão de Visualizar -->
        <a href="{{ route('cars.show', $car) }}" >
             Visualizar
        </a>

        <!-- Botão de Editar -->
        <a href="{{ route('cars.edit', $car) }}" >
             Editar
        </a>


        <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Deseja excluir este carro?')">
            Excluir
            </button>
        </form>

        </td>
    </tr>
    @endforeach
  
  
  
  
</table>   
</div>
</body>
</html>
@include('nav')

<form action="{{route('barbeiro.update')}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value={{$barbeiro->cpf}} placeholder="Digite o CPF..." required>
    </div>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="Nome" value={{$barbeiro->Nome}} placeholder="Digite o nome completo" required>
    </div>
    <div class="form-group">
        <label for="data">data:</label>
        <input type="text" id="data" name="data" value={{$barbeiro->data}} placeholder="Data de inicio..." required>
    </div>

    <input type="text" name="id" value={{$barbeiro->id}} hidden>

    <div class="form-group">
        <input type="submit" value="Cadastrar">
    </div>
</form>
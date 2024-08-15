@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Pedido</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <!-- OS -->
        <div class="mb-3">
            <label for="os" class="form-label">OS</label>
            <input type="text" class="form-control" id="os" name="os" required>
        </div>

        <!-- Data da Compra -->
        <div class="mb-3">
            <label for="data_compra" class="form-label">Data da Compra</label>
            <input type="date" class="form-control" id="data_compra" name="data_compra" required>
        </div>

        <!-- Data de Entrega -->
        <div class="mb-3">
            <label for="data_entrega" class="form-label">Data de Entrega</label>
            <input type="date" class="form-control" id="data_entrega" name="data_entrega">
        </div>

        <!-- Nome do Cliente -->
        <div class="mb-3">
            <label for="nome_cliente" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" required>
        </div>

        <!-- Endereço -->
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>

        <!-- Contato -->
        <div class="mb-3">
            <label for="contato" class="form-label">Contato</label>
            <input type="text" class="form-control" id="contato" name="contato" required>
        </div>

        <!-- Tipo de Lente -->
        <div class="mb-3">
            <label for="tipo_lente" class="form-label">Tipo de Lente</label>
            <input type="text" class="form-control" id="tipo_lente" name="tipo_lente" required>
        </div>

        <!-- Armação -->
        <div class="mb-3">
            <label for="armacao" class="form-label">Armação</label>
            <input type="text" class="form-control" id="armacao" name="armacao" required>
        </div>

        <!-- Forma de Pagamento -->
        <div class="mb-3">
            <label for="forma_pagamento" class="form-label">Forma de Pagamento</label>
            <input type="text" class="form-control" id="forma_pagamento" name="forma_pagamento" required>
        </div>

        <!-- Valor -->
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
        </div>

        <!-- Observações -->
        <div class="mb-3">
            <label for="obs" class="form-label">Observações</label>
            <textarea class="form-control" id="obs" name="obs" rows="3"></textarea>
        </div>

        <!-- Cliente (Opção Dropdown) -->
        <div class="mb-3">
            <label for="cliente" class="form-label">Cliente</label>
            <select class="form-select" id="cliente" name="cliente" required>
                <option value="" selected disabled>Selecione um Cliente</option>
                <!-- Supondo que você tenha uma lista de clientes -->
                <option value="1">Cliente 1</option>
                <option value="2">Cliente 2</option>
                <option value="3">Cliente 3</option>
                <!-- Adicione mais opções conforme necessário -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

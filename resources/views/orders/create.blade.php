@extends('layouts.app')

@section('content')
<div class="container container__criar__pedidos">
    <h1>Criar Pedido</h1>
    <div class="container--form">
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
        <div>
            <div class="mb-3">
                <label for="nome_cliente" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" required>
            </div>

            <!-- OS -->
            <div class="mb-3 container__datas">
                <label for="os" class="form-label">OS</label>
                <input type="text" class="form-control" id="os" name="os" required>

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

            </div>


            <!-- Endereço -->
             <div class="endereco__contato">
                <div class="mb-3 div__endereco">
                    <div>
                        <label for="endereco" class="form-label">Endereço</label>
                    </div>
                    <div class="div__input__endereco">
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                    </div>
                </div>

                <!-- Contato -->
                <div class="mb-3 div__contato">
                    <label for="contato" class="form-label">Contato</label>
                    <input type="tel" id="phone" name="phone" placeholder="(xx) xxxxx-xxxx" pattern="^\(\d{2}\) \d{5}-\d{4}$" required>
                </div>
            </div>
            <div class="lente_armacao">
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
            </div>
            <div class="pagamento">
                <!-- Valor -->
                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
                </div>
                <!-- Forma de Pagamento -->
                <div class="mb-3">
                    <label for="forma_pagamento" class="form-label">Forma de Pagamento</label>
                    <select class="form-select" id="cliente" name="cliente" required>
                        <option value="" selected disabled>Selecione uma forma de pagamento</option>
                        <!-- Supondo que você tenha uma lista de clientes -->
                        <option value="1">Pix</option>
                        <option value="2">Cartão de credito</option>
                        <option value="3">Cartão de débito</option>
                        <option value="4">Dinheiro</option>
                        <!-- Adicione mais opções conforme necessário -->
                    </select>
                </div>
                
            </div>

            

            <!-- Cliente (Opção Dropdown) -->
            <div class="mb-3">
                <label for="cliente" class="form-label">Tipo de lente:</label>
                <select class="form-select" id="cliente" name="cliente" required>
                    <option value="" selected disabled>Selecione um tipo de lente</option>
                    <!-- Supondo que você tenha uma lista de clientes -->
                    <option value="1">Incolor</option>
                    <option value="2">Azul</option>
                    <option value="3">Branca</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>

            <!-- Observações -->
            <div class="observacoes">
                <span>
                    <label for="obs" class="form-label">Observações</label>
                </span>
                <div>
                    <textarea class="form-control" id="obs" name="obs" rows="15"></textarea>
                </div>
            </div>
    </div>

    <div>
        <div class="div__buttons__criar">
            <button type="submit" class="btn btn-primary" id="btnSalvar">Salvar</button>
            <button type="submit" class="btn btn-primary" id="btnSalvarGerar">Salvar e gerar PDF</button>
        </div>
    </div>    
        </form>
    </div>
</div>
@endsection

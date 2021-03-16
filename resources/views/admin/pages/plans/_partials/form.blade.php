@include('admin.includes.alerts')

<div class="form-group">
  <label for="">Nome:</label>
  <input type="text" name="name" id="" class="form-control" 
    placeholder="Nome do Plano" value="{{ $plan->name ?? ''}}">
</div>

<div class="form-group">
  <label for="">Decrição:</label>
  <input type="text" name="description" id="" class="form-control" 
    placeholder="Descriçao do Plano" value="{{ $plan->description ?? '' }}">
</div>

<div class="form-group">
  <label for="">Valor:</label>
  <input type="text" name="price" id="" class="form-control" 
    placeholder="Valor do Plano" value="{{ $plan->price ?? '' }}">
</div>

<div class="form-group">
  <button type="submit" class="btn btn-dark">Salvar</button>
</div>
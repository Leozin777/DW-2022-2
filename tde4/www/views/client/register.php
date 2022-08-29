<h1>Cadastro de cliente</h1>
<form action="?controller=client&action=registerView" method="post">
    <div class="mb-3 mt-3">
        <label class="form-label" for="">Nome</label>
        <input class="form-control" type="text" name="name">
    </div>

    <div class="mb-3 mt-3">
        <label class="form-label" for="">Email</label>
        <input class="form-control" type="text" name="email">
    </div>

    <h4>Escolha um time</h4>
    <div class="form-check mb-3 mt-3">
        <input class="form-check-input" type="radio" name="time" value="Internacional">
        <label class="form-check-label">Internacional</label>
    </div>
    <div class="form-check mb-3 mt-3">
        <input class="form-check-input" type="radio" name="time" value="Grêmio">
        <label class="form-check-label">Grêmio</label>
    </div>

    <h4>Selecione todas as cores que você gosta</h4>
    <div class="form-check mb-3 mt-3">
        <input class="form-check-input" type="checkbox" name="cor" value="Vermelho">
        <label class="form-check-label">Vermelho</label>
    </div>
    <div class="form-check mb-3 mt-3">
        <input class="form-check-input" type="checkbox" name="cor" value="Azul">
        <label class="form-check-label">Azul</label>
    </div>
    <div class="form-check mb-5 mt-3">
        <input class="form-check-input" type="checkbox" name="cor" value="Verde">
        <label class="form-check-label">Verde</label>
    </div>

    <h4>Observações</h4>
    <div class="form-check mb-5 mt-3">
        <textarea name="text" rows="4" cols="50" value"text"></textarea>
    </div>

    <h4>Quem vai ganhar a copa?</h4>
    <div class="form-check mb-3 mt-3">
        <select class="form-select" >
            <option name ="opt" value="Brasil" >Brasil</option>
            <option name ="opt" value="Argentina" >Argentina</option>
            <option name ="opt" value="França" >França</option>
            <option name="opt" value="Alemanha" >Alemanha</option>
        </select>
    </div>


    <button class="btn btn-primary mt-3" type="submit">Enviar</button>
</form>     
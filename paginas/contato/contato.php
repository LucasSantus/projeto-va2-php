    <div id="div-form">
        <h2>Form Contact</h2>
        <form method="POST" action="?pg=contato/enviar_contato">
            <div>
                <label>Nome: </label>
                <input id="nome" class="form-input" type="text" name="nome" placeholder=" Insira o nome: " />
            </div>
            <div>
                <label>E-mail: </label>
                <input id="email" class="form-input" type="email" name="email" placeholder=" Insira o e-mail:" />
            </div>
            <div>
                <label>Telefone: </label>
                <input id="telefone" class="form-input" type="text" name="telefone" placeholder=" Insira o telefone:" />
            </div>
            <div>
                <label>Estado: </label>
                <input id="estado" class="form-input" type="text" name="estado" placeholder=" Insira o estado:" />
            </div>
            <div>
                <label>Cidade: </label>
                <input id="cidade" class="form-input" type="text" name="cidade" placeholder=" Insira a cidade:" />
            </div>
            <div>
                <label>Mensagem</label>
                <textarea name="mensagem" placeholder="Digite a mensagem..." ></textarea>
            </div>
            <button type="submit" value="Adicionar" name="submit">SEND</button>
        </form>
    </div>

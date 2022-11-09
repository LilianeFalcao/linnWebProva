<div>
    <form method="POST" wire:submit.prevent="store">
        <div>
            @error('tipo') <p>{{message}}</p> @enderror
            @error('serie') <p>{{message}}</p> @enderror
            @error('lugar') <p>{{message}}</p> @enderror           
        </div>
        <input type="hidden" name="editId" wire:model="editId" />
        <div>
            <label>Tipo: </label>
            <input type="text" name="tipo" wire:model="tipo" required />
        </div>
        <div>
            <label>Série: </label>
            <input type="number" name="serie" wire:model="serie" required />
        </div>
        <div>
            <label>Lugar: </label>
            <select name="lugar" wire:model="lugar" required>
                <option></option>
                <option value="Prédio Escolar"> Pŕedio Escolar</option>
                <option value="Prédio de Laboratórios">Prédio de Laboratórios</option>
                <option value="Prédio Administrativo">Pŕedio Administrativo</option>
                <option value="Quadra">Quadra</option>
            </select>
        </div>
        <div>
            <button type="submit">Enviar</button>
            <button type="button" wire:click="limpar()">Limpar</button>
        </div>
    </form>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Série</th>
                        <th>Lugar</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($salas as $sala)
                    <tr>
                        <td>{{$sala->tipo}}</td>
                        <td>{{$sala->serie}}</td>
                        <td>{{$sala->lugar}}</td>
                        <td>
                            <button type="button" wire:click="editar({{$sala->id}})">Editar</button>
                        </td>
                        <td>
                            <button type="button" wire:click="remover({{$sala->id}})">Remover</button>
                        </td>
                    </th>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

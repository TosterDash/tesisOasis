<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <table class="table table-bordered bc-b text-white mx-auto" style="height: 362px;">
        <thead class="">
        <tr style="height: 18px;">
        <td style="height: 18px; width: 262px;">
        <h4>Producto</h4>
        </td>
        <td style="height: 18px; width: 349px;">
        <h4>Precio</h4>
        </td>
        @auth
        <td style="height: 18px; width: 349px;">
            <h4>Cantidad</h4>
        </td>
        <td style="height: 18px; width: 349px;">
            <h4>Notas adicionales (Opcional)</h4>
        </td>
        <td style="height: 18px; width: 349px;">
            <h4></h4>
        </td>
        @endauth
        
        
        </thead>
        <tbody>
            @foreach ($menu as $menu)
                
                <tr style="height: 22px;">
                <td style="height: 22px; width: 262px;">
                <h4>{{$menu->nombreProducto}}</h4>
                </td>
                <td style="height: 22px; width: 349px;">
                <h4>${{$menu->precio}}</h4>
                </td>
                @auth
                <td style="height: 22px; width: 349px;">
                    <input type="number" id="cant" value="0" wire:model.defer="cantidad.{{$menu->id}}">
                </td>
                <td style="height: 22px; width: 349px;">
                    <textarea class="form-control" rows="3" id="comment" wire:model.defer="notas.{{$menu->id}}"></textarea>
                </td>
                <td style="height: 22px; width: 349px;">
                    <button class="btn btn-success" wire:click="storeCart('{{$menu->id}}')">Añadir al carrito</button>
                </td>
                @endauth
                
                </tr>
            @endforeach
        
        
        </tbody>
    </table>
</div>

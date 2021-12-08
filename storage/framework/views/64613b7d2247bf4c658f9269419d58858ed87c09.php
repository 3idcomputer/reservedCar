



<h1>Carros Disponiveis</h1>

<table class="table">

<thead>
    <th>Placa</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Detalhes</th>
</thead>

<?php foreach ($carros as $carro): ?>

    <tbody>
    <tr>
      
    <td><?= $carro->placa  ?></td>
    <td><?=$carro->marca ?></td>
    <td><?=$carro->modelo ?></td>

    <td><a href="/carros/detalhe" target="_blank">Ver
</a></td>
    </tr>
  
  </tbody>


<?php endforeach; ?>

</table>

<?php /**PATH C:\Users\admin\Desktop\reservedCar\reservedCar\resources\views/carros_disponiveis.blade.php ENDPATH**/ ?>
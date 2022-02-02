<table class="table">
    <tr>
    <th>codi</th>
    <th>origen</th>
    <th>desti</th>
    <th>preu</th>
    <th>foto</th>
    <th>nombre_places</th>
    <th>modificar</th>
    <th>eliminar</th>
    <th>reservar</th>
    
    </tr>
<?php
while($row = $vols->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['codi']."</td>";
    echo "<td>".$row['origen']."</td>";
    echo "<td>".$row['desti']."</td>";
    echo "<td>".$row['preu']."</td>";
    echo "<td><img src='views/vol/img/" .$row['foto']."'  width=\"50\" height=\"60\"></td>";
    echo "<td>".$row['nombre_places']."</td>";
    echo "<td><a href='index.php?controller=vol&action=modificarvols&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=vol&action=eliminarvols&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "<td><a href='index.php?controller=reserva&action=insertarreserves&codi=".$row['codi']."'>Reservar</a></td>";
    echo "</tr>";
}
echo "</table>";


?>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="views/vol/img/baixa20220201111955.jpg" alt="Card image cap">
  <div class="card-body">
	<h5 class="card-title">Barcelona - Madrid</h5>
	<p class="card-text">Preu: 100€</p>
	<a href="index.php?controller=reserva&action=modificarvols&codi=1" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
  
	<a href="index.php?controller=reserva&action=eliminarvols&codi=1" class="btn btn-primary"><i class="bi bi-trash"></i></a>
	<a href="index.php?controller=reserva&action=insertarreserves&codi=1" class="btn btn-primary"><i class="bi bi-calendar2-plus"></i></a>
  </div>
</div>

  </div>
</div>
<div>
    <h3 class="miestilo">Jugadores</h3>
    <?php if ($jugadores) : ?>
        <div>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Equipo</th>
                    <th>Dorsal</th>
                    <th>Conferencia</th>
                </tr>
                <?php foreach ($jugadores as $jugador) {
                        ?> <tr>
                        <td><?php echo $jugador->ID; ?></td>
                        <td><?php echo $jugador->EQUIPO; ?></td>
                        <td><?php echo $jugador->DORSAL; ?></td>
                        <td><?php echo $jugador->CONFERENCIA; ?></td>
                    </tr> <?php } ?>
            </table>
        </div>
    <?php endif; ?>
    <?php /*echo "La ruta en la que está este archivo: " . plugin_dir_path(__FILE__) . "<br />";  ?>
    <?php echo "Si se necesita la ruta con el archivo; " . plugin_dir_path(__FILE__ . "/verJugadores.php");*/
    ?>
</div>
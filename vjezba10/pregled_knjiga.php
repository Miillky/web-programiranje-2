<?php


$db = new mysqli("localhost", "knjiznicar", "knjiznicar", "knjiznica");
if($db->connect_errno){

	printf("Konecija nije uspijela %s", $db->connect_error);

} else {

	ob_start(); ?>

	<?php if( $knjige = $db->query("SELECT * FROM knjige") ): ?>

		<table>

			<thead>
				<tr>
					<td>ID</td>
					<td>Naslov</td>
					<td>Autor</td>
					<td>Broj stranica</td>
					<td>Godina izdanja</td>
				</tr>
			</thead>

			<tbody>

				<?php while( $row = $knjige->fetch_row() ): ?>

					<tr>

						<?php foreach($row as $column): ?>
							<td><?php echo $column; ?></td>
						<?php endforeach ?>
					</tr>


				<?php endwhile; ?>

			</tbody>
		</table>

	<?php endif; ?>

	<?php

	echo ob_get_clean();
}
<div class="card">
	<div class="card-body">
		<div class="table-respons">
			<table class="table table-hover table-stripped">
				<thead>
					<tr>
						<td>NO</td>
						<td>Nama</td>
						<td>Harga</td>
						<td>Dibuat Oleh</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				</thead>

				<?php foreach ($products as $i => $product) : ?>
					<tr>
						<td><?= $i + 1 ?></td>
						<td><?= $product->name ?></td>
						<td><?= $product->price ?></td>
						<td><?= $product->creator ?></td>
						<td><?= $product->status ?></td>
						<td>
							<button class="btn btn-primary btn-sm">Detail</button>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>

<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3" style="font-family: 'Sarabun';">
			<div class="card-body text-dark">
				<b class="card-title h2">ยอดเงินในบัญชี</b>
				<div class="datatable my-3" data-mdb-borderless="true" data-mdb-sm="true">
					<table>
						<thead>
							<tr>
								<th data-mdb-sort="false">วันที่</th>
								<th data-mdb-sort="false">เงินฝาก</th>
								<th data-mdb-sort="false">เงินถอน</th>
								<th data-mdb-sort="false">ยอดเงินคงเหลือ</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($account_details->result() as $row) { ?>
								<tr>
									<td><?= thaidate('j M Y ', strtotime($row->F_TIME)) ?></td>
									<td><?= number_format($row->F_DEP, 2) ?></td>
									<td><?= number_format($row->F_WDL, 2) ?></td>
									<td><?= number_format($row->F_BALANCE, 2) ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
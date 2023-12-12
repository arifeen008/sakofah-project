<main id="content">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3" style="font-family: 'Sarabun';">
			<div class="card-body text-dark">
				<b class="card-title h2">รายชื่อสมาชิกที่ค้นหา</b>
				<div class="datatable my-3" data-mdb-borderless="true" data-mdb-sm="true">
					<table>
						<thead>
							<tr>
								<th data-mdb-sort="false">เลขที่สมาชิก</th>
								<th data-mdb-sort="false">ชื่อ</th>
								<th data-mdb-sort="false">นามสกุล</th>
								<th data-mdb-sort="false">สาขา</th>
								<th data-mdb-sort="false">ดูข้อมูล</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($result->result() as $row) { ?>
								<tr>
									<td><?= $row->MEM_ID ?></td>
									<td><?= $row->FNAME ?></td>
									<td><?= $row->LNAME ?></td>
									<td><?= $row->BR_NAME; ?></td>
									<td><a href="<?php echo site_url('officer/data_member/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-info"><i class="fas fa-file-alt"></i></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
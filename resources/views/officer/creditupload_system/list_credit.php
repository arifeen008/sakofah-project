<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card mt-4">
			<div class="card-body" style="font-family: 'Sarabun';">
				<h3 class="card-title text-dark mb-3" style="font-family: 'Kanit'">รายการสินเชื่อ</h3>
				<table id="datatable" class="table table-bordered align-middle" data-page-length='25'>
					<thead>
						<tr>
							<th class="text-center">เลขที่สัญญา</th>
							<th class="text-center">ชื่อ</th>
							<th class="text-center">ผู้อัพโหลด</th>
							<th class="text-center">วันที่อัพโหลด</th>
							<th class="text-center">ดาวน์โหลด/ลบ</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $row) { ?>
							<tr>
								<td>
									<p class="fw-normal mb-1"> <?= $row->fullcont_id ?></p>
									<p class="text-muted mb-1"><?= $row->name_branch ?></p>
									<p class="text-muted mb-1"><?= $row->credit_name ?></p>
									<p class="text-muted mb-1"><?= $row->year ?></p>
								</td>
								<td class="text-center"><?= $row->fname . "  " . $row->lname   ?></td>
								<td class="text-center"><?= $row->name_upload  ?></td>
								<td class="text-center"><?= thaidate('j M Y ', strtotime($row->date_upload))  ?></td>
								<td class="text-center">
									<a href="<?php echo site_url('officer/download_credit/' . $row->id_credit) ?>" class="btn btn-primary"><i class="fas fa-file-download"></i></a>
									<a href="<?php echo site_url('officer/delete_credit/' . $row->id_credit) ?>" class="btn btn-danger delete"><i class="fas fa-dumpster"></i></a>
								</td>
							</tr>
						<?php  } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
<script>
	new DataTable('#datatable', {
		searching: true,
		ordering: false,
		paging: true,
		oLanguage: {
			"sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
			"sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
			"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
			"sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "หน้าแรก",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "หน้าสุดท้าย"
			}
		}
	});
	$('.delete').on('click', function(e) {
		e.preventDefault();
		const href = $(this).attr('href');
		Swal.fire({
			title: 'ต้องการลบหรือไม่',
			showDenyButton: true,
			showCancelButton: false,
			confirmButtonText: 'ลบ',
			denyButtonText: 'ยกเลิก',
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
				Swal.fire('ลบแล้ว !', '', 'success')
			} else if (result.isDenied) {
				Swal.fire('ยกเลิก', '', 'info')
			}
		})
	})
</script>
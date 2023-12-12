<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3">
			<div class="card-body text-dark">
				<div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/upload_news') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่มข่าวสาร</a></div>
				<h3 class="card-title border-bottom">รายการข่าวสาร</h3>

				<table id="datatable">
					<thead>
						<tr>
							<th class="text-center" width=500>หัวข้อ</th>
							<th class="text-center">ประเภทข่าว</th>
							<th class="text-center">เวลาอัพโหลด</th>
							<th class="text-center">แก้ไข</th>
							<th class="text-center">ลบ</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result->result() as $row) { ?>
							<tr>
								<td class="text-truncate" style="max-width: 150px"><?= $row->title  ?></td>
								<td class="text-center"><?= $row->news_typename  ?></td>
								<td class="text-center"><?= thaidate('j M Y ', strtotime($row->dateupload)) ?></td>
								<td class="text-center"><a href="<?php echo site_url('officer/edit_news/' . $row->news_number) ?>" class="btn btn-warning me-3"><i class="fas fa-pen"></i></a></td>
								<td class="text-center"><a href="<?php echo site_url('officer/delete_news/' . $row->news_number) ?>" class="btn btn-danger delete me-3"><i class="far fa-trash-alt"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</main>
<script>
	$('.delete').on('click', function(e) {
		e.preventDefault();
		const href = $(this).attr('href');
		Swal.fire({
			title: 'ต้องการลบข่าวนี้หรือไม่',
			showDenyButton: true,
			showCancelButton: false,
			confirmButtonText: 'ยืนยัน',
			denyButtonText: 'ปฏิเสธ',
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
				Swal.fire('ลบแล้ว!', '', 'success')
			} else if (result.isDenied) {
				Swal.fire('ยกเลิก', '', 'info')
			}
		})
	})

	new DataTable('#datatable', {
		searching: false,
		ordering: false,
		paging: true,
		oLanguage: {
			"sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
			"sZeroRecords": "ไม่มีข้อมูล",
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
</script>
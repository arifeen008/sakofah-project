<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3" style="font-family: 'Sarabun';">
			<div class="card-body text-dark">
				<h3 class="card-title mb-3">ประกาศ</h3>
				<form action="<?php echo site_url('officer/upload_internalfile') ?>" method="post" enctype="multipart/form-data" class="row g-3">
					<div class="col-md-6">
						<div class="form-outline">
							<input type="text" name="title" id="form12" class="form-control" required />
							<label class="form-label" for="form12">หัวข้อ</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-outline">
							<input type="date" class="form-control" name="date" id="exampleDatepicker11" required />
							<label for="exampleDatepicker11" class="form-label">เลือกวันที่</label>
						</div>
					</div>
					<div class="col-md-6">
						<select class="select" name="type_announcement">
							<option value="1">ฝ่ายบุคคล</option>
							<option value="2">ฝ่ายสำนักงานใหญ่</option>
						</select>
						<label class="form-label select-label">ฝ่าย</label>
					</div>
					<div class="col-md-6">
						<input type="file" class="form-control" name="uploadFile" accept=".pdf" id="customFile" />
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-success">อัพโหลด</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
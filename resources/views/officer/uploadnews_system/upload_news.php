<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3">
			<div class="card-body text-dark">
				<h5 class="card-title border-bottom">อัพโหลดข่าวสาร</h5>
				<form action="<?php echo site_url('officer/upload') ?>" method="post" enctype="multipart/form-data" class="row g-3">
					<div class="col-md-4">
						<div class="form-outline">
							<input type="text" name="title" id="form12" class="form-control" required />
							<label class="form-label" for="form12">หัวข้อ</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-outline">
							<input type="date" class="form-control" name="date" id="exampleDatepicker11" required />
							<label for="exampleDatepicker11" class="form-label">เลือกวันที่</label>
						</div>
					</div>
					<div class="col-md-4">
						<select class="select" name="news_type">
							<option value="1">ประชาสัมพันธ์</option>
							<option value="2">สวัสดิการ</option>
							<option value="3">สินเชื่อฮาลาล</option>
							<option value="4">มูลนิธิษะกอฟะฮ</option>
						</select>
						<label class="form-label select-label">เลือกประเภทข่าว</label>
					</div>
					<div class="col-md-12">
						<label class="form-label" for="detail">รายละเอียด :</label>
						<div class="form-outline">
							<textarea class="form-control" name="description" id="detail" rows="4" required></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<label for="coverImage" class="form-label">ภาพหน้าปก</label>
						<input class="form-control form-control-lg" type="file" name="coverImage" id="coverImage" />
					</div>
					<div class="col-md-12">
						<label for="formFileMultiple" class="form-label">อัพโหลดไฟล์ภาพ</label>
						<input class="form-control form-control-lg" type="file" name="uploadedFiles[]" id="formFileMultiple" multiple />
					</div>
					<small>ห้ามอัพรูปเกินทั้งหมด 40 MB</small>
					<div class="col-12">
						<button type="submit" value="upload" class="btn btn-success">อัพโหลด</button>
						<a href="<?php echo site_url('officer/uploadnews_system') ?>" class="btn btn-danger">ยกเลิก</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
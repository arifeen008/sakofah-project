<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3">
			<div class="card-body text-dark">
				<h5 class="card-title border-bottom">อัพโหลดข่าวสาร</h5>
				<form action="<?php echo site_url('officer/update_news') ?>" method="post" class="row g-3">
					<div class="col-md-4">
						<div class="form-outline">
							<input type="text" name="title" id="form12" value="<?php echo $title ?>" class="form-control" />
							<label class="form-label" for="form12">หัวข้อ</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-outline">
							<input type="date" class="form-control" name="date" value="<?php echo $dateupload ?>" id="exampleDatepicker11" />
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
					<input type="hidden" class="form-control" name="news_number" value="<?php echo $news_number ?>" />
					<div class="col-md-12">
						<label class="form-label" for="textArea">รายละเอียด :</label>
						<div class="form-outline">
							<textarea class="form-control" name="description" id="detail" rows="4"><?php echo $description ?></textarea>

						</div>
					</div>
					<div class="col-12">
						<button type="submit" value="upload" class="btn btn-success">ตกลง</button>
						<a href="<?php echo site_url('officer/uploadnews_system') ?>" class="btn btn-danger">ยกเลิก</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
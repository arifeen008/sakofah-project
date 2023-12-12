<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3" style="font-family: 'Sarabun';">
			<div class="card-body">
				<h5 class="card-title">ค้นหาข้อมูลสมาชิก</h5>
				<form action="<?php echo site_url('officer/search_data_member') ?>" method="post" class="row g-3">
					<div class="col-md-6">
						<div class="form-outline">
							<input type="text" name="id_card" id="form12" maxlength="13" minlength="13" class="form-control" />
							<label class="form-label" for="form12">เลขบัตรประชาชน</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-outline">
							<input type="text" name="mem_id" id="form12" class="form-control" />
							<label class="form-label" for="form12">เลขสมาชิก</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-outline">
							<input type="text" name="fname" id="form12" class="form-control" />
							<label class="form-label" for="form12">ชื่อ</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-outline">
							<input type="text" name="lname" id="form12" class="form-control" />
							<label class="form-label" for="form12">นามสกุล</label>
						</div>
					</div>
					<div class="col-md-12">
						<select class="select" name="branch_number">
							<option value="000">สาขาสำนักงานใหญ่</option>
							<option value="001">สาขากระบี่</option>
							<option value="002">สาขาคลองยาง</option>
							<option value="003">สาขาอ่าวลึก</option>
							<option value="004">สาขากาญจนดิษฐ์</option>
							<option value="005">สาขาคลองท่อม</option>
							<option value="006">สาขาอ่าวนาง</option>
							<option value="007">สาขาห้วยลึก</option>
							<option value="008">สาขาเกาะลันตา</option>
							<option value="009">สาขาเหนือคลอง</option>
						</select>
						<label class="form-label select-label">สาขา</label>
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-success"><i class="fas fa-search me-2"></i>ค้นหา</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
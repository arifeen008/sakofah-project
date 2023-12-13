<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="accordion my-3">
			<div class="accordion-item" style="font-family: 'Sarabun';">
				<h2 class="accordion-header" id="headingOne">
					<button class="accordion-button" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
						<b class="text-dark">ข้อมูลส่วนตัว</b>
					</button>
				</h2>
				<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
					<div class="accordion-body">
						<div class="row text-dark" style="font-family: 'Kanit';">
							<div class="col-md-6 my-2">
								ชื่อ : <?php echo $data_member->FNAME ?>
							</div>
							<div class="col-md-6 my-2">
								นามสกุล : <?php echo $data_member->LNAME ?>
							</div>
							<div class="col-md-6 my-2">
								เลขบัตรประจำตัวประชาชน : <?php echo $data_member->ID_CARD ?>
							</div>
							<div class="col-md-6 my-2">
								วันเกิด : <?php echo thaidate('j F Y ', strtotime($data_member->DMY_BIRTH))  ?>
							</div>
							<div class="col-md-6 my-2">
								เพศ : <?php echo (($data_member->SEX == "1") ? "ชาย" : "หญิง") ?>
							</div>
							<div class="col-md-6 my-2">
								ชื่อบิดา : <?php echo $data_member->FATHER ?>
							</div>
							<div class="col-md-6 my-2">
								ชื่อมารดา : <?php echo $data_member->MOTHER ?>
							</div>
							<div class="col-md-6 my-2">
								สถานะ : <?php echo $data_member->MARRIAGE_STATUS ?>
							</div>
							<div class="col-md-6 my-2">
								กรุ๊ปเลือด : <?php echo (($data_member->BLO_GROUP != null) ? $data_member->BLO_GROUP : " -") ?>
							</div>
							<div class="col-md-6 my-2">
								เลขที่บ้าน : <?php echo $data_member->ADDRESS ?>
							</div>
							<div class="col-md-6 my-2">
								หมู่ที่ : <?php echo $data_member->MOO_ADDR ?>
							</div>
							<div class="col-md-6 my-2">
								ตำบล : <?php echo $data_member->TUMBOL ?>
							</div>
							<div class="col-md-6 my-2">
								LINE ID : <?php echo (($data_member->LINE_ID != null) ? $data_member->LINE_ID : " -") ?>
							</div>
							<div class="col-md-6 my-2">
								EMAIL :<?php echo (($data_member->EMAIL != null) ? $data_member->EMAIL : " -") ?>
							</div>
							<div class="col-md-6 my-2">
								โทรศัพท์ : <?php echo $data_member->MOBILE_TEL ?>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
							<b class="text-dark">เงินฝากในบัญชี</b>
						</button>
					</h2>
					<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
						<div class="accordion-body">
							<div class="form-outline mb-4">
								<input type="text" class="form-control" id="searchAccountdeposit" />
								<label class="form-label" for="datatable-search-input">ค้นหาชื่อบัญชี</label>
							</div>
							<div id="datatableDeposit" class="datatable" data-mdb-borderless="true" data-mdb-sm="true">
								<table>
									<thead>
										<tr>
											<th data-mdb-sort="false">เลขบัญชี</th>
											<th data-mdb-sort="false">ชื่อบัญชี</th>
											<th data-mdb-sort="false">ยอดคงเหลือ</th>
											<th data-mdb-sort="false">รายละเอียด</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($deposit_member->result() as $row) { ?>
											<tr>
												<td><?= BankAccount($row->ACCOUNT_NO) ?></td>
												<td><?= $row->ACCOUNT_NAME ?></td>
												<td><?= number_format($row->BALANCE, 2) ?></td>
												<td><a href="<?php echo site_url('officer/account_details/' . $row->ACCOUNT_NO) ?>" class="btn btn-info"><i class="fas fa-file-alt"></i></a></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
							<b class="text-dark">สินเชื่อ</b>
						</button>
					</h2>
					<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
						<div class="accordion-body">
							<div class="datatable" data-mdb-borderless="true" data-mdb-sm="true">
								<table>
									<thead>
										<tr>
											<th data-mdb-sort="false">เลขที่สัญญา</ะ>
											<th data-mdb-sort="false">ชื่อสัญญา</th>
											<th data-mdb-sort="false">วันที่ทำสัญญา</td>
											<th data-mdb-sort="false">วันที่หมดสัญญา</th>
											<th data-mdb-sort="false">ยอดอนุมัติสินเชื่อ</th>
											<th data-mdb-sort="false">จำนวนงวดคงเหลือ</th>
											<th data-mdb-sort="false">ยอดคงเหลือ</th>
											<th data-mdb-sort="false">รายละเอียด</th>
										</tr>
									</thead>
									<tbody>
									
										<?php foreach ($opened_credit_member->result() as $row) { ?>
											<tr>
												<td><?= $row->LCONT_ID ?></td>
												<td><?= $row->LSUB_NAME ?></td>
												<td><?= thaidate('j M Y ', strtotime($row->LCONT_DATE))  ?></td>
												<td><?= thaidate('j M Y ', strtotime($row->END_PAYDEPT)) ?></td>
												<td><?= number_format($row->LCONT_APPROVE_SAL, 2); ?> </td>
												<td><?= $row->LCONT_AMOUNT_INST ?></td>
												<td><?= number_format($row->LCONT_AMOUNT_SAL, 2);  ?></td>
												<td><a href="<?php echo site_url('officer/opened_loan_details/' . $row->CODE . '/' . $row->BR_NO) ?>" class="btn btn-success"><i class="far fa-file-alt"></i></a></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingFive">
						<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
							<b class="text-dark">สินเชื่อที่ปิดแล้ว</b>
						</button>
					</h2>
					<div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
						<div class="accordion-body">
							<div class="datatable" data-mdb-borderless="true" data-mdb-sm="true">
								<table>
									<thead>
										<tr>
											<th data-mdb-sort="false">เลขที่สัญญา</ะ>
											<th data-mdb-sort="false">ชื่อสัญญา</th>
											<th data-mdb-sort="false">วันที่ทำสัญญา</td>
											<th data-mdb-sort="false">วันที่หมดสัญญา</th>
											<th data-mdb-sort="false">ยอดอนุมัติสินเชื่อ</th>
											<th data-mdb-sort="false">จำนวนงวดคงเหลือ</th>
											<th data-mdb-sort="false">ยอดคงเหลือ</th>
											<th data-mdb-sort="false">รายละเอียด</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($closed_credit_member->result() as $row) { ?>
											<tr>
												<td><?= $row->LCONT_ID ?></td>
												<td><?= $row->LSUB_NAME ?></td>
												<td><?= thaidate('j M Y ', strtotime($row->LCONT_DATE))  ?></td>
												<td><?= thaidate('j M Y ', strtotime($row->END_PAYDEPT)) ?></td>
												<td><?= number_format($row->LCONT_APPROVE_SAL, 2); ?> </td>
												<td><?= $row->LCONT_AMOUNT_INST ?></td>
												<td><?= number_format($row->LCONT_AMOUNT_SAL, 2);  ?></td>
												<td><a href="<?php echo site_url('officer/closed_loan_details/' . $row->CODE . '/' . $row->BR_NO) ?>" class="btn btn-success"><i class="far fa-file-alt"></i></a></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingFour">
						<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
							<b class="text-dark">หุ้น</b>
						</button>
					</h2>
					<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
						<div class="accordion-body">
							<table class="table table-bordered">
								<tr class="text-center">
									<td>เลขที่สมาชิก</td>
									<td>สาขาที่สังกัด</td>
									<td>เงินคงเหลือ</td>
									<td>อายุการเป็นสมาชิก</td>
									<td>คะแนนสะสมคงเหลือ</td>
								</tr>
								<tr class="text-center">
									<td><?= $stock_select->MEM_ID ?></td>
									<td><?= $stock_select->BR_NAME ?></td>
									<td><?= number_format($stock_select->SHR_SUM_BTH, 2) ?></td>
									<td><?= $stock_select->MEM_AGE_OLD + $stock_age->SHR_ADV_COUNT . ' เดือน' ?></td>
									<td><?= number_format($stock_select->POINT_SHR, 2)  ?></td>
								</tr>
							</table>
							<div class="datatable" data-mdb-borderless="true" data-mdb-sm="true">
								<table>
									<thead>
										<tr>
											<th data-mdb-sort="false">เลขที่ใบเสร็จ</th>
											<th data-mdb-sort="false">ประเภทหุ้น</th>
											<th data-mdb-sort="false">จำนวนหุ้น</th>
											<th data-mdb-sort="false">จำนวนเงิน</th>
											<th data-mdb-sort="false">วันที่ทำรายการ</th>
											<th data-mdb-sort="false">จำนวนเงินคงเหลือ</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($stock_details->result() as $row) { ?>
											<tr>
												<td><?= $row->SLIP_NO ?></td>
												<td><?= $row->SHR_NA ?></td>
												<td><?= $row->TMP_SHARE_QTY ?></td>
												<td><?= number_format($row->TMP_SHARE_BHT, 2) ?></td>
												<td><?= thaidate('j M Y ', strtotime($row->TMP_DATE_TODAY)) ?></td>
												<td><?= number_format($row->SHR_SUM_BTH, 2) ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingSix">
						<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
							<b class="text-dark">เงินปันผล</b>
						</button>
					</h2>
					<div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
						<div class="accordion-body">
							<?php if ($dividend != null) { ?>
								<table class="table table-bordered">
									<tr class="text-center">
										<td>ปี</td>
										<td>วันที่รับเงิน</td>
										<td>จำนวนเงิน</td>
										<td>สาขาที่รับ</td>
									</tr>
									<tr class="text-center">
										<td><?php echo $dividend->SHR_YEAR + 543 ?></td>
										<td><?php echo thaidate('j M Y ', strtotime($dividend->SHR_OUT_DATE))  ?></td>
										<td><?php echo number_format($dividend->SHR_SUMUP_DIV, 2)  ?></td>
										<td><?php echo $dividend->BR_NAME ?></td>
									</tr>
								</table>
							<?php } else { ?>
								<div class="h-100 d-flex justify-content-center align-items-center">
									<b class="text-dark">ยังไม่ได้รับเงินปันผล</ิ>
								</div>
							<?php	} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

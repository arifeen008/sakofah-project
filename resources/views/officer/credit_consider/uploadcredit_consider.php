<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาสินเชื่อ</h3>
                </div>

                <form action="<?php echo site_url('officer/uploadcreditfile_consider') ?>" method="post" enctype="multipart/form-data">
                    <div class="row mx-2">
                        <div class="col-md-12 mb-4">
                            <div class="form-outline">
                                <input type="text" id="form14" class="form-control" minlength="5" maxlength="5" name="mem_id" />
                                <label class="form-label" for="form14">เลขที่สมาชิก</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="form14" class="form-control" name="fname" />
                                <label class="form-label" for="form14">ชื่อ</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="form14" class="form-control" name="lname" />
                                <label class="form-label" for="form14">นามสกุล</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <select class="select" name="loan_id">
                                <option value="1">ฉุกเฉิน</option>
                                <option value="2">สามัญฉุกเฉิน</option>
                                <option value="3">สามัญ</option>
                                <option value="4">พิเศษ</option>
                                <option value="5">พิเศษโครงการ</option>
                                <option value="6">โครงการสินทรัพย์</option>
                                <option value="7">สวัสดิการเจ้าหน้าที่</option>
                            </select>
                            <label class="form-label select-label">ประเภทสัญญา</label>

                        </div>
                        <div class="col-md-6 mb-4">
                            <select class="select" name="loan_year">
                                <option value="2566">2566</option>
                                <option value="2567">2567</option>
                                <option value="2568">2568</option>
                                <option value="2569">2569</option>
                                <option value="2570">2570</option>
                            </select>
                            <label class="form-label select-label">ปีสัญญา</label>
                        </div>
                        <div class="col-md-6 mb-4">
                            <select class="select" name="branch_id">
                                <option value="000">สำนักงานใหญ่</option>
                                <option value="001">กระบี่</option>
                                <option value="002">คลองยาง</option>
                                <option value="003">อ่าวลึก</option>
                                <option value="004">กาญจนดิษฐ์</option>
                                <option value="005">คลองท่อม</option>
                                <option value="006">อ่าวนาง</option>
                                <option value="007">ห้วยลึก</option>
                                <option value="008">เกาะลันตา</option>
                                <option value="009">สาขาเหนือคลอง</option>
                            </select>
                            <label class="form-label select-label">สาขา</label>
                        </div>
                        <!-- <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="lnumber_id" class="form-control" name="lnumber_id" placeholder="ตัวอย่าง ฉ.0000001/2566" />
                                <label class="form-label" for="lnumber_id">เลขที่คำขอสินเชื่อ</label>
                                <div class="form-helper"></div>
                            </div>
                        </div> -->
                        <div class="col-md-12 mb-4">
                            <label class="form-label" for="customFile">อัพโหลดไฟล์</label>
                            <input type="file" name="loanFile" class="form-control" id="customFile" accept=".pdf" />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-2">ตกลง</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
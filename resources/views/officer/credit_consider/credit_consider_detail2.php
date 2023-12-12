<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาข้อมูลสินเชื่อข้อมูลสินเชื่อ <?php echo $result->fname . "    " . $result->lname ?></h3>
                </div>
                <div class="row">
                
                    <div class="col-6 my-2">
                        ชื่อ : <?php echo $result->fname.'   '.$result->lname ?>
                    </div>

                    <div class="col-6 my-2">
                        ผู้ส่ง : <?php echo $result->username ?>
                    </div>
                    <div class="col-6 my-2">
                        รหัสสินเชื่อ : <?php echo $result->lnumber_id ?>
                    </div>
                    <div class="col-6 my-2">
                        ปี : <?php echo $result->loan_year ?>
                    </div>
                    <div class="col-6 my-2">
                        สาขา : <?php echo $result->name_branch ?>
                    </div>
                    <div class="col-6 my-2">
                        ประเภทสินเชื่อ : <?php echo $result->credit_name ?>
                    </div>
                </div>
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <h3 class="align-self-center me-auto"> <a href="<?php echo base_url($result->path . '/' . $result->file_name) ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-download me-3"></i>ดูเอกสาร</a></h3>
                    <a href="<?php echo site_url('officer/accept_credit_consider2/' . $result->credit_consider_id) ?>" class="btn btn-success h3 ms-3 accept"><i class="fas fa-check me-2"></i>อนุมัติ</a>
                    <button type="button" class="btn btn-danger h3 ms-3" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="fas fa-skull-crossbones me-2"></i>ปฏิเสธ</button>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">หมายเหตุ*</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo site_url('officer/reject_credit_consider2/' . $result->credit_consider_id) ?>" method="post">
                <div class="modal-body">
                    <div class="form-outline">
                        <textarea class="form-control" id="textAreaExample" name="note" rows="4" required></textarea>
                        <label class="form-label" for="textAreaExample">หมายเหตุ</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">ตกลง</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.accept').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'ต้องการอนุมัติสินเชื่อนี้หรือไม่',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'ยืนยัน',
            denyButtonText: 'ปฏิเสธ',
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire('อนุมัติสำเร็จ!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('ยกเลิก', '', 'info')
            }
        })
    })
</script>
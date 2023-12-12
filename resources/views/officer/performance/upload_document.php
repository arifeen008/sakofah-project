<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>อัพโหลดเอกสาร</h3>
                </div>
            </div>
            <form action="<?php echo site_url('officer/uploadDocumentFile') ?>" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-4 mx-4">
                    <input type="text" data-mdb-color="success" name="document_name" id="form1Example" class="form-control" />
                    <label class="form-label" for="form1Example">ชื่อเอกสาร</label>
                </div>
                <div class="mb-4 mx-4">
                    <label class="form-label" for="customFile">อัพโหลดไฟล์</label>
                    <input type="file" name="documentFile" class="form-control" id="customFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                </div>
                <button type="submit" class="ms-4 mb-4 btn btn-primary">อัพโหลด</button>
            </form>
        </div>
    </div>
</main>
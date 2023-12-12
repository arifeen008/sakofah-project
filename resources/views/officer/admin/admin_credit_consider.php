<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h1>Admin</h1>
                </div>
                <div class="d-flex flex-row-reverse me-3 my-3"><a href="<?php echo site_url('officer/status_form_add') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่ม Status</a></div>
                <table class="table table-hover align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr class="text-center">
                            <th>รหัส</th>
                            <th>ชื่อสถานะ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr class="text-center">
                                <td><?= $row->status_id   ?></td>
                                <td><?= $row->status_name ?></td>
                                <td><a href="<?php echo site_url('officer/status_form_edit/' . $row->status_id) ?>" class="btn btn-warning">แก้ไข</a></td>
                                <td><a href="<?php echo site_url('officer/delete_status/' . $row->status_id) ?>" type="button" class="btn btn-danger delete">ลบ</a></td>
                            </tr>
                        <?php  } ?>
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
            title: 'ต้องการลบสถานะนี้หรือไม่',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'ลบ',
            denyButtonText: 'ยกเลิก',
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire('ลบแล้ว!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('ยกเลิก', '', 'info')
            }
        })
    })
</script>
<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title mb-3">
                    <h1>Admin ระบบสินเชื่อ</h1>
                </div>
                <table id="datatable" class="table table-bordered align-middle" data-page-length='25'>
                    <thead>
                        <tr>
                            <th class="text-center">รหัสสมาชิก</th>
                            <th class="text-center">ชื่อ-สกุล</th>
                            <th class="text-center">สินเชื่อ</th>
                            <th class="text-center">ผู้ส่ง</th>
                            <th class="text-center">วันที่</th>
                            <th class="text-center">รายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td class="text-center"><?= $row->mem_id   ?></td>
                                <td class="text-center"><?= $row->fname . "   " . $row->lname ?></td>
                                <td>
                                    <p class="fw-normal mb-1"> <?= $row->fullcont_id ?></p>
                                    <p class="text-muted mb-1"><?= $row->name_branch ?></p>
                                    <p class="text-muted mb-1"><?= $row->credit_name ?></p>
                                    <p class="text-muted mb-1"><?= $row->year ?></p>
                                </td>
                                <td class="text-center"><?= $row->name_upload ?></td>
                                <td class="text-center"><?= thaidate('j M Y ', strtotime($row->date_upload)) ?></td>
                                <td class="text-center">
                                    <a href="<?php echo site_url($row->path . '/' . $row->file_name) ?>" target="_blank" class="btn btn-primary">ไฟล์</a>
                                    <a href="<?php echo site_url('officer/admin_delete_credit/' . $row->id_credit) ?>" class="btn btn-danger delete">ลบ</a>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
    new DataTable('#datatable', {
        searching: true,
        ordering: false,
        paging: true,
        oLanguage: {
            "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
            "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
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

    $('.delete').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'ต้องการลบหรือไม่',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'ลบ',
            denyButtonText: 'ยกเลิก',
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire('ลบแล้ว !', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('ยกเลิก', '', 'info')
            }
        })
    })
</script>
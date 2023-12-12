<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>ฝ่ายสินเชื่อสาขา</h3>
                </div>
                <div class="d-flex flex-row-reverse me-3 my-3"><a href="<?php echo site_url('officer/uploadcredit_consider') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>ส่งสินเชื่อ</a></div>
                <table id="datatable" class="table table-hover align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>วันที่</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">ติดตามสถานะ</th>
                            <th class="text-center text-danger">หมายเหตุ*</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->mem_id   ?></td>
                                <td><?= $row->fname . " " . $row->lname  ?></td>
                                <td>
                                    <p class="fw-normal mb-1"><?= $row->lnumber_id   ?></p>
                                    <p class="text-muted mb-1"><?= $row->name_branch  ?></p>
                                    <p class="text-muted mb-1"><?= $row->credit_name  ?></p>
                                </td>
                                <td>
                                    <p><?= thaidate('j M Y ', strtotime($row->date)) ?></p>
                                    <p><?= thaidate('H:i', strtotime($row->date)) ?></p>
                                </td>
                                <td class="text-center"><span class="badge badge-success rounded-pill d-inline"><?= $row->status_name  ?></span></td>
                                <td class="text-center">
                                    <a class="btn btn-outline-success" href="<?php echo site_url('officer/credit_consider_process/' . $row->credit_consider_id) ?>"><i class="fab fa-algolia"></i></a>
                                    <a class="btn btn-outline-danger delete" href="<?php echo site_url('officer/delete_credit_consider/' . $row->credit_consider_id) ?>"><i class="fas fa-dumpster-fire"></i></a>
                                </td>
                                <td class="text-center">
                                    <?php if ($row->note) { ?>
                                        <button type="button" class="btn btn-lg btn-outline-danger" data-mdb-toggle="popover" title="หมายเหตุ*" data-mdb-content="<?= $row->note ?>">
                                            <i class="fas fa-align-justify"></i>
                                        </button>
                                    <?php } else {  ?>
                                        <h1>-</h1>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
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
            "sZeroRecords": "ไม่มีข้อมูล",
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
            title: 'Do u want to delete this credit ?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Yes',
            denyButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire('Deleted!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Cancle', '', 'info')
            }
        })
    })
</script>
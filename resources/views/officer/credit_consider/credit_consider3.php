<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>ฝ่ายวิเคราะห์</h3>
                </div>

                <table id="datatable" class="table table-hover align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>วันที่</th>
                            <th>สถานะ</th>
                            <th class="text-center">รายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->mem_id   ?></td>
                                <td><?= $row->fname . "  " . $row->lname  ?></td>
                                <td>
                                    <p class="fw-normal mb-1"><?= $row->lnumber_id   ?></p>
                                    <p class="fw-normal mb-1"><?= $row->name_branch  ?></p>
                                    <p class="fw-normal mb-1"><?= $row->credit_name  ?></p>
                                    <p class="fw-normal mb-0"><?= $row->loan_year  ?></p>
                                </td>
                                <td>
                                    <p><?= thaidate('j M Y ', strtotime($row->date)) ?></p>
                                    <p><?= thaidate('H:i', strtotime($row->date)) ?></p>
                                </td>
                                <td><span class="badge badge-success rounded-pill d-inline"><?= $row->status_name  ?></span></td>
                                <td class="text-center">
                                    <a href="<?php echo site_url('officer/credit_consider_detail2/' . $row->credit_consider_id) ?>" class="btn btn-outline-success" data-mdb-ripple-color="success"><i class="fas fa-eye"></i></a>
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
</script>
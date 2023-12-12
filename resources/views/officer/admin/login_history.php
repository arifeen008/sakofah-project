<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title mb-3">
                    <h1>Admin ประวัติล็อกอิน</h1>
                </div>
                <div class="d-flex flex-row-reverse me-3 my-3"><a href="<?php echo site_url('officer/all_officer') ?>" class="btn btn-success"><i class="fas fa-users me-2"></i>รายบุคคล</a></div>
                <table id="datatable" class="table-border mb-3">
                    <thead>
                        <tr>
                            <th class="text-center">รหัสสมาชิก</th>
                            <th class="text-center">สาขา</th>
                            <th class="text-center">ชื่อ</th>
                            <th class="text-center">วันที่</th>
                            <th class="text-center">เวลา</th>
                            <th class="text-center">IP ADDRESS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr class="text-center">
                                <td><?= $row->user_id   ?></td>
                                <td><?= $row->name_branch ?></td>
                                <td><?= $row->user_name ?></td>
                                <td><?= thaidate('j M Y', strtotime($row->login_time)) ?></td>
                                <td><?= thaidate('H:i', strtotime($row->login_time)) ?></td>
                                <td><?= $row->ip_address ?></td>
                                <td><a href="<?php echo site_url('officer/login_history_person/'.$row->user_id.'/'.$row->branch_id) ?>" class="btn btn-info"><i class="fas fa-chart-pie"></i></a></td>
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
        searching: false,
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
</script>
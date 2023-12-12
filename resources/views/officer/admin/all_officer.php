<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title mb-3">
                    <h1>รายชื่อเจ้าหน้าที่</h1>
                </div>
                <table id="datatable" class="table-border mb-3">
                    <thead>
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>สาขา</th>
                            <th>ชื่อ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->USER_ID   ?></td>
                                <td><?= $row->BR_NAME ?></td>
                                <td><?= $row->USER_NAME ?></td>             
                                <td><a href="<?php echo site_url('officer/login_history_person/'.$row->USER_ID.'/'.$row->BR_NO) ?>" class="btn btn-info"><i class="fas fa-chart-pie"></i></a></td>
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
        ordering: true,
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
<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title mb-3">
                    <h1>Admin ประวัติล็อกอิน </h1>
                </div>
                <p class="h2 float-end"><?= $officer->USER_NAME ?></p>
                <table id="datatable" class="table-border mb-3">
                    <thead>
                        <tr>
                            <th>วันที่</th>
                            <th>เวลา</th>
                            <th>IP ADDRESS</th>
                            <th>browser</th>
                            <th>version</th>
                            <th>platform</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= thaidate('j M Y', strtotime($row->login_time)) ?></td>
                                <td><?= thaidate('H:i', strtotime($row->login_time)) ?></td>
                                <td><?= $row->ip_address ?></td>
                                <td><?= $row->browser ?></td>
                                <td><?= $row->version ?></td>
                                <td><?= $row->platform ?></td>
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
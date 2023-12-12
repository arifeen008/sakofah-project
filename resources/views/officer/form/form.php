<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card" style="font-family: 'Sarabun';">
            <div class="card-body">
                <h2 class="card-title text-dark">แบบฟอร์มฝ่ายบุคคล</h2>
                <table id="datatable">
                    <thead>
                        <tr>
                            <th class="text-center">ประกาศ</th>
                            <th class="text-center">วันที่</th>
                            <th class="text-center">ดาวน์โหลด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->title ?></td>
                                <td class="text-center"><?= thaidate('j M Y ', strtotime($row->date))  ?></td>
                                <td class="text-center"><a href="<?php echo base_url('file/inside_publish/' . $row->uploadfile); ?>" target="_blank" class="btn btn-outline-success" data-mdb-ripple-color="success"><i class="fas fa-download"></i></td>
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
        searching: false,
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
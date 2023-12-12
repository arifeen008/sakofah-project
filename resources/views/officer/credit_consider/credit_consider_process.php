<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>ประวัติสินเชื่อ</h3>
                </div>
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <td>วันที่</td>
                            <td>เวลา</td>
                            <td>สถานะ</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= thaidate('j M Y ', strtotime($row->date))?></td>
                                <td><?= thaidate('H:i', strtotime($row->date))?></td>
                                <td><strong><?= $row->status_name ?></strong></td>
                            </tr>
                        <?php  } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
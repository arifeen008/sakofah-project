<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h1>Admin</h1>
                </div>
                <form action="<?php echo site_url('officer/update_status') ?>" method="post">
                    <div class="form-outline mb-4">
                        <input type="hidden" id="form7Example1" name="status_id" value="<?= $result->status_id ?>" class="form-control" />
                        <input type="text" id="form7Example1" name="status_name" value="<?= $result->status_name ?>" class="form-control" />
                        <label class="form-label" for="form7Example1">สถานะ</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">แก้ไข</button>
                </form>
            </div>
        </div>
    </div>
</main>
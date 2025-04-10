@extends('layout')
@section('title', 'เข้าสู่ระบบ ')
@section('content')
<section class="vh-100 d-flex justify-content-center align-items-center" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 col-xl-4">
          <div class="card shadow-3-strong">
            <div class="card-body p-5">
  
              <!-- โลโก้ -->
              <div class="text-center mb-4">
                <img src="{{ url('picture/sakofag-logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 80px;">
              </div>
  
              <h3 class="text-center mb-4">เข้าสู่ระบบ</h3>
  
              <form action="/login" method="post">
                @csrf
  
                @error('user_id')
                  <script>
                    document.addEventListener('DOMContentLoaded', function () {
                      const toastEl = document.getElementById('errorToast');
                      const toast = new mdb.Toast(toastEl);
                      toast.show();
                    });
                  </script>
                @enderror
  
                <div class="form-floating mb-4">
                  <input type="text" id="user_id" name="user_id" class="form-control" placeholder="ชื่อผู้ใช้" />
                  <label for="user_id">ชื่อผู้ใช้</label>
                </div>
  
                <div class="form-floating mb-4">
                  <input type="password" id="password" name="password" class="form-control" placeholder="รหัสผ่าน" />
                  <label for="password">รหัสผ่าน</label>
                </div>
  
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="password" id="Remember" checked />
                    <label class="form-check-label" for="Remember">จดจำฉัน</label>
                  </div>
                  <a href="/">ลืมรหัสผ่าน</a>
                </div>
  
                <button type="submit" class="btn btn-success btn-lg w-100">เข้าสู่ระบบ</button>
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Toast แจ้งเตือน -->
    @error('user_id')
      <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="errorToast" class="toast fade text-white bg-danger" role="alert" data-mdb-autohide="false">
          <div class="toast-header bg-danger text-white">
            <strong class="me-auto">เกิดข้อผิดพลาด</strong>
            <button type="button" class="btn-close btn-close-white ms-2 mb-1" data-mdb-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ $message }}
          </div>
        </div>
      </div>
    @enderror
  
  </section>
  

@endsection
@section('script')
    @if (session('error'))
        <script>
            Swal.fire({
                title: "ผิดพลาด !",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif
@endsection

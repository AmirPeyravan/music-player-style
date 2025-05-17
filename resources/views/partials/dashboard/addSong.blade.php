<!-- Add Song Modal -->
<div id="addSongModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">افزودن آهنگ جدید</h2>
        </div>
        <div class="modal-body">
            <div class="upload-area">
                <div class="upload-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="upload-text">فایل آهنگ را در اینجا رها کنید یا کلیک کنید</div>
                <div class="upload-hint">پشتیبانی از فرمت‌های MP3، WAV، FLAC</div>
            </div>

            <div class="form-group">
                <label class="form-label">نام آهنگ</label>
                <input type="text" class="form-control" placeholder="نام آهنگ را وارد کنید">
            </div>

            <div class="form-group">
                <label class="form-label">نام هنرمند</label>
                <input type="text" class="form-control" placeholder="نام هنرمند را وارد کنید">
            </div>

            <div class="form-group">
                <label class="form-label">آلبوم</label>
                <input type="text" class="form-control" placeholder="نام آلبوم را وارد کنید">
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-cancel" onclick="closeModal('addSongModal')">انصراف</button>
            <button class="btn btn-primary">افزودن</button>
        </div>
    </div>
</div>
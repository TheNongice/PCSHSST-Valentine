<form action="../../request.php" method="post">
    <div class="container-fluid" style="padding-top: 1rem;">
        <div class="container-md">
            <div class="card">
                <div class="card-header bg-warning">ขั้นตอนที่ 1 :: ข้อมูลผู้ขอ</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="Class_res" class="form-label">ชั้นที่กำลังศึกษา</label>
                        <select class="form-select" name="CLASS_REQUEST" id="Class_re">
                            <option selected>ชั้นมัธยมศึกษาปีที่ ....</option>
                            <option value="1">ชั้นมัธยมศึกษาปีที่ 1</option>
                            <option value="2">ชั้นมัธยมศึกษาปีที่ 2</option>
                            <option value="3">ชั้นมัธยมศึกษาปีที่ 3</option>
                            <option value="4">ชั้นมัธยมศึกษาปีที่ 4</option>
                            <option value="5">ชั้นมัธยมศึกษาปีที่ 5</option>
                            <option value="6">ชั้นมัธยมศึกษาปีที่ 6</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Class_No_res" class="form-label">ห้องเรียน</label>
                        <select class="form-select" name="CLASS_NO_REQUEST" id="Class_No_re">
                            <option selected></option>
                            <option value="1">1 (Omega)</option>
                            <option value="2">2 (Delta)</option>
                            <option value="3">3 (Theta)</option>
                            <option value="4">4 (Zigma)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Class_No_res" class="form-label">ผู้ขอ</label>
                        <select class="form-select" name="NAME_REQUEST" id="Name_re">
                            <option selected></option>
                        </select>
                    </div>                     
                </div>
            </div>
        </div>
        <div class="container-md mt-4">
            <div class="card">
                <div class="card-header bg-info">ขั้นตอนที่ 2 :: ข้อมูลผู้ถูกขอ</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="Class_res" class="form-label">ชั้นที่กำลังศึกษา</label>
                        <select class="form-select" name="CLASS_RECIEVE" id="Class_rec">
                            <option selected>ชั้นมัธยมศึกษาปีที่ ....</option>
                            <option value="1">ชั้นมัธยมศึกษาปีที่ 1</option>
                            <option value="2">ชั้นมัธยมศึกษาปีที่ 2</option>
                            <option value="3">ชั้นมัธยมศึกษาปีที่ 3</option>
                            <option value="4">ชั้นมัธยมศึกษาปีที่ 4</option>
                            <option value="5">ชั้นมัธยมศึกษาปีที่ 5</option>
                            <option value="6">ชั้นมัธยมศึกษาปีที่ 6</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Class_No_res" class="form-label">ห้องเรียน</label>
                        <select class="form-select" name="CLASS_NO_RECIEVE" id="Class_No_rec">
                            <option selected></option>
                            <option value="1">1 (Omega)</option>
                            <option value="2">2 (Delta)</option>
                            <option value="3">3 (Theta)</option>
                            <option value="4">4 (Zigma)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Class_No_res" class="form-label">ผู้รับ</label>
                        <select class="form-select" name="NAME_RECIEVE" id="Name_rec">
                            <option selected></option>
                        </select>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="container-md text-center" style="padding-top: 1rem;">
            <div class="card">
                <div class="card-body">
                    <p style="color: red;">**กรุณาตรวจสอบข้อมูลให้ถี่ถ้วน เพราะหากส่งแล้วจะไม่สามารถแก้ไขข้อมูลได้**</p>
                    <button class="btn btn-success" type="submit"><i class="fas fa-paper-plane"></i> ส่งการจอง!</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            // ขั้นตอนที่ 1 
            $('#Class_re').on('input',function(){
                let _this = $(this);
                let CLASS_RE_INPUT = _this.val();
                if(CLASS_RE_INPUT!="ชั้นมัธยมศึกษาปีที่ ..."){
                    if(CLASS_RE_INPUT=="4" || CLASS_RE_INPUT=="5" || CLASS_RE_INPUT=="6"){
                        $("#Class_No_re .jq").remove();
                        $("#Class_No_re").append('<option value="5" class="jq">5 (Lambda)</option>');
                        $("#Class_No_re").append('<option value="6" class="jq">6 (Alpha)</option>');
                    }else{
                        $("#Class_No_re .jq").remove();
                    }
                }else{
                    $("#Class_No_re .jq").remove();
                }
            });
            // ขั้นตอนที่ 2
            $('#Class_rec').on('input',function(){
                let _this = $(this);
                let CLASS_RE_INPUT = _this.val();
                if(CLASS_RE_INPUT!="ชั้นมัธยมศึกษาปีที่ ..."){
                    if(CLASS_RE_INPUT=="4" || CLASS_RE_INPUT=="5" || CLASS_RE_INPUT=="6"){
                        $("#Class_No_rec .jq").remove();
                        $("#Class_No_rec").append('<option value="5" class="jq">5 (Lambda)</option>');
                        $("#Class_No_rec").append('<option value="6" class="jq">6 (Alpha)</option>');
                    }else{
                        $("#Class_No_rec .jq").remove();
                    }
                }else{
                    $("#Class_No_rec .jq").remove();
                }
            });
            
            $('#Class_No_re').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {CLASS_NO_REQUEST: $(this).val() , CLASS_REQUEST: $('#Class_re').val()},
                        url: 'include/request-form/std_name_re.php',
                        success: function(data) {
                            $('#Name_re').html(data);
                        }
                    });
                    return false;
            });

            $('#Class_No_re').change(function(){
                
            });

            $('#Class_No_rec').change(function(){
                
            });
        });
    </script>
</form>
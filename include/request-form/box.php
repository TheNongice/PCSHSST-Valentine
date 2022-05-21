<form action="../../api/box-request.php" method="post" id="box-form">
    <div class="container-fluid" style="padding-top: 0.5rem;">
        <div class="container mt-4">
            <div class="alert alert-info" role="alert">
                <i class="fas fa-info-circle"></i> หากพบปัญหาข้อมูลระดับชั้นไม่โหลดให้ทำการกดเลือกระดับชั้นใหม่ตั้งแต่ต้น!
            </div>
        </div>
        <div class="container-sm mt-4">
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
            <div class="container-sm mt-4">
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

        <!-- Modal -->
        <div class="modal fade" id="whatquestmeans" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-th" id="exampleModalLabel">คำถามเหล่านี้คืออะไร ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body formal-text">
                ในการขอจองใบส่งรักส่งยิ้มทางเราจะ............. (ใส่ไรต่อหรือลบดีไม่รู้5555)
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success formal-text" data-bs-dismiss="modal">เข้าใจ/รับทราบ</button>
            </div>
            </div>
        </div>
        </div>
            <div class="container-sm mt-4">
                    <div class="card">
                        <div class="card-header bg-danger text-white">ขั้นตอนที่ 3 :: รายละเอียดการจอง</div>
                        <div class="card-body">
                            <label for="amount_photo">จำนวนรูปภาพต้องการ (ไม่เกิน 10):</label>
                            <select class="form-select" name="AMOUNT_PHOTO" id="amount_photo">
                                <option value="0"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <label for="quest1">คำถามที่ 1: <abbr title="attribute" data-bs-toggle="modal" data-bs-target="#whatquestmeans">[?]</abbr></label>
                                <input class="form-control" id="quest1" type="text" name="QUEST1" autocomplete="off" required>
                            <label for="quest1">คำถามที่ 2: <abbr title="attribute" data-bs-toggle="modal" data-bs-target="#whatquestmeans">[?]</abbr></label>
                                <input class="form-control" id="quest2" type="text" name="QUEST2" autocomplete="off" required>
                            <label for="quest1">คำถามที่ 3: <abbr title="attribute" data-bs-toggle="modal" data-bs-target="#whatquestmeans">[?]</abbr></label>
                                <input class="form-control" id="quest3" type="text" name="QUEST3" autocomplete="off" required>
                            <label for="quest1">คำถามที่ 4 (ไม่บังคับ): <abbr title="attribute" data-bs-toggle="modal" data-bs-target="#whatquestmeans">[?]</abbr></label>
                                <input class="form-control" id="quest4" type="text" name="QUEST4" autocomplete="off">
                            <label for="quest1">คำถามที่ 5 (ไม่บังคับ): <abbr title="attribute" data-bs-toggle="modal" data-bs-target="#whatquestmeans">[?]</abbr></label>
                                <input class="form-control" id="quest5" type="text" name="QUEST5" autocomplete="off">
                        </div>
                    </div>
            </div>
        <div class="container-sm mt-3 mb-3">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4>ราคารวม: </h4>
                        </div>
                        <div class="col">
                            <div class="text-end">
                                <strong><h4 id="price_show">***.** บาท</h4></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-sm text-center mt-3 mb-3">
            <div class="card">
                <div class="card-body formal-text">
                    <p style="color: red;">**กรุณาตรวจสอบข้อมูลให้ถี่ถ้วน เพราะหากส่งแล้วจะไม่สามารถแก้ไขข้อมูลได้**</p>
                    <a roles="button" class="btn btn-success" onclick="return formSubmit();"><i class="fas fa-paper-plane"></i> ส่งการจอง!</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        const PRICE_PHOTO = 10; const QUEST_PRICE = 5; // ราคารูปภาพกับคำถาม
        let total_price = 0; var photo_sel;
        var qu1 = 0; var qu2 = 0; var qu3 = 0; var qu4 = 0; var qu5 = 0;
        function showPrice(){
            let finalPrice = (photo_sel*PRICE_PHOTO)+(qu1*QUEST_PRICE)+(qu2*QUEST_PRICE)+(qu3*QUEST_PRICE)+(qu4*QUEST_PRICE)+(qu5*QUEST_PRICE);
            $('#price_show').text(`${finalPrice}.00 บาท`);
        }
        function formSubmit(){
            Swal.fire({
            title: 'ยืนยันการทำรายการ?',
            text: "กรุณาตรวจสอบข้อมูลให้ถี่ถ้วนอีกครั้ง หลังจากที่ส่งแล้วจะไม่สามารถแก้ข้อมูลได้อีก",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#5eba7d',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยันการส่ง!',
            cancelButtonText: 'ยกเลิกแก้ไขต่อ'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('box-form').submit();
            }
            })
        }
        $(document).ready(function(){
            // ขั้นตอนที่ 1
            photo_sel = $(this).val();
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
                        url: 'include/request-form/std_name_list.php',
                        success: function(data) {
                            $('#Name_re').html(data);
                        }
                    });
                    return false;
            });

            $('#Class_No_rec').change(function(){
                $.ajax({
                        type: 'POST',
                        data: {CLASS_NO_REQUEST: $(this).val() , CLASS_REQUEST: $('#Class_rec').val()},
                        url: 'include/request-form/std_name_list.php',
                        success: function(data) {
                            $('#Name_rec').html(data);
                        }
                    });
                    return false;
            });

            $('#amount_photo').change(function(){
                photo_sel = $(this).val();
                showPrice();
            });

            $('#quest1').change(function(){
                var data_text1 = $(this).val();
                if(data_text1 !== ""){
                    qu1 = 1;
                    showPrice();
                }else{
                    qu1 = 0;
                    showPrice();
                }
            });

            $('#quest2').change(function(){
                var data_text2 = $(this).val();
                if(data_text2 !== ""){
                    qu2 = 1;
                    showPrice();
                }else{
                    qu2 = 0;
                    showPrice();
                }
            });

            $('#quest3').change(function(){
                var data_text3 = $(this).val();
                if(data_text3 !== ""){
                    qu3 = 1;
                    showPrice();
                }else{
                    qu3 = 0;
                    showPrice();
                }
            });

            $('#quest4').change(function(){
                var data_text4 = $(this).val();
                if(data_text4 !== ""){
                    qu4 = 1;
                    showPrice();
                }else{
                    qu4 = 0;
                    showPrice();
                }
            });

            $('#quest5').change(function(){
                var data_text5 = $(this).val();
                if(data_text5 !== ""){
                    qu5 = 1;
                    showPrice();
                }else{
                    qu5 = 0;
                    showPrice();
                }
            });
        });
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.onkeydown = function (e) {
            // disable F12 key
            if(e.keyCode == 123) {              
                return false;
            }
            // disable I key
            if(e.ctrlKey && e.shiftKey && e.keyCode == 73){              
                return false;
            }
            // disable J key
            if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {              
                return false;
            }
            // disable U key
            if(e.ctrlKey && e.keyCode == 85) {              
                return false;
            }
        }
        console.log(
            "%cหยุด!",
            "color:red;font-family:system-ui;font-size:4rem;font-weight:bold"
        );
        console.log(
            "%cนี่เป็นคุณสมบัติการทำงานของเบราว์เซอร์ที่มีจุดมุ่งหมายให้ใช้สำหรับผู้พัฒนา/ทดสอบระบบ \nมิควรทำกระการใด ๆ ที่อาจทำให้ระบบเกิดความเสียหาย หากพบอาจถูกดำเนินคดีทางกฏหมาย",
            "color:white;font-family:system-ui;font-size:2rem;font-weight:bold"
        );
    </script>
</form>
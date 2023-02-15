<script language="javascript">
        var idChkFlag = false;


        $(document).ready(function(){

            // $('.jBtnAddTel').click(function(){
            //     $('.jRowTel02').show();
            //     $(this).hide();
            // });

            // $('.jBtnDelTel').click(function(){
            //     $('.jRowTel02').hide();
            //     $('.jBtnAddTel').show();
            // });

            // $("#mem_id").change(function(){
            //     idChkFlag = false;
            // });

            // $('.jBtnDuplicate').click(function(){

            //     $(".jValidateID_Ok").hide();
            //     $(".jValidateID_Fail").hide();

            //     var url = "/join/checkDuplicateID";

            //     if(validate_id() == false){
            //         return;
            //     }

            //     idChkType = false ;

            //     var promise = $.ajax({
            //         url: url,
            //         dataType: "json",
            //         data: $('#base_form').serialize(),
            //         method: "post",
            //         cache: false,
            //         async: true
            //     });

            //     promise.done(function (data, textStatus, jqXHR) {
            //         if(data == true){

            //             $(".jViewCheckID").html("해당 아이디는 사용이 <b class='red'>가능</b> 합니다.") ;
            //             idChkFlag = true ;

            //             $(".jValidateID_Ok").show();

            //         } else {
            //             $(".jValidateID_Fail").show();
            //         }
            //     });

            //     promise.fail(function (jqXHR, textStatus, errorThrown) {
            //         alert('error');
            //     });

            // });


            // $("#jMemPW").blur(function(){
            //     var memPWD = $(this).val();
            //     if(validPWD( memPWD ) == false)
            //         return false;
            // });

            // $("#jMemPW, #jMemPWConfirm").blur(function(){
            //     var memPWD = $("#jMemPW").val();
            //     var memPWDConfirm = $("#jMemPWConfirm").val();

            //     if(memPWDConfirm == "")
            //     {
            //         $(".jValidatePW_Fail").hide();
            //         $(".jValidatePW_Ok").hide();
            //         return false;
            //     }

            //     if(memPWD != memPWDConfirm)
            //     {
            //         $(".jValidatePW_Fail").show();
            //         $(".jValidatePW_Ok").hide();
            //         return false;
            //     }
            //     else
            //     {
            //         $(".jValidatePW_Fail").hide();
            //         $(".jValidatePW_Ok").show();
            //         return false;
            //     }

            // });



            // $('.jCancel').click(function(){
            //     history.go(-1);
            //     return false;
            // });


            $('.jOk').click(function(){
                alert("access");
                console.log($('#mem_id').val());

                // <input type="email" name="mem_id" id="mem_id" maxlength="16" autofocus required placeholder="아이디" requireMsg="아이디를 입력해주세요.">

                // var url = "/join/joinMem";

                // var airCd = $("#mem_air_code").val();
                // var airMemId = $("#mem_air_id").val();

                // var isValid = true;
                // - 핸드폰 번호 DB에 안들어감

                // 빈값 체크
                // $("[required]").each(function(){
                //     if($(this).val() == "")
                //     {
                //         alert($(this).attr("requireMsg"));
                //         $(this).focus();
                //         isValid = false;
                //         return false;
                //     }
                // });


                //숫자만 체크
                // $("[number_only]").each(function(){
                //     var numVal = $(this).val();
                //     var numExp = /^[0-9]*$/;
                //     if(numVal != "" && numExp.test(numVal) == false)
                //     {
                //         alert("숫자만 입력가능합니다.");
                //         $(this).focus();
                //         isValid = false;
                //         return false;
                //     }
                // });

                //이메일 체크
                // $("[email_only]").each(function(){
                //     var emailVal = $(this).val();
                //     var emailExp = /^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/;
                //     if(emailVal != "" && emailExp.test(emailVal) == false)
                //     {
                //         alert("정확한 이메일이 아닙니다.");
                //         $(this).focus();
                //         isValid = false;
                //         return false;
                //     }
                // });

                // 한글 ,영문 이름 공백 체크
                // $("[space_not]").each(function(){
                //     // 공백 정규화 및 앞뒤 공백 제거
                //     var blank_pattern = /[\s]/gi;
                //     var str = $(this).val().replace(/(^\s*)|(\s*$)/,"");

                //     if( blank_pattern.test(str) ) {
                //         alert(' 공백은 사용할 수 없습니다. ');
                //         $(this).focus();
                //         isValid = false;
                //         return false;
                //     }

                //     $(this).val(str);
                // });

                // if(isValid == false)
                //     return false;

                // if(idChkFlag == false)
                // {
                //     alert("아이디 중복체크를 해주세요.");
                //     return false;
                // }

                // var birthDate = $("select[name='mem_ssn[]']:eq(0) option:selected").val()+$("select[name='mem_ssn[]']:eq(1) option:selected").val()+$("select[name='mem_ssn[]']:eq(2) option:selected").val();
                // var today = new Date();
                // var yyyy = today.getFullYear();
                // var mm = today.getMonth() < 9 ? "0" + (today.getMonth() + 1) : (today.getMonth() + 1); // getMonth()
                // var dd  = today.getDate() < 10 ? "0" + today.getDate() : today.getDate();

                // if(parseInt(yyyy+''+mm+''+dd) - parseInt(birthDate) - 140000 < 0) {
                //     alert("만 14세 미만은 가입 불가능 합니다.");
                //     return false;
                // }


                // if(airCd == 'KE'){
                //     if(airMemId.length !== 12){
                //         alert("대한항공 마일리지 적립을 원하실 경우, \n" +
                //             "숫자 12자리로 구성된 대한항공 신회원번호를 입력 해주세요.\n");
                //         return false;
                //     }
                // } else if(airCd == 'OZ'){
                //     if(airMemId.length !== 9){
                //         alert("아시아나 마일리지 적립을 원하실 경우, \n" +
                //             "OZ를 제외한 회원번호 9자리만 입력 해주세요.");
                //         return false;
                //     }
                // }

                // var promise = $.ajax({
                //     url: url,
                //     data: $('#base_form').serialize(),
                //     method: "post",
                //     dataType: "json",
                //     async: true,
                //     cache: false
                // });

                // promise.done(function (data, textStatus, jqXHR) {
                //     if(data == true){
                //         location.href="/join/join_done";

                //     } else {
                //         alert("이미 가입된 이메일 입니다.") ;
                //         $('#mem_email').val("") ;
                //     }
                // });

                // promise.fail(function (jqXHR, textStatus, errorThrown) {
                //     alert("이미 가입된 이메일 입니다.") ;
                //     $('#mem_email').val("") ;
                // });
            });

        });


        function validate_id()
        {
            var check = true;

            var mem_id = $('#mem_id').val();

            if(check == "")
            {
                alert('아이디를 입력해 주세요.');
                return false;
            }

            var isOnlyNum = /^[0-9_]{6,16}$/ ;
            if( isOnlyNum.test(mem_id)) {
                alert("아이디는 영문 숫자 조합으로 사용하실수 있습니다.");
                return false;
            }

            /* checkFormat  */
            var isID = /^[a-z0-9_]{6,16}$/;
            if( !isID.test(mem_id) ) {
                alert( "아이디는 6~16자의 영문 소문자와 숫자,특수기호(_)만 사용할 수 있습니다." );
                return false;
            }

            var retVal = checkSpace( mem_id );

            if( !retVal ) {
                alert("아이디는 빈 공간 없이 연속된 영문 소문자와 숫자만 사용할 수 있습니다.");
                return false;
            }
            if( mem_id.charAt(0) == '_') {
                alert("아이디의 첫문자는 '_'로 시작할수 없습니다.");
                return false;
            }

            if( mem_id == ""){
                alert( "아이디를 입력하여 주십시오.");
                return false;
            }

            return true
        }



        function validPWD( str )
        {

            result = "" ;

            var isOnlyNum = /^[0-9]{6,16}$/ ;
            if( isOnlyNum.test(str)) {
                alert("비밀번호는 영문 숫자 조합으로 사용하실수 있습니다.");
                return false;
            }

            /* limitLength */
            var isPW = /^[a-z0-9]{6,12}$/;
            if( !isPW.test(str) ) {
                result = "비밀번호는 6~12자의 영문 소문자와 숫자만 사용할 수 있습니다." ;
            }

            /* check whether input value is included space or not  */
            var retVal = checkSpace( str );
            if( !retVal ) {
                result = "비밀번호는 빈공간 없이 연속된 영문 소문자와 숫자만 사용할 수 있습니다." ;
            }
            var cnt=0;
            for( var i=0; i < str.length; ++i)
            {
                if( str.charAt(0) == str.substring( i, i+1 ) ) ++cnt;
            }
            if( cnt == str.length ) {
                result = "보안상의 이유로 한 문자로 연속된 비밀번호는 허용하지 않습니다." ;
            }

            if( str == ""){
                result = "비밀번호를 입력하세요." ;
            }

            if(result != "")
            {
                alert(result) ;
                return false;
            }

            return true;

        }

        function trim(str) {
            str = input.replace(/(^\s*)|(\s*$)/,"");
            return str;
        }
    </script>

    <!-- [D] 컨텐츠 영역 -->
    <form id="base_form" method="post">

    <div id="container">
        <div id="content">

            <section class="sec_join">
                <div class="tit_area">
                    <h1>회원가입</h1>
                    <span class="block_line">필수입력항목</span>
                </div>

                    <input type="hidden" name="vendor" value="AL">
                    <!-- <input type="hidden" name="rurl" value="<?= $okRetURL ?>"> -->
                    <input type="hidden" name="flow" value="ToS">

                    <fieldset class="user_info">
                        <legend class="blind">사용자 기본정보 입력폼</legend>
                        <dl>
                            <dt>아이디</dt>
                            <dd>
                                <input type="email" name="mem_id" id="mem_id" maxlength="16" autofocus required placeholder="아이디" requireMsg="아이디를 입력해주세요.">
                                <button type="button" class="btn_st3 jBtnDuplicate">중복확인</button>
                                <p class="c_red jValidateID_Fail" style="display: none">이미 사용중인 아이디 입니다.</p>
                                <p class="c_blue jValidateID_Ok" style="display: none">사용가능한 아이디 입니다.</p>
                            </dd>
                            <dt>비밀번호</dt>
                            <dd>
                                <input type="password" id="jMemPW" name="mem_pw" maxlength="12" required requireMsg="비밀번호를 입력해주세요." placeholder="비밀번호 6자리 이상 영문 1개 포함">
                            </dd>
                            <dt>비밀번호 확인</dt>
                            <dd>
                                <input type="password" id="jMemPWConfirm" name="mem_pw_confirm" maxlength="12" required requireMsg="비밀번호 확인을 입력해주세요." placeholder="비밀번호 확인">
                                <p class="c_red jValidatePW_Fail" style="display: none">비밀번호가 동일하지 않습니다.</p>
                                <p class="c_blue jValidatePW_Ok" style="display: none">비밀번호가 동일합니다.</p>
                            </dd>
                        </dl>
                    </fieldset>

                    <!-- <fieldset class="user_name">
                        <legend class="blind">사용자 이름 입력폼</legend>
                        <dl>
                            <dt>한글이름</dt>
                            <dd>
                                <input type="text" placeholder="한글 성" required space_not requireMsg="한글 성을 입력해주세요." name="mem_fnm_kr"  maxlength="10" >
                                <input type="text" placeholder="한글 이름" required space_not requireMsg="한글 이름을 입력해주세요." name="mem_lnm_kr" maxlength="10" >
                            </dd>
                            <dt>영문이름</dt>
                            <dd>
                                <input type="email" placeholder="영문 성 (여권명)" required space_not requireMsg="영문 성 (여권명)을 입력해주세요." name="mem_fnm_en" maxlength="32" >
                                <input type="email" placeholder="영문 이름 (여권명)" required space_not requireMsg="영문 이름 (여권명)을 입력해주세요." name="mem_lnm_en" maxlength="32" >
                            </dd>
                        </dl>
                    </fieldset> -->

                    <!-- <fieldset>
                        <legend class="blind">사용자 연락처 입력폼</legend>
                        <dl class="user_contact">
                            <dd class="tel_area">
                                <input type="tel" name="mem_hp_cou_code" placeholder="국가번호" required requireMsg="국가를 입력해주세요." class="per3" value="+82">
                                <input type="tel" required number_only requireMsg="지역번호를 선택해주세요." name="mem_hp[]" placeholder="지역번호" class="per2" value="010">
                                <input type="tel" placeholder="숫자만 입력하세요" number_only required requireMsg="전화번호를 입력해주세요." id="jPhoneBody" name="mem_hp[]" maxlength="8">
                                <button type="button" class="btn_plus jBtnAddTel">연락처 추가</button>
                            </dd>
                            <dd class="jRowTel02 tel_area" style="display: none;">
                                <input type="tel" name="mem_tel_cou_code" placeholder="국가번호" requireMsg="국가를 입력해주세요." class="per3" value="+82">
                                <input type="tel" number_only requireMsg="지역번호를 선택해주세요." name="mem_tel[]" placeholder="지역번호" class="per2" value="010">
                                <input type="tel" placeholder="숫자만 입력하세요" number_only requireMsg="전화번호를 입력해주세요." id="jTelBody" name="mem_tel[]" maxlength="8">
                                <button type="button" class="btn_minus jBtnDelTel">연락처 삭제</button>
                            </dd>
                            <dd>
                                <input type="email" placeholder="이메일주소를 입력하세요" email_only required requireMsg="이메일을 입력해주세요." name="mem_email" id="mem_email">
                            </dd>
                        </dl>
                    </fieldset>

                    <fieldset class="birthday">
                        <legend>생년월일</legend>

                        <select name="mem_ssn[]">
                            <? for($i = 2010 ; $i > 1900 ; $i--){?>
                                <option value="<?=$i?>" ><?=$i?>년</option>
                            <?}?>
                        </select>
                        <select name="mem_ssn[]">
                            <? for($i = 1 ; $i < 13 ; $i++){?>
                                <option value="<?=(strlen($i) == 1) ? "0" . $i : $i?>" ><?=$i?>월</option>
                            <?}?>
                        </select>
                        <select name="mem_ssn[]">
                            <? for($i = 1 ; $i < 32 ; $i++){?>
                                <option value="<?=(strlen($i) == 1) ? "0" . $i : $i?>" ><?=$i?>일</option>
                            <?}?>
                        </select>
                    </fieldset>

                    <fieldset class="mileage">
                        <legend>마일리지 적립</legend>
                        <select class="w40p" name="mem_air_code" id="mem_air_code">
                            <option value="">항공사</option>
                            <? for($i = 0 ; $i < sizeof($airCd) ; $i++){ ?>
                                <option value="<?=$airCd[$i]["cd_code"]?>"><?=$airCd[$i]["cd_nm_kr"]?></option>
                            <? } ?>
                        </select>
                        <input type="number" placeholder="멤버쉽 번호" name="mem_air_id" id="mem_air_id" class="w60p">
                    </fieldset>

                    <fieldset>
                        <legend class="blind">뉴스레터 신청</legend>
                        <dl class="y_or_n">
                            <dt>뉴스레터 신청</dt>
                            <dd>
                                <label>
                                    <input type="radio" name="news_ins" value="Y" checked>
                                    <span>예</span>
                                </label>
                                <label>
                                    <input type="radio" name="news_ins" value="N">
                                    <span>아니오</span>
                                </label>
                            </dd>
                        </dl>
                    </fieldset> -->

                    <div class="btn_area col2">
                        <button type="button" class="btn_st1 jCancel">취소</button>
                        <button type="button" class="btn_st1 jOk">가입하기</button>
                    </div>

            </section>

        </div>

    </div>
    <!-- //컨텐츠 영역 -->
    </form>
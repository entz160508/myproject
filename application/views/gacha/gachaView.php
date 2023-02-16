<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

<script language="javascript">

        $(document).ready(function(){

            $('.jOk').click(function(){
                alert("access");
                console.log($('#gachaid').val());
                console.log($('#gachacount').val());
                console.log($('#count').val());

                var url = "/join/joinMem";

                // var promise = $.ajax({
                //     url: url,
                //     data: $('#base_form').serialize(),
                //     method: "post",
                //     dataType: "json",
                //     async: true,
                //     cache: false
                // });

                gachaPage();
               
            });
        });

        function gachaPage()  {
            window.location.href = 'http://35.206.199.78/gacha/gachaCon'
        }

    </script>

    <!-- [D] 컨텐츠 영역 -->
    <form id="base_form" method="post" action="gachacon">

    <div id="container">
        <div id="content">
            <section class="sec_join">
                <fieldset class="gachaInfo">
                    <legend class="blind">사용자 기본정보 입력폼</legend>
                    <dl>
                        <dt>가챠아이디</dt>
                        <dd>
                            <input type="text" name="gachaid" id="gachaid" maxlength="10" autofocus required placeholder="가챠아이디" requireMsg="가챠 아이디를 입력해주세요.">
                            <!-- <button type="button" class="btn_st3 jBtnDuplicate">중복확인</button>
                            <p class="c_red jValidateID_Fail" style="display: none">이미 사용중인 아이디 입니다.</p>
                            <p class="c_blue jValidateID_Ok" style="display: none">사용가능한 아이디 입니다.</p> -->
                        </dd>
                        <dt>가챠카운트</dt>
                        <dd>
                            <input type="text" id="gachacount" name="gachacount" maxlength="10" required requireMsg="가챠 카운트를 입력해주세요" placeholder="1 or 10">
                        </dd>
                        <dt>가챠횟수</dt>
                        <dd>
                            <input type="text" id="count" name="count" maxlength="10" required requireMsg="카운트를 입력해주세요" placeholder="max 10000">
                        </dd>
                        <!-- <dt>비밀번호 확인</dt>
                        <dd>
                            <input type="password" id="jMemPWConfirm" name="mem_pw_confirm" maxlength="12" required requireMsg="비밀번호 확인을 입력해주세요." placeholder="비밀번호 확인">
                            <p class="c_red jValidatePW_Fail" style="display: none">비밀번호가 동일하지 않습니다.</p>
                            <p class="c_blue jValidatePW_Ok" style="display: none">비밀번호가 동일합니다.</p>
                        </dd> -->
                    </dl>
                </fieldset>

            
                <div class="btn_area col2">
                    <!-- <button type="button" class="btn_st1 jCancel">취소</button> -->
                    <!-- <button type="button" class="btn_st1 jOk">가입하기</button> -->
                    <input type = "submit" name = "submit">
                </div>

            </section>

        </div>

    </div>
    </form>
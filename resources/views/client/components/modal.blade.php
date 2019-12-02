<div id="logout" class="alertpopup">
    <div class="logout">
        <div class="title">Thông báo</div>
        <div class="main">
            <p class="tac pb15 fs16">Bạn có chắc chắn muốn thoát ra không?</p>
            <div class="tac">
                <a href="https://mizuiku-emyeunuocsach.vn/logout.htm" class="btnlogout">Có</a>
                <a href="javascript:;" onclick="clickClass('.logout_close');" class="btnlogout">Không</a>
            </div>
            <div class="cb"></div>
        </div>
        <a href="javascript:;" class="logout_close"></a>
    </div>
</div>

<div id="download" class="alertpopup">
    <div class="download">
        <div class="title">Thông báo</div>
        <div class="main">

            <p class="pb15 fs16">Bạn có đồng ý với các điều khoản trên và tiến hành tải tài liệu</p>
            <div class="">
                <a href="javascript://" target="_blank" class="btnlogout btndownload" onclick="$('.download_close').click()">Đồng ý</a>
                <a href="javascript://" class="download_close btnlogout">Không đồng ý</a>
            </div>
            <div class="cb"></div>
        </div>
        <a class="logout_close"></a>
    </div>
</div>

<div id="slide" class="alertpopup">
    <div class="formloginx">
        <div class="title">Bạn chưa có tài khoản?</div>
        <div class="main">
            <div id="regisForm">
                <p class="tde">Register</p>
                <p class="lh22">Vui lòng đăng ký tài khoản theo biểu mẫu bên dưới</p>
                <p class="lh22 c666">Các ô có dấu <span class="cRed">*</span> cần điền đầy đủ thông tin</p>
                <div class="ip">
                    <input name="DisplayLoadControl$Login$tbUser" type="text" id="DisplayLoadControl_Login_tbUser" class="required" onchange="ResetLabel();" placeholder="Tên đăng nhập *" style="display: none;" />
                    <input name="DisplayLoadControl$Login$tbEmail" type="text" id="DisplayLoadControl_Login_tbEmail" class="required" onchange="setUserName(this.value);" placeholder="Email *" />
                    <label class="username"></label>

                    <input name="DisplayLoadControl$Login$tbPass" type="password" id="DisplayLoadControl_Login_tbPass" class="required" onchange="ResetLabel2();" placeholder="Mật khẩu *" />
                    <label class="passw">Mật khẩu cần có ít nhất 8 ký tự Ví dụ: Mizuiku123</label>
                    <input name="DisplayLoadControl$Login$tbName" type="text" id="DisplayLoadControl_Login_tbName" class="required" placeholder="Họ và tên *" />
                    <label>
                        <i>vui lòng ghi tiếng Việt có dấu</i>
                    </label>

                    <select name="DisplayLoadControl$Login$ddlSex" id="DisplayLoadControl_Login_ddlSex" class="w50pc fr">
                        <option value="0">Giới t&#237;nh *</option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                        <option value="3">Kh&#225;c</option>

                    </select>
                    <input name="DisplayLoadControl$Login$tbPhone" type="text" id="DisplayLoadControl_Login_tbPhone" class="w50pc fl" placeholder="Số điện thoại" />
                    <select name="DisplayLoadControl$Login$ddlType" id="DisplayLoadControl_Login_ddlType">
                        <option value="0">Bạn l&#224; *</option>
                        <option value="1">Gi&#225;o vi&#234;n tiểu học (nếu kh&#244;ng phải l&#224; gi&#225;o vi&#234;n tiểu học vui l&#242;ng chọn Kh&#225;c)</option>
                        <option value="3">Kh&#225;c</option>

                    </select>
                    <select name="DisplayLoadControl$Login$ddlCity" id="DisplayLoadControl_Login_ddlCity" class="w50pc fl" onchange="LoadDistrict(this.value,1)">
                        <option value="0">Chọn Tỉnh/Th&#224;nh phố *</option>

                    </select>
                    <select name="DisplayLoadControl$Login$ddlDistric" id="DisplayLoadControl_Login_ddlDistric" class="w50pc fr" onchange="LoadDistrict(this.value,2)">
                        <option value="0">Chọn Quận/Huyện/Thị x&#227; *</option>

                    </select>
                    <input name="DisplayLoadControl$Login$ddlSchool" type="text" id="DisplayLoadControl_Login_ddlSchool" placeholder="Nơi công tác *" />
                    <label>
                        <i>
                    Vui lòng ghi đầy đủ bằng tiếng Việt có dấu. Ví dụ: Trường tiểu học Ngô Thì Nhậm/ Công ty TNHH Nước giải khát Suntory Pepsico Việt Nam</i>
                    </label>

                    <label>
                        Nếu gặp khó khăn trong quá trình đăng ký vui lòng gửi yêu cầu tới địa chỉ <span>
                    <a href="/lien-he.htm">Contact</a>
                </span>để được hỗ trợ</label>
                    <label class="i">(Vui lòng cung cấp địa chỉ email chính xác để Chương trình gửi thông báo kích hoạt tài khoản)</label>

                </div>
                <div class="dieukhoan">
                    <input type="checkbox" id="cb_Accept" class="cb_Accept" />
                    <label for="cb_Accept"><span>Bạn có đồng ý với</span> <a target="_blank" href="/dieu-khoan-su-dung.htm">Điều khoản sử dụng</a> và <a target="_blank" href="/chinh-sach-bao-mat.htm">Chính sách bảo mật</a> của trang web và hệ thống trực tuyến này?</label>
                </div>
                <div class="buton">
                    <a href="javascript:;" title="Register" class="btnform" onclick="registerMember();">Register</a>
                    <a href="javascript:;" title="Content" class="btnform" onclick="ResetAllTextBox('#regisForm')">Content</a>
                    <div class="formember">
                        Bạn đã có tài khoản?
                        <br /> Vui lòng
                        <a href="javascript:;" class="slide_close loginForm_open">Login</a>
                    </div>
                </div>
            </div>

            <div class="cb"></div>
        </div>
    </div>
    <a class="btnclose slide_close"></a>
    <div class="cb"></div>
</div>

<div id="loginForm" class="alertpopup">
    <div class="formloginx">
        <div class="title">Bạn đã có tài khoản</div>
        <div class="main">
            <div class="boxbox">
                <p class="tde">Login</p>
                <p class="lh22">Vui lòng đăng nhập tài khoản của bạn</p>
                <p class="lh22 c666">Các ô có dấu <span class="cRed">*</span> cần điền đầy đủ thông tin</p>
                <div class="ip">
                    <input name="DisplayLoadControl$Login$tbEmailLogin" type="text" id="DisplayLoadControl_Login_tbEmailLogin" class="required" onkeydown="CheckLogin(event)" onchange="ResetLabel3();" placeholder="Tên đăng nhập *" />
                    <input name="DisplayLoadControl$Login$tbPassLogin" type="password" id="DisplayLoadControl_Login_tbPassLogin" class="required" onkeydown="CheckLogin(event)" onchange="ResetLabel3();" placeholder="Mật khẩu *" />
                    <label class="note loginnote cRed"></label>
                </div>
                <div class="RememberPass">
                    <input type="checkbox" value="0" id="RememberPass" />
                    <label for="RememberPass">Ghi nhớ mật khẩu </label>
                    <a href="javascript:;" title="" class="FogetPass loginForm_close slide_close ForgotForm_open">Quên mật khẩu </a>
                </div>
                <div class="dieukhoan">
                    Bạn chưa có tài khoản? Vui lòng <a href="javascript:;" class="loginForm_close slide_open udl">Register</a>
                </div>
                <div class="buton">
                    <a href="javascript:;" onclick="loginMember();" title="Login" class="btnform">Login</a>
                    <a href="javascript:;" onclick="ResetAllTextBox('#loginForm')" title="Content" class="btnform">Content</a>
                </div>
            </div>
            <div class="cb"></div>
        </div>
    </div>
    <a class="btnclose loginForm_close"></a>
    <div class="cb"></div>
</div>
<div id="ForgotForm" class="alertpopup">
    <div class="formloginx">
        <div class="title">Quên mật khẩu</div>
        <div class="main">
            <p class="lh22 fs16">Bạn quên mật khẩu, vui lòng nhập mail để lấy lại mật khẩu</p>
            <div class="ip">
                <input name="DisplayLoadControl$Login$TextBox1" type="text" id="DisplayLoadControl_Login_TextBox1" class="required" onkeydown="CheckLogin(event)" placeholder="Nhập email của bạn *" />
            </div>
            <div class="buton tac mt5">
                <a href="javascript:;" onclick="ForgotPass();" title="Gửi" class="btnform">Gửi</a>
            </div>
            <div class="cb"></div>
        </div>
    </div>
    <a class="btnclose ForgotForm_close"></a>
    <div class="cb"></div>
</div>
<div class="success_open"></div>
<div id="success" class="alertpopup">
    <div class="title">Thông báo</div>
    <div class="main">
        <p class="tac pb15 fs16">Đăng ký thành công</p>
        <a href="javascript:;" class="success_close">Đồng ý</a>
        <div class="cb"></div>
    </div>
</div>
<div id="loginForm2" class="alertpopup">
    <div class="formloginx">
        <div class="title">Xác nhận quyền truy cập thống kê</div>
        <div class="main">
            <div class="boxbox">
                <p class="tde">Login</p>
                <p class="lh22">Vui lòng nhập mật khẩu</p>
                <div class="ip">
                    <input name="DisplayLoadControl$Login$TextBox2" type="text" id="DisplayLoadControl_Login_TextBox2" class="required" onkeydown="CheckLogin2(event)" onchange="ResetLabel4();" />
                    <label class="note loginnote cRed"></label>
                </div>
                <div class="buton">
                    <a href="javascript:;" onclick="loginMember2();" title="Xác nhận" class="btnform">Xác nhận</a>
                </div>
            </div>
            <div class="cb"></div>
        </div>
    </div>
    <a class="btnclose loginForm2_close"></a>
    <div class="cb"></div>
</div>
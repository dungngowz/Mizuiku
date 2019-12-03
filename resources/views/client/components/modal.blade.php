<div id="logout" class="alertpopup">
    <div class="logout">
        <div class="title">{{ __('client.notification') }}</div>
        <div class="main">
            <p class="tac pb15 fs16">{{ __('client.qs-logout') }}</p>
            <div class="tac">
                <a href="https://mizuiku-emyeunuocsach.vn/logout.htm" class="btnlogout">{{ __('client.yes') }}</a>
                <a href="javascript:;" onclick="clickClass('.logout_close');" class="btnlogout">{{ __('client.no') }}</a>
            </div>
            <div class="cb"></div>
        </div>
        <a href="javascript:;" class="logout_close"></a>
    </div>
</div>

<div id="download" class="alertpopup">
    <div class="download">
        <div class="title">{{ __('client.notification') }}</div>
        <div class="main">

            <p class="pb15 fs16">{{ __('client.qs-download') }}</p>
            <div class="">
                <a href="javascript://" target="_blank" class="btnlogout btndownload" onclick="$('.download_close').click()">{{ __('client.agree') }}</a>
                <a href="javascript://" class="download_close btnlogout">{{ __('client.no') }}</a>
            </div>
            <div class="cb"></div>
        </div>
        <a class="logout_close"></a>
    </div>
</div>

<div id="slide" class="alertpopup">
    <div class="formloginx">
        <div class="title">{{ __('client.qs-register') }}</div>
        <div class="main">
            <div id="regisForm">
                <p class="tde">{{ __('client.register') }}</p>
                <p class="lh22">{{ __('client.pls-bellow') }}</p>
                <p class="lh22 c666">{{ __('client.note-1') }}<span class="cRed">*</span> {{ __('client.note-2') }}</p>
                <div class="ip">
                    <input name="DisplayLoadControl$Login$tbUser" type="text" id="DisplayLoadControl_Login_tbUser" class="required" onchange="ResetLabel();" placeholder="{{ __('client.username') }} *" style="display: none;" />
                    <input name="DisplayLoadControl$Login$tbEmail" type="text" id="DisplayLoadControl_Login_tbEmail" class="required" onchange="setUserName(this.value);" placeholder="Email *" />
                    <label class="username"></label>

                    <input name="DisplayLoadControl$Login$tbPass" type="password" id="DisplayLoadControl_Login_tbPass" class="required" onchange="ResetLabel2();" placeholder="{{ __('client.password') }} *" />
                    <label class="passw">{{ __('client.validate-pass') }}</label>
                    <input name="DisplayLoadControl$Login$tbName" type="text" id="DisplayLoadControl_Login_tbName" class="required" placeholder="{{ __('client.last-and-fist-name') }} *" />
                    <label>
                        <i>{{ __('client.note-3') }}</i>
                    </label>

                    <select name="DisplayLoadControl$Login$ddlSex" id="DisplayLoadControl_Login_ddlSex" class="w50pc fr">
                        <option value="0">{{ __('client.sex') }}</option>
                        <option value="1">{{ __('client.male') }}</option>
                        <option value="2">{{ __('client.female') }}</option>
                        <option value="3">{{ __('client.other') }}</option>

                    </select>
                    <input name="DisplayLoadControl$Login$tbPhone" type="text" id="DisplayLoadControl_Login_tbPhone" class="w50pc fl" placeholder="{{ __('client.phone') }}" />
                    <select name="DisplayLoadControl$Login$ddlType" id="DisplayLoadControl_Login_ddlType">
                        <option value="0">{{ __('client.you-are') }}</option>
                        <option value="1">{{ __('client.teacher') }}</option>
                        <option value="3">{{ __('client.other') }}</option>

                    </select>
                    <select name="DisplayLoadControl$Login$ddlCity" id="DisplayLoadControl_Login_ddlCity" class="w50pc fl" onchange="LoadDistrict(this.value,1)">
                        <option value="0">{{ __('client.choose-city') }}</option>

                    </select>
                    <select name="DisplayLoadControl$Login$ddlDistric" id="DisplayLoadControl_Login_ddlDistric" class="w50pc fr" onchange="LoadDistrict(this.value,2)">
                        <option value="0">{{ __('client.choose-contry') }}</option>

                    </select>
                    <input name="DisplayLoadControl$Login$ddlSchool" type="text" id="DisplayLoadControl_Login_ddlSchool" placeholder="{{ __('client.work-place') }}" />
                    <label>
                        <i>{{ __('client.note-4') }}</i>
                    </label>

                    <label>
                        {{ __('client.note-5') }} <span>
                    <a href="/lien-he.htm">{{ __('client.contact-us') }}</a>
                </span>{{ __('client.note-6') }}</label>
                    <label class="i">{{ __('client.note-7') }}</label>

                </div>
                <div class="dieukhoan">
                    <input type="checkbox" id="cb_Accept" class="cb_Accept" />
                    <label for="cb_Accept"><span>{{ __('client.qs-term-1') }}</span> <a target="_blank" href="/dieu-khoan-su-dung.htm">{{ __('client.term') }}</a> {{ __('client.and') }} <a target="_blank" href="/chinh-sach-bao-mat.htm">{{ __('client.private-policy') }}</a> {{ __('client.qs-term-2') }}</label>
                </div>
                <div class="buton">
                    <a href="javascript:;" title="{{ __('client.register') }}" class="btnform" onclick="registerMember();">{{ __('client.register') }}</a>
                    <a href="javascript:;" title="{{ __('client.content') }}" class="btnform" onclick="ResetAllTextBox('#regisForm')">{{ __('client.content') }}</a>
                    <div class="formember">
                        {{ __('client.qs-login') }}
                        <br />  {{ __('client.pls') }}
                        <a href="javascript:;" class="slide_close loginForm_open">{{ __('client.login') }}</a>
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
        <div class="title">{{ __('client.qs-login') }}</div>
        <div class="main">
            <div class="boxbox">
                <p class="tde">{{ __('client.login') }}</p>
                <p class="lh22">{{ __('client.qs-login-title') }}</p>
                <p class="lh22 c666">{{ __('client.note-1') }} <span class="cRed">*</span> {{ __('client.note-2') }}</p>
                <div class="ip">
                    <input name="DisplayLoadControl$Login$tbEmailLogin" type="text" id="DisplayLoadControl_Login_tbEmailLogin" class="required" onkeydown="CheckLogin(event)" onchange="ResetLabel3();" placeholder=" {{ __('client.username') }} *" />
                    <input name="DisplayLoadControl$Login$tbPassLogin" type="password" id="DisplayLoadControl_Login_tbPassLogin" class="required" onkeydown="CheckLogin(event)" onchange="ResetLabel3();" placeholder=" {{ __('client.password') }} *" />
                    <label class="note loginnote cRed"></label>
                </div>
                <div class="RememberPass">
                    <input type="checkbox" value="0" id="RememberPass" />
                    <label for="RememberPass">{{ __('client.rem-pass') }} </label>
                    <a href="javascript:;" title="" class="FogetPass loginForm_close slide_close ForgotForm_open">{{ __('client.forgot-pass') }} </a>
                </div>
                <div class="dieukhoan">
                    {{ __('client.not-acc') }} <a href="javascript:;" class="loginForm_close slide_open udl">{{ __('client.register') }}</a>
                </div>
                <div class="buton">
                    <a href="javascript:;" onclick="loginMember();" title="Login" class="btnform">{{ __('client.login') }}</a>
                    <a href="javascript:;" onclick="ResetAllTextBox('#loginForm')" title="Content" class="btnform">{{ __('client.content') }}</a>
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
        <div class="title">{{ __('client.forgot-pass') }}</div>
        <div class="main">
            <p class="lh22 fs16">{{ __('client.note-forgot') }}</p>
            <div class="ip">
                <input name="DisplayLoadControl$Login$TextBox1" type="text" id="DisplayLoadControl_Login_TextBox1" class="required" onkeydown="CheckLogin(event)" placeholder="{{ __('client.enter-email') }} *" />
            </div>
            <div class="buton tac mt5">
                <a href="javascript:;" onclick="ForgotPass();" title="{{ __('client.send') }}" class="btnform">{{ __('client.send') }}</a>
            </div>
            <div class="cb"></div>
        </div>
    </div>
    <a class="btnclose ForgotForm_close"></a>
    <div class="cb"></div>
</div>
<div class="success_open"></div>
<div id="success" class="alertpopup">
    <div class="title">{{ __('client.notification') }}</div>
    <div class="main">
        <p class="tac pb15 fs16">{{ __('client.register-succ') }}</p>
        <a href="javascript:;" class="success_close">{{ __('client.agree') }}</a>
        <div class="cb"></div>
    </div>
</div>
<div id="loginForm2" class="alertpopup">
    <div class="formloginx">
        <div class="title">{{ __('client.confirm-access') }}</div>
        <div class="main">
            <div class="boxbox">
                <p class="tde">{{ __('client.login') }}</p>
                <p class="lh22">{{ __('client.enter-pass') }}</p>
                <div class="ip">
                    <input name="DisplayLoadControl$Login$TextBox2" type="text" id="DisplayLoadControl_Login_TextBox2" class="required" onkeydown="CheckLogin2(event)" onchange="ResetLabel4();" />
                    <label class="note loginnote cRed"></label>
                </div>
                <div class="buton">
                    <a href="javascript:;" onclick="loginMember2();" title="{{ __('client.confirm') }}" class="btnform">{{ __('client.confirm') }}</a>
                </div>
            </div>
            <div class="cb"></div>
        </div>
    </div>
    <a class="btnclose loginForm2_close"></a>
    <div class="cb"></div>
</div>
// ajax提交表单
function ajaxSubmitForm(id, type, param)
{
    var add_data = '';
    if (param)
    {
        for (key in param) {
            add_data += "&" + key + "=" + param[key];
        }
    }
    // 开启按钮禁用
    set_button_off();
    $.ajaxSetup({
        cache: false
    });

    var act_confirm = function (v, h, f)
    {
        if (v == 'ok')
        {
            $.post($(id).attr('action'), $(id).serialize() + add_data, function (data) {
                // 调用自定义回调设置函数
                callback(type, data);
            }, 'json');
        }

        return true; //close
    };

    if (id == '#active')
    {
        var id_range = document.getElementById('ONESHOPGIFTCARDS_ID').value;
        var salesman = document.getElementById('ONESHOPGIFTCARDS_SALESMAN').value;
        if (id_range == '' || salesman == '')
        {
            $.jBox.tip('ID或业务员不能为空');
        }
        else
        {
            $.post($(id).attr('action'), $(id).serialize() + add_data + '&js_check=1', function (data)
            {
                if (data.status == '1')
                {
                    $.jBox.confirm('可激活信息统计：<br />' + data.msg + '<br />温馨提示：一旦激活即代表售出,请谨慎操作。', '激活确认', act_confirm);
                }
                else
                {
                    $.jBox.tip(data.msg);
                }
            }, 'json');
        }
        set_button_on();
    }
    else
    {
        $.post($(id).attr('action'), $(id).serialize() + add_data, function (data) {
            // 调用自定义回调设置函数
            callback(type, data);
            // 取消按钮禁用
            set_button_on();
        }, 'json');
    }
}

function ajaxSubmitUrl(url, type, param, data_type)
{
    var add_data = '';
    if (param)
    {
        for (key in param) {
            add_data += "&" + key + "=" + param[key];
        }
    }
    if (!data_type)
    {
        data_type = 'json';
    }
    $.ajaxSetup({
        cache: false
    });
    set_button_off();
    $.post(url, add_data, function (data) {
        callback(type, data);
        set_button_on();
    }, data_type);
}
// 设置不同类型的ajax请求返回方法
function callback(type, data)
{

    if (type == 'login' || type == 'add' || type == 'delete' || type == 'update')
    {
        $.jBox.tip(data.msg);
        if (data.status == '1')
        {
            window.setTimeout(function () {
                window.location.href = data.url;
            }, 1500);
            return false;
        }
    }
}
// 开启按钮禁用
function set_button_off()
{
    $('.ajax_link_button').each(function (i) {
        var herf = $(this).attr('href');
        $(this).attr('href', 'javascript:;');
        $(this).attr('data-href', herf);
    });
    $('input[type="button"]').attr('disabled', 'true');
    $('input[type="button"],.ajax_link_button').addClass('btnGray');
}
// 取消按钮禁用
function set_button_on()
{
    $('.ajax_link_button').each(function (i) {
        var herf = $(this).attr('data-href');
        $(this).attr('href', herf);
        $(this).removeAttr('data-href');
    });
    $('input[type="button"]').removeAttr("disabled");
    $('input[type="button"],.ajax_link_button').removeClass('btnGray');
}
function removeE(index, em)
{
    $(histyData[index]).parent().parent().show(300);
    $(em).remove();
    $(histyData[index]).attr("disabled", false);
}

$(document).ready(function () {
    $("#excel").click(function () {
        var id = document.getElementById('ONESHOPGIFTCARDS_ID').value;
        var start_date = $("#ONESHOPGIFTCARDS_BINDTIME_start_date").val();
        var end_date = $("#ONESHOPGIFTCARDS_BINDTIME_end_date").val();
        var salesman = document.getElementById('ONESHOPGIFTCARDS_SALESMAN').value;
        var act_startdate = document.getElementById('ONESHOPGIFTCARDS_ADMININVOKETIME_start_date').value;
        var act_enddate = document.getElementById('ONESHOPGIFTCARDS_ADMININVOKETIME_end_date').value;
        var stat_en = '';
        var stat_dis = '';
        if ($("#ONESHOPGIFTCARDS_INVOKESTATE_enable").attr("checked") == 'checked')
        {
            var stat_en = '2';
        }
        if ($("#ONESHOPGIFTCARDS_INVOKESTATE_disable").attr("checked") == 'checked')
        {
            var stat_dis = '1';
        }
        window.open('index.php?r=ONESHOPGIFTCARDS/excel&ONESHOPGIFTCARDS[ID]=' + id + '&ONESHOPGIFTCARDS[BINDTIME][start_date]=' + start_date + '&ONESHOPGIFTCARDS[BINDTIME][end_date]=' + end_date + '&ONESHOPGIFTCARDS[ADMININVOKETIME][start_date]=' + act_startdate + '&ONESHOPGIFTCARDS[ADMININVOKETIME][end_date]=' + act_enddate + '&ONESHOPGIFTCARDS[INVOKESTATE][enable]=' + stat_en + '&ONESHOPGIFTCARDS[INVOKESTATE][disable]=' + stat_dis + '&ONESHOPGIFTCARDS[SALESMAN]=' + salesman);
        return false;
    });
});

$(document).ready(function () {
    $("#excel_count").click(function () {
        var id = document.getElementById('ONESHOPGIFTCARDS_ID').value;
        var start_date = $("#ONESHOPGIFTCARDS_BINDTIME_start_date").val();
        var end_date = $("#ONESHOPGIFTCARDS_BINDTIME_end_date").val();
        var act_startdate = document.getElementById('ONESHOPGIFTCARDS_ADMININVOKETIME_start_date').value;
        var act_enddate = document.getElementById('ONESHOPGIFTCARDS_ADMININVOKETIME_end_date').value;
        var salesman = document.getElementById('ONESHOPGIFTCARDS_SALESMAN').value;
        var stat_en = '';
        var stat_dis = '';
//        if ($("#ONESHOPGIFTCARDS_INVOKESTATE_enable").attr("checked") == 'checked')
//        {
//            var stat_en = '2';
//        }
//        if ($("#ONESHOPGIFTCARDS_INVOKESTATE_disable").attr("checked") == 'checked')
//        {
//            var stat_dis = '1';
//        }
        window.open('index.php?r=ONESHOPGIFTCARDS/excelcount&ONESHOPGIFTCARDS[ID]=' + id + '&ONESHOPGIFTCARDS[BINDTIME][start_date]=' + start_date + '&ONESHOPGIFTCARDS[BINDTIME][end_date]=' + end_date + '&ONESHOPGIFTCARDS[ADMININVOKETIME][start_date]=' + act_startdate + '&ONESHOPGIFTCARDS[ADMININVOKETIME][end_date]=' + act_enddate + '&ONESHOPGIFTCARDS[INVOKESTATE][enable]=' + stat_en + '&ONESHOPGIFTCARDS[INVOKESTATE][disable]=' + stat_dis + '&ONESHOPGIFTCARDS[SALESMAN]=' + salesman);
        return false;
    });
});

$(document).ready(function () {
    $("#excel_oldcard").click(function () {
        var id = document.getElementById('ONESHOPGIFTCARDS_SN').value;
        var start_date = $("#ONESHOPGIFTCARDS_BINDTIME_start_date").val();
        var end_date = $("#ONESHOPGIFTCARDS_BINDTIME_end_date").val();
        var act_startdate = document.getElementById('ONESHOPGIFTCARDS_ADMININVOKETIME_start_date').value;
        var act_enddate = document.getElementById('ONESHOPGIFTCARDS_ADMININVOKETIME_end_date').value;
        var salesman = document.getElementById('ONESHOPGIFTCARDS_SALESMAN').value;
        var stat_en = '';
        var stat_dis = '';
        if ($("#ONESHOPGIFTCARDS_INVOKESTATE_enable").attr("checked") == 'checked')
        {
            var stat_en = '2';
        }
        if ($("#ONESHOPGIFTCARDS_INVOKESTATE_disable").attr("checked") == 'checked')
        {
            var stat_dis = '1';
        }
        window.open('index.php?r=ONESHOPGIFTCARDS/exceloldcard&ONESHOPGIFTCARDS[SN]=' + id + '&ONESHOPGIFTCARDS[BINDTIME][start_date]=' + start_date + '&ONESHOPGIFTCARDS[BINDTIME][end_date]=' + end_date + '&ONESHOPGIFTCARDS[ADMININVOKETIME][start_date]=' + act_startdate + '&ONESHOPGIFTCARDS[ADMININVOKETIME][end_date]=' + act_enddate + '&ONESHOPGIFTCARDS[INVOKESTATE][enable]=' + stat_en + '&ONESHOPGIFTCARDS[INVOKESTATE][disable]=' + stat_dis + '&ONESHOPGIFTCARDS[SALESMAN]=' + salesman);
        return false;
    });
});

$(document).ready(function () {
    $("#excel_oldcardcount").click(function () {
        var start_date = $("#ONESHOPGIFTCARDS_BINDTIME_start_date").val();
        var end_date = $("#ONESHOPGIFTCARDS_BINDTIME_end_date").val();
        var act_startdate = document.getElementById('ONESHOPGIFTCARDS_ADMININVOKETIME_start_date').value;
        var act_enddate = document.getElementById('ONESHOPGIFTCARDS_ADMININVOKETIME_end_date').value;
        var salesman = document.getElementById('ONESHOPGIFTCARDS_SALESMAN').value;
        window.open('index.php?r=ONESHOPGIFTCARDS/exceloldcardcount&ONESHOPGIFTCARDS[BINDTIME][start_date]=' + start_date + '&ONESHOPGIFTCARDS[BINDTIME][end_date]=' + end_date + '&ONESHOPGIFTCARDS[ADMININVOKETIME][start_date]=' + act_startdate + '&ONESHOPGIFTCARDS[ADMININVOKETIME][end_date]=' + act_enddate + '&ONESHOPGIFTCARDS[SALESMAN]=' + salesman);
        return false;
    });
});

$(document).ready(function () {
    $("#gcardsuselog").click(function () {
        var temp = $("#yw0").serialize();
        window.open('index.php?r=ONESHOPGCARDSUSELOG/excel&' + temp);
        return false;
    });
});
// This function is called from the pop-up menus to transfer to
// a different page. Ignore if the value returned is a null string:
function goPage(newURL) {

    // if url is empty, skip the menu dividers and reset the menu selection to default
    if (newURL != "") {

        // if url is "-", it is this page -- reset the menu:
        if (newURL == "-") {
            resetMenu();
        }
        // else, send page to designated URL            
        else {
            document.location.href = newURL;
        }
    }
}

// resets the menu selection upon entry to this page:
function resetMenu() {
    document.gomenu.selector.selectedIndex = 2;
}

$(document).ready(function () {
    $('#ex1').zoom();
});
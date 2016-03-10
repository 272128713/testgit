<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>问卷调查</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <style>
        .hidden{
            width: 100%;
            padding: 0;
            background: #fff;
            display: none;
            border-radius:5px;
            color:#333;
        }
        .hidden .sex{
            height:35px;
            line-height:35px;
            text-align: center;
            border-bottom:1px solid #eee;
        }
        .hidden .sex:active{
            background: #eee;
        }
        .hidden .famale{
            border-bottom:none;
        }
    </style>
</head>
<body>
<div class="container" >
    <div class="banner">空中急救</div>
    <div class="headtitle">急救知识情况调查问卷</div>
    <div class="row">
        <div class="heading">您的电话</div>
        <input type="text" name="phone" maxlength="11"  onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')">
        <div class="clear"></div>
    </div>
    <div class="row" id="rowsex">
        <div class="heading">您的性别</div>
        <div  name="sex" id="sex" vl=""  style="width: 24%;float: left;font-size: 14px;color: #333333;height: 44px;line-height: 44px;"></div>
        <div class="clear"></div>
    </div>

    <div class="row age">
        <div class="heading">您的年龄</div>
        <input type="text" name="age" maxlength="2" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')">
        <div class="clear"></div>
    </div>
    <div class="border"></div>
    <div class="question">
        <p>1.您是否渴望了解急救常识、学会自救互救技能？</p>
        <div class="item">
            <div class="left">
                <input type="radio" name="qa" value="1" id="1A"/>
                <label for="1A">是</label>
            </div>
            <div class="left">
                <input type="radio" name="qa" value="0" id="1B"/>
                <label for="1B">否</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question">
        <p>2.您曾接受过有关急救知识及技巧的培训么？</p>
        <div class="item">
            <div class="left">
                <input type="radio" name="qb" value="1" id="2A"/>
                <label for="2A">接受过</label>
            </div>
            <div class="left">
                <input type="radio" name="qb" value="0" id="2B"/>
                <label for="2B">没有接受过</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question">
        <p>3.您是否有主动系统的学习了解一些急救常识？</p>
        <div class="item">
            <div class="left">
                <input type="radio" name="qc" value="2" id="3A"/>
                <label for="3A">有</label>
            </div>
            <div class="left">
                <input type="radio" name="qc" value="1" id="3B"/>
                <label for="3B">有想法但没去过</label>
            </div>
            <div class="clear"></div>
        </div>
        <div class="item">
            <div class="left">
                <input type="radio" name="qc" value="0" id="3C"/>
                <label for="3C">没有想法也没去了解</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question">
        <p>4.您认为自己对急救知识掌握的情况如何？</p>
        <div class="item four">
            <div class="left">
                <input type="radio" name="qd" value="3" id="4A"/>
                <label for="4A">非常好</label>
            </div>
            <div class="left">
                <input type="radio" name="qd" value="2" id="4B"/>
                <label for="4B">好</label>
            </div>
            <div class="left">
                <input type="radio" name="qd" value="1" id="4C"/>
                <label for="4C">一般</label>
            </div>
            <div class="left">
                <input type="radio" name="qd" value="0" id="4D"/>
                <label for="4D">差</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question">
        <p>5.您对开展急救知识普及宣传活动持什么态度？</p>
        <div class="item  four">
            <div class="left">
                <input type="radio" name="qe" value="2" id="5A"/>
                <label for="5A">支持</label>
            </div>
            <div class="left">
                <input type="radio" name="qe" value="1" id="5B"/>
                <label for="5B">中立</label>
            </div>
            <div class="left">
                <input type="radio" name="qe" value="0" id="5C"/>
                <label for="5C">反对</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question">
        <p>6.你为什么认为急救知识重要？<span>(可选2项)</span></p>
        <div class="item">
            <input type="checkbox" name="qf[]" id="6A" value="3" onclick="check_count(this)" />
            <label for="6A">紧要时刻救人一命</label>
        </div>
        <div class="item">
            <input type="checkbox" name="qf[]" id="6B" value="2" onclick="check_count(this)" />
            <label for="6B">紧要时刻就己一命</label>
        </div>
        <div class="item">
            <input type="checkbox" name="qf[]" id="6C" value="1" onclick="check_count(this)" />
            <label for="6C">更好的保障亲朋的生命安全</label>
        </div>
        <div class="item">
            <input type="checkbox" name="qf[]" id="6D" value="0" onclick="check_count(this)" />
            <label for="6D">提高伤病人救活的几率</label>
        </div>
    </div>
    <div class="question">
        <p>7.假如现在有人心脏骤停，您是否有信心、有把握对病人进行心肺复苏？</p>
        <div class="item">
            <div class="left">
                <input type="radio" name="qg" value="3" id="7A"/>
                <label for="7A">非常有</label>
            </div>
            <div class="left">
                <input type="radio" name="qg" value="2" id="7B"/>
                <label for="7B">比较有</label>
            </div>
            <div class="clear"></div>
        </div>
        <div class="item">
            <div class="left">
                <input type="radio" name="qg" value="1" id="7C"/>
                <label for="7C">了解一点但不懂得</label>
            </div>
            <div class="left">
                <input type="radio" name="qg" value="0" id="7D"/>
                <label for="7D">没有</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question eight">
        <p>8.面对需要急救的情况，您的真实想法是什么？</p>
        <div class="item">
            <input type="radio" name="qh" value="5" id="8A"/>
            <label for="8A">没学过，躲得越远越好或假装不知道</label>
        </div>
        <div class="item">
            <input type="radio" name="qh" value="4" id="8B"/>
            <label for="8B">一片空白，不知道该做什么</label>
        </div>
        <div class="item">
            <input type="radio" name="qh" value="3" id="8C"/>
            <label for="8C">害怕，忘记要做些什么</label>
        </div>
        <div class="item">
            <input type="radio" name="qh" value="2" id="8D"/>
            <label for="8D">学过急救，但没有信心做好</label>
        </div>
        <div class="item">
            <input type="radio" name="qh" value="1" id="8E"/>
            <label for="8E">学过急救，尽力去帮忙</label>
        </div>
        <div class="item">
            <input type="radio" name="qh" value="0" id="8F"/>
            <label for="8F">学过急救，有信心做好</label>
        </div>
    </div>
    <div class="question">
        <p>9.您认为大中小学校有开设急救知识教育课的必要吗？</p>
        <div class="item">
            <div class="left">
                <input type="radio" name="qi" value="3" id="9A"/>
                <label for="9A">有，一直希望</label>
            </div>
            <div class="left">
                <input type="radio" name="qi" value="2" id="9B"/>
                <label for="9B">比较有</label>
            </div>
            <div class="clear"></div>
        </div>
        <div class="item">
            <div class="left">
                <input type="radio" name="qi" value="1" id="9C"/>
                <label for="9C">无所谓</label>
            </div>
            <div class="left">
                <input type="radio" name="qi" value="0" id="9D"/>
                <label for="9D">没有</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question">
        <p>10.在您以前有遇到过身边的朋友或家人遇到紧急情况，而自己无法在第一时间采取简单的急救措施，使需要急救的人得到救治来争取时间而感到苦恼吗？</p>
        <div class="item four">
            <div class="left">
                <input type="radio" name="qj" value="2" id="10A"/>
                <label for="10A">有</label>
            </div>
            <div class="left">
                <input type="radio" name="qj" value="1" id="10B"/>
                <label for="10B">有一点</label>
            </div>
            <div class="left">
                <input type="radio" name="qj" value="0" id="10C"/>
                <label for="10C">没有</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question">
        <p>11.你的急救知识来源于<span>(多选题)</span></p>
        <div class="item">
            <div class="left per20">
                <input type="checkbox" name="qk[]" value="5" id="11A"/>
                <label for="11A">书本</label>
            </div>
            <div class="left per20">
                <input type="checkbox" name="qk[]" value="4" id="11B"/>
                <label for="11B">电视</label>
            </div>
            <div class="left per20">
                <input type="checkbox" name="qk[]" value="3" id="11C"/>
                <label for="11C">网络</label>
            </div>
            <div class="left per40">
                <input type="checkbox" name="qk[]" value="2" id="11D"/>
                <label for="11D">红十字会宣传</label>
            </div>
            <div class="clear"></div>
        </div>
        <div class="item">
            <div class="left">
                <input type="checkbox" name="qk[]" value="1" id="11E"/>
                <label for="11E">急救知识培训讲座</label>
            </div>
            <div class="left">
                <input type="checkbox" name="qk[]" value="0" id="11F"/>
                <label for="11F">其他</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="question">
        <p>12.你是否愿意参加公益性的急救知识培训</p>
        <div class="item">
            <div class="left">
                <input type="radio" name="ql" value="1" id="12A"/>
                <label for="12A">愿意</label>
            </div>
            <div class="left">
                <input type="radio" name="ql" value="0" id="12B"/>
                <label for="12B">不愿意</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="button" onclick="submit()">提交</div>
</div>

<div class="hidden" id="hid-gender">
    <div class="sex" vl="1">男</div>
    <div class="sex famale" vl="2">女</div>
</div>
<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

    $('#hid-gender .sex').click(function(){
        sexVal = $(this).attr("vl");
        sexHtml = $(this).html();
        layer.closeAll();
        $('#rowsex').children("#sex").html(sexHtml);
        $('#rowsex').children("#sex").attr('vl',sexVal);
    });

    $("#rowsex").click(function(){
        layer_gender();
    });
    function layer_gender(){
        layer.open({
            type: 1,
            title:false,
            closeBtn: false,
            shadeClose:true,
            area:'80%',
            content: $('#hid-gender')
        });
    }
    //判断
    function submit(){
        phone = $("input[name='phone']").val();
        sex = $("#sex").attr("vl");
        age = $("input[name='age']").val();
        qa = $("input:radio[name='qa']:checked").val();
        qb = $("input:radio[name='qb']:checked").val();
        qc = $("input:radio[name='qc']:checked").val();
        qd = $("input:radio[name='qd']:checked").val();
        qe = $("input:radio[name='qe']:checked").val();
        qf = $("input:checkbox[name='qf[]']:checked").val();

        var qfvalue="";
        $("input:checkbox[name='qf[]']:checked").each(function(){
            qfvalue+=$(this).val()+",";  });
        //alert($(this).val());
        qg = $("input:radio[name='qg']:checked").val();
        qh = $("input:radio[name='qh']:checked").val();
        qi = $("input:radio[name='qi']:checked").val();
        qj = $("input:radio[name='qj']:checked").val();
        qk = $("input:checkbox[name='qk[]']:checked").val();
        var qkvalue="";
        $("input:checkbox[name='qk[]']:checked").each(function(){
            qkvalue+=$(this).val()+",";  });
        ql = $("input:radio[name='ql']:checked").val();
        if(phone==""||sex==""||age==""||qa==undefined||qb==undefined||qc==undefined||qd==undefined||qe==undefined||qf==undefined||qg==undefined||qh==undefined||qi==undefined||qj==undefined||qk==undefined||ql==undefined){

            layer.msg("请填写完整");

        }else if(!testTel(phone)){
            layer.msg("请填写正确的手机号");
        }else{
            $.post("sign.php",{phone:phone,sex:sex,age:age,qa:qa,qb:qb,qc:qc,qd:qd,qe:qe,qf:qfvalue,qg:qg,qh:qh,qi:qi,qj:qj,qk:qkvalue,ql:ql},function(data){

                if(data == 1){

                    layer.msg("问卷提交成功，感谢您的支持",{time:2000},function(){
                        window.location.reload();
                    });

                }else if(data == 2){
                    layer.msg("该手机号已提交，请更换手机号码重新提交");

                }
            });
        }



    }
    //校验手机号
    function testTel(val){

        var reg = /^1[034578][0-9]{9}$/;

        if(!reg.test(val)){
            return false;
        }else{
            return true;
        }

    }

    //双选
    var p_tag,inputs,selectInputs=[];
    onload = function(){
        p_tag = document.getElementById("inputsParent");
        inputs = p_tag.getElementsByTagName("input");
        for(var i=0; i<inputs.length; i++){
            if(inputs[i].checked == true) selectInputs.push(inputs[i]);
        }
        document.title = selectInputs.length;
    };
    function check_count(th){
        var i=n=0;
        if(th.checked == true)
        {
            selectInputs.push(th);
            if(selectInputs.length > 2){
                selectInputs[0].checked = false;
                selectInputs.shift();
            }
        }else{
            if(selectInputs.length>1){
                for(var i=0; i<selectInputs.length; i++){
                    if(th == selectInputs[i]) selectInputs.splice(i,1);
                }
            }else{
                th.checked = true;
                return false;
            }
        }
    }
</script>
<style>
    .layui-layer{
        left:0;
    }
    .ui-loader{
        display: none;
    }
</style>

</body>
</html>

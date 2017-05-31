/**
 * Created by ultron-soft on 2017/05/17.
 */
var areaData = Area;
//var $form;
//var form;
//var $;
//layui.use(['jquery', 'form'], function() {
//    $ = layui.jquery;
//    form = layui.form();
//    $form = $('form');
//    loadProvince();
//});
//加载省数据
function loadProvince(form,$form) {
    var proHtml = '';
    for (var i = 0; i < areaData.length; i++) {
        proHtml += '<option value="'+ areaData[i].provinceName + '_' + areaData[i].provinceCode + '_' + areaData[i].mallCityList.length + '_' + i + '">' + areaData[i].provinceName + '</option>';
    }
    //初始化省数据
    $form.find('select[name=province]').append(proHtml);
    form.render();
    form.on('select(province)', function(data) {
        $form.find('select[name=area]').html('<option value="">请选择县/区</option>').parent().hide();
        var value = data.value;
        var d = value.split('_');
        var code = d[1];
        var count = d[2];
        var index = d[3];
        if (count > 0) {
            loadCity(areaData[index].mallCityList,form,$form);
        } else {
            $form.find('select[name=city]').parent().hide();
        }
    });
}
//加载市数据
function loadCity(citys,form,$form) {
    var cityHtml = '';
    for (var i = 0; i < citys.length; i++) {
        cityHtml += '<option value="'+ citys[i].cityName + '_' + citys[i].cityCode + '_' + citys[i].mallAreaList.length + '_' + i + '">' + citys[i].cityName + '</option>';
    }
    $form.find('select[name=city]').html(cityHtml).parent().show();
    form.render();
    form.on('select(city)', function(data) {
        var value = data.value;
        var d = value.split('_');
        var code = d[1];
        var count = d[2];
        var index = d[3];
        if (count > 0) {
            loadArea(citys[index].mallAreaList,form,$form);
        } else {
            $form.find('select[name=area]').parent().hide();
        }
    });
}
//加载县/区数据
function loadArea(areas,form,$form) {
    var areaHtml = '';
    for (var i = 0; i < areas.length; i++) {
        areaHtml += '<option value="'+ areas[i].areaName + '_'  + areas[i].areaCode + '">' + areas[i].areaName + '</option>';
    }
    $form.find('select[name=area]').html(areaHtml).parent().show();
    form.render();
    form.on('select(area)', function(data) {
        //console.log(data);
    });
}
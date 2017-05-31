var monthNames = [" 一月 ", " 二月", " 三月 ", " 四月 ", " 五月 ", " 六月 ",
    " 七月 ", " 八月 ", " 九月 ", " 十月 ", " 十一月 ", " 十二月 "
];
var dayNames = [" 周日", " 周一", " 周二", " 周三", " 周四", " 周五", " 周六"];

var newDate = new Date();
newDate.setDate(newDate.getDate());
$('#Date').html( " " + newDate.getFullYear() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getDate() +" 日 "+ ' , &nbsp;&nbsp;'+ dayNames[newDate.getDay()]);
$('#Date1').html( " " + newDate.getFullYear() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getDate() +" 日 "+ ' , &nbsp;&nbsp;'+ dayNames[newDate.getDay()]);
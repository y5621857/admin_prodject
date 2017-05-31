/**
 * Created by ultron-soft on 2017/05/09.
 */
function myCityFun(result){

    var cityName = result.name;
    console.log("当前定位:"+cityName);
    $("#localCtiy").text("当前定位:"+cityName);
}
var myCity = new BMap.LocalCity();
myCity.get(myCityFun);
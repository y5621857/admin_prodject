/**
 * Created by ultron-soft on 2017/05/15.
 */
var waitBox=$(".waitBox");

var Tnum=5;
setInterval(function(){
    if(Tnum>=0){
        waitBox.html(Tnum+" 秒后会自动跳转 ...");
        Tnum--;
    }else{
        history.back(-1)
    }
},1000);
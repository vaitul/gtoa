var MyNotification = {
    flag : "none",
    label : function(data){
        if(data=="")
            data = " No notification available yet !";
        $("#notification-box .labelArea").html(data);
    },
    description : function(data){
        $("#notification-box div").hide(200).hide().show(200);;
        $("#notification-box .descriptionArea").html(data);
    },
    btn : function(name){
        if(name=="")
            $("#notification-box .btnArea").html(name);
        else
        $("#notification-box .btnArea").html("<br> <button class='btn' onclick='okbtnclicked()'>"+name+"</button>");
    }
};

function notificationFire(){
    var height = $("#notification-box").height();
        if(height>2)
        {
            $(".fa-chevron-down").css({
                "transform":"rotate(0deg)"
            });
            $("#notification-box").height(0);
            $("#notification-box div").fadeOut();
        }
        else
        {
            $("#notification-box").height(300);
            $(".fa-chevron-down").css({
                "transform":"rotate(180deg)"
            });
            $("#notification-box div").fadeIn();
        }
}

/*  *********************************************  */
$(document).ready(function(){
    var promptFlag = false;
    $(".fa-chevron-down").click(function(){
        notificationFire();
    });

});

function SomeDateSkiped(days)
{
    MyNotification.flag = "dayMissed";
    MyNotification.label(days+" Days you missed");
    MyNotification.description("Day(s) auto filled by Computer, <br> Don't worry, you can edit anytime.");
    MyNotification.btn("Ok");
    notificationFire();
}

function okbtnclicked(){
    if(MyNotification.flag == "dayMissed"){
        MyNotification.flag="";
        MyNotification.label(" No notification available yet !");
        MyNotification.description("");
        MyNotification.btn("");
        notificationFire();
        window.location.reload(true);
    }
 }


 /****************************Today's Table empty*********************************/

 function todaysTableEmpty(tableId){
     MyNotification.flag = "todaysTableEmpty";
     MyNotification.label = "How's your day, Tell me !!";
 }
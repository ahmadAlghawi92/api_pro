@extends('layouts.base')
@section('content')
    <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="jquery-3.5.1.min.js"></script>

        <button onclick="getX()">click</button>
        <div id="show"></div>
        <script>
/*
function getX() {


    var myRequest = new XMLHttpRequest();
    myRequest.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            //     for (int a = 0; a< myrequest.length ; a++ ){
            //         document.getElementById(myrequest[a]);
            //     }
            // console.log(this.responseText);
            //     console.log(JSON.parse(this.responseText));
            var myObject = JSON.parse(this.responseText);
            var myText = "";
            for (var i = 0; i < myObject.length; i++) {
                console.log(myObject[i].name);
                myText = myText + myObject[i].name + "<br>";
                console.log(myText);
                        }
            document.getElementById('show').innerHTML = myText;

        }
    };

    myRequest.open('POST', '/test', true);
    myRequest.setRequestHeader("Content-Type" , "application/x-www-form-urlencoded");
    myRequest.send("name=ahmad");

}*/
$(function (){
    $.post("/test?name=ahmad" ,  )
})
</script>

    </div>
@endsection

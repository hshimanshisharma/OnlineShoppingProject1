function getSubCategories(categoryid){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function (){
        if(this.readyState==4 && this.status==200){
            var s = this.response;
            console.log(s);
            document.getElementById('subcatid').innerHTML = s;
        }
    };
    xmlhttp.open('GET','getsubcategory.php?categoryid='+categoryid,true);
    xmlhttp.send();
}

function calculateprice() {
    var a = parseFloat(document.getElementById("mrp").value)
    var d = parseFloat(document.getElementById("discount").value)
    var dp = (a*d)/100;
    var p = a-dp;
    // alert(p);
    document.getElementById("price").value=p.toString();
}
function searchproduct(){
    var search=document.getElementById('search').value;
    // alert(search);
    window.location.href="productpage.php?search="+search;
}


function addArea(){
    const area=document.getElementById('area').value;
    const helpline=document.getElementById('helpline').value;
    const status=document.getElementById('status').value;
    let xhr = new XMLHttpRequest();

        
        xhr.open("POST", "../controller/addAreaCheck.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("area=" + encodeURIComponent(area) + "&helpline=" + encodeURIComponent(helpline) + "&status=" + encodeURIComponent(status));

        
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
                
                if (xhr.responseText == "invalid area") {
                    document.getElementById('areaS').innerHTML="area can not be empty";
                    document.getElementById('areaResultS').innerHTML="";
                    
                }
                else if(xhr.responseText == "invalid helpline"){
                    document.getElementById('helplineS').innerHTML="helpline can not be empty";
                    document.getElementById('areaS').innerHTML="";
                    document.getElementById('areaResultS').innerHTML="";
                }
                else if(xhr.responseText == "invalid status"){
                    document.getElementById('statusS').innerHTML="status can not be empty";
                    document.getElementById('helplineS').innerHTML="";
                    document.getElementById('areaS').innerHTML="";
                    document.getElementById('areaResultS').innerHTML="";
                }
                else if(xhr.responseText == "area already existed"){
                    document.getElementById('areaResultS').innerHTML="";
                    document.getElementById('statusS').innerHTML="";
                    document.getElementById('areaS').innerHTML="area already existed";
                    document.getElementById('helplineS').innerHTML="";
                }
                else {
                    document.getElementById('areaResultS').innerHTML="area added";
                    document.getElementById('statusS').innerHTML="";
                    document.getElementById('areaS').innerHTML="";
                    document.getElementById('helplineS').innerHTML="";
                }
                
                
            }
        };
}
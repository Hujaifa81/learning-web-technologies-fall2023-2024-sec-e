function updateArea(){
    const id=document.getElementById("aAreaId").value;
    const helpline=document.getElementById("aHelpline").value;
    const status=document.getElementById("aStatus").value;

    let xhr = new XMLHttpRequest();

        
        xhr.open("POST", "../controller/updateCoverageCheck.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("id=" + encodeURIComponent(id) + "&helpline=" + encodeURIComponent(helpline) + "&status=" + encodeURIComponent(status));


        
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
                
                
                if(xhr.responseText == "invalid helpline"){
                    document.getElementById('helplineS').innerHTML="helpline is invalid";
                    document.getElementById('statusS').innerHTML="";
                }
                else if(xhr.responseText == "invalid status"){
                    document.getElementById('statusS').innerHTML="status is invalid";
                    document.getElementById('helplineS').innerHTML="";
                    
                    
                }
                
                else{
                    document.getElementById('helplineS').innerHTML="";
                    document.getElementById('statusS').innerHTML="";
                    
                    document.getElementById('resultS').innerHTML="area details updated";
                   
                }
                
            }
        };

}
function validateForm(){
    const status = document.getElementById('status').value;
    const helpline = document.getElementById('helpline').value;
    const area=document.getElementById('area').value;
    if(area===""){
        alert('Invalid area');
        return false;
    }
    if (status==="") {
        alert('Invalid status');
        return false;
        
    }
    if(helpline===""){
        alert('Invalid helpline!');
        return false;
        
    }
}
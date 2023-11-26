function validateForm(){
    const status = document.getElementById('status').value;
    const helpline = document.getElementById('helpline').value;
    if (status==="") {
        alert('Invalid status');
        
    }
    if(helpline===""){
        alert('Invalid helpline!');
        
    }
    
}
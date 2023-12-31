function complaintRegister(){
const category=document.getElementById('category').value;
const subcategory=document.getElementById('subcategory').value;
const complaint_type=document.getElementById('complaint_type').value;
const district=document.getElementById('district').value;
const complaint_details=document.getElementById('complaint_details').value;

    
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/registerComplaintCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
    'category=' + encodeURIComponent(category) +
    '&subcategory=' + encodeURIComponent(subcategory) +
    '&complaint_type=' + encodeURIComponent(complaint_type) +
    '&district=' + encodeURIComponent(district) +
    '&complaint_details=' + encodeURIComponent(complaint_details));
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            if(response==="invalid category"){
                document.getElementById('categoryS').innerHTML = "must be selected";
            }
            else if(response==="invalid subcategory"){
                document.getElementById('subcategoryS').innerHTML = "must be selected";
                document.getElementById('categoryS').innerHTML = "";
            }
            else if(response==="invalid complaint_type"){
                document.getElementById('complaint_typeS').innerHTML = "must be selected";
                document.getElementById('categoryS').innerHTML = "";
                document.getElementById('subcategoryS').innerHTML = "";
                
            }
            else if(response==="invalid district"){
                document.getElementById('districtS').innerHTML = "must be selected";
                document.getElementById('complaint_typeS').innerHTML = "";
                document.getElementById('categoryS').innerHTML = "";
                document.getElementById('subcategoryS').innerHTML = "";
            }
            else if(response==="invalid complaint_details"){
                document.getElementById('complaint_detailsS').innerHTML = "details mandatory";
                document.getElementById('districtS').innerHTML = "";
                document.getElementById('complaint_typeS').innerHTML = "";
                document.getElementById('categoryS').innerHTML = "";
                document.getElementById('subcategoryS').innerHTML = "";
            }
            else{
                document.getElementById('resultS').innerHTML = "complaint registered successfully";
                document.getElementById('complaint_detailsS').innerHTML = "";
                document.getElementById('districtS').innerHTML = "";
                document.getElementById('complaint_typeS').innerHTML = "";
                document.getElementById('categoryS').innerHTML = "";
                document.getElementById('subcategoryS').innerHTML = "";
            }
            
        }
    }

}
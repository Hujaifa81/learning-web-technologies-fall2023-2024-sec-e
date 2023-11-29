function searchEmployees() {
    const searchInput = document.getElementById('search').value;

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const result = xhr.responseText;
            document.body.innerHTML += result;
        }
    };

    xhr.open('POST', '../controller/searchCheck.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('searchSubmit=1&search=' + searchInput);
}

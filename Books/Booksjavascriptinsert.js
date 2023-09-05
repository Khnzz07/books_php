const form = document.querySelector(' form'),
    btn = document.querySelector(' form .field #submit'),
    errroMsg = document.querySelector('form div.error');


form.onsubmit = e => e.preventDefault();


btn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const data = xhr.responseText.length;
                if (data == 9) {
                    alert("hello");
                    location.href = "index.php";
                } else {
                    errroMsg.classList.remove('hide');
                    errroMsg.textContent = xhr.response;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
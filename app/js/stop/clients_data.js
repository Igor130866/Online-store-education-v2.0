$(document).ready(function () {

    let form = document.querySelector('#data-total-amount');
    form.onclick = function (event) {
        event.preventDefault();
        fetch('total_amount.php')
            .then(response => response.text())
            .then(text => {
                    console.log(text); 
                    result.innerHTML = text;
                    }     
                );           
            }
        // .then(result => {console.log(result)});
        //.then(window.location.href = "clients_obr.php");
    });

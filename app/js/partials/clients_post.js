
let forma = document.querySelector('#post');

forma.onsubmit = function (event) {
    event.preventDefault();
    console.log(e.target);
    let formDataa = new FormData(forma);
   
    document.querySelector('.input-request').value = '';
    document.querySelector('.input-requestt').value = '';
    document.querySelector('.input-requesttt').value = '';
     
    fetch('lib_query/clients_obr.php', {
        method: 'POST',
        body: formDataa,
       // mode: 'no-cors', // same-origin, no-cors
    })
    .then(response => response.text())
    //.then(result => {console.log(result)});
    .then(result => console.log(result));
}


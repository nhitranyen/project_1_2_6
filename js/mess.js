// function onMess(event) {
//     event.preventDefault();
//     console.log(event.target.value);
//     document.querySelector('#mess').style.display='block';
// }

function offMess() {
    document.querySelector('#mess').style.display='none';
}

// const myForm = document.querySelector('#myForm');
// myForm.addEventListener("submit", function(e) { 
//     e.preventDefault();
//     console.log(e);
//     document.querySelector('#mess').style.display='block';
// })

function offMess(e) {
    document.querySelector('#mess').style.display='none';
}

document.getElementById("myForm").addEventListener("submit", function(e) {
        
    e.preventDefault();
    console.log(e);
    document.querySelector('#mess').style.display='block';
    
});
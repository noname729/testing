var hireDate = document.getElementById("hireDate").value;
var form = document.getElementById('hrData');


function display(){
    // console.log(name);
};

form.addEventListener('submit',function(event){
    var name = document.getElementById("eeName").value;
    var salary = document.getElementById("salgitary2").value;


    if (!name || !salary){
        alert("Please enter value on the fields");
    }
    else{
    console.log(name);
    event.preventDefault();
}});
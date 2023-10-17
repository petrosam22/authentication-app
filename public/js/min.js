const copyBtn = document.querySelector(".copybtn");

// console.log(copyBtn,code);


copyBtn.addEventListener('click' , function(){
    var text = document.getElementById("verify-code").innerHTML;

    var tempInput = document.createElement("input");
    tempInput.setAttribute("value", text);
    document.body.appendChild(tempInput);

    tempInput.select();
    tempInput.setSelectionRange(0, 99999);

    document.execCommand("copy");

    document.body.removeChild(tempInput);

    alert("Copied: " + text);

});



 
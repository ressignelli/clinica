function confere(){
    const pix = document.getElementById("pix").value;
    const pix2 = document.getElementById("pix2").value;

    const pixstatus = document.getElementById("pixstatus");
    if (pix===pix2){
        pixstatus.textContent = "";
    }else {
        pixstatus.textContent = "Chaves não correspondem.";
    }
}
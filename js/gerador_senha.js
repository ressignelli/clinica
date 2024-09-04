function password() {

    const chars= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"!@#%¨&_~<>,;:';

    const re = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const re2 = 'abcdefghijklmnopqrstuvwxyz';
    const re3 = '0123456789';
    const re4 = '"!@#%¨&_~<>,;:';

    let maiusc = 0;
    let minusc = 0;
    let numero = 0;
    let especial = 0;    

        let pwd = '';
        while (maiusc === 0 || minusc === 0 || numero === 0 || especial === 0){

            for (let i = 0; i < 8; i++) {
                pwd += chars[Math.floor(Math.random() * chars.length)];
            }

            maiusc = pwd.search(re);
            minusc = pwd.search(re2);
            numero = pwd.search(re3);
            especial = pwd.search(re4);

        }
        
        // var myWindow = window.open("", "MsgWindow", "width=200,height=100");
        // myWindow.document.write("<p>Anote esta senha: </p>" + pwd);
        
        const newEvent = document.getElementById('newEventModal')
        
        newEvent.style.display = 'block'
        
        document.getElementById('cancelButton').addEventListener('click',()=>closeModal())
        
        document.getElementById('msgret').innerText = pwd;

        function closeModal(){
            newEvent.style.display = 'none'
        }    

}

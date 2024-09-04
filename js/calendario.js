
function abrir_janela(){ 
        const newEvent = document.getElementById('newEventModal');
        
        newEvent.style.display = 'block';
        
        document.getElementById('cancelButton').addEventListener('click',()=>closeModal());
        
        var data = document.getElementById('dia').value;
        
        document.getElementById('msgret').innerText = data;

        function closeModal(){
            newEvent.style.display = 'none';
        }
    }
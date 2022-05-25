if(document.getElementById('lgform')){
    const frm = document.getElementById('lgform');

    if(frm){
        frm.addEventListener('submit', function(e){
            e.preventDefault();
    
            if(loginCheck(frm)){
                e.currentTarget.submit();
            }
    
        });
    }
}

if(document.getElementById('rgform')){
    const frm = document.getElementById('rgform');

    if(frm){
        frm.addEventListener('submit', function(e){
            e.preventDefault();
    
            if(checkInput(frm)){
                e.currentTarget.submit();
            }
    
        });
    }
}

function loginCheck(frm){
    
    const email = frm.elements['iemail'].value;
    const password = frm.elements['ipassword'].value;
    var errorMessage = document.getElementById('errMsg');

    if(password == '' || confpassword == '' || email == ''){
        errorMessage.innerHTML = "Introduceti toate fieldurile!";
        return 0;
    }
}

function checkInput(frm){

    const email = frm.elements['iemail'].value;
    const password = frm.elements['ipassword'].value;
    const confpassword = frm.elements['ipassword2'].value;

    var errorMessage = document.getElementById('errMsg');

    const passReg = new RegExp("^(?=.*[a-z])^(?=.*[A-Z])^(?=.{5,20})^(?=.*[0-9])");

    if(password == '' || confpassword == '' || email == ''){
        errorMessage.innerHTML = "Introduceti toate fieldurile!";
        return 0;
    }
    if(password != confpassword){
        errorMessage.innerHTML = "Parolele nu coincid!";
        return 0;
    }
    if(!passReg.test(password)){
        errorMessage.innerHTML = "Parola trebuie sa contina cel putin 1 majuscula si 1 minuscula, o cifra si sa fie mai mare de 5 caractere si mai mica de 20";
        return 0;
    }
    return 1;
}
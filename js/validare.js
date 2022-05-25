const frmLog = document.getElementById('lgform');
const frmReg = document.getElementById('rgform');

if(frmLog){
    frmLog.addEventListener('submit', function(e){
        e.preventDefault();
        if(loginCheck(frmLog)){

            const email = frmLog.elements['iemail'].value;
            const password = frmLog.elements['ipassword'].value;
            var errorMessage = document.getElementById('errMsg');

            $.ajax({
                type: "POST",
                url: "../php/login.php",
                data:{
                    "iemail": email,
                    "ipassword": password 
                },
                dataType: "html",
                success: function(rval){
                    if(rval == true){
                        errorMessage.innerHTML = 'Utilizator inexistent!';
                    }else{
                        alert('Logat cu succes!'); 
                        document.location='../homepage.php';
                    }
                }
            });
        }

    });
}

function loginCheck(frm){
    
    const email = frm.elements['iemail'].value;
    const password = frm.elements['ipassword'].value;
    var errorMessage = document.getElementById('errMsg');

    if(password == '' || email == ''){
        errorMessage.innerHTML = "Introduceti toate fieldurile!";
        return 0;
    }else{
        return 1;
    }
}

if(frmReg){
    frmReg.addEventListener('submit', function(e){
        e.preventDefault();

        if(checkInput(frmReg)){
            const email = frmReg.elements['iemail'].value;
            const password = frmReg.elements['ipassword'].value;
            var errorMessage = document.getElementById('errMsg');

            $.ajax({
                type: "POST",
                url: "../php/register.php",
                data:{
                    "iemail": email,
                    "ipassword": password 
                },
                dataType: "html",
                success: function(rval){
                    if(rval == true){
                        errorMessage.innerHTML = 'Utilizator existent!';
                    }else{
                        alert('Inregistrat cu succes');
                        document.location='../site/login_page.php';
                    }
                }
            });
        }

    });
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
document.getElementById("buton_deinceput").addEventListener("click", incepeSesiunea);
document.getElementById("buton_registru").addEventListener("click", register);
window.addEventListener("resize", iPagina);


//Log(begin)
//Declararea variabilelor
var formularlog= document.querySelector(".formular_log");
var formularregistru= document.querySelector(".formular_registru");
var continutlog_registru= document.querySelector(".continut_log_registru");
var continutspate_log= document.querySelector(".continut_spate_log");
var continutspate_registru= document.querySelector(".continut_spate_registru");

    //FUNCtii

function iPagina(){

    if (window.innerWidth > 850){
        continutspate_registru.style.display = "block";
        continutspate_log.style.display = "block";
    }else{
        continutspate_registru.style.display = "block";
        continutspate_registru.style.opacity = "1";
        continutspate_log.style.display = "none";
        formularlog.style.display = "block";
        continutlog_registru.style.left = "0px";
        formularregistru.style.display = "none";   
    }
}

iPagina();


    function incepeSesiunea(){
        if (window.innerWidth > 850){
            formularlog.style.display = "block";
            continutlog_registru.style.left = "10px";
            formularregistru.style.display = "none";
            continutspate_registru.style.opacity = "1";
            continutspate_log.style.opacity = "0";
        }else{
            formularlog.style.display = "block";
            continutlog_registru.style.left = "0px";
            formularregistru.style.display = "none";
            continutspate_registru.style.display = "block";
            continutspate_log.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            formularregistru.style.display = "block";
            continutlog_registru.style.left = "410px";
            formularlog.style.display = "none";
            continutspate_registru.style.opacity = "0";
            continutspate_log.style.opacity = "1";
        }else{
            formularregistru.style.display = "block";
            continutlog_registru.style.left = "0px";
            formularlog.style.display = "none";
            continutspate_registru.style.display = "none";
            continutspate_log.style.display = "block";
            continutspate_log.style.opacity = "1";
        }
}
//Log(end)
function kullaniciKontrol(){
    var kullanici=document.getElementById("kullaniciAdi").value;

    if(kullanici.includes("b201210045@sakarya.edu.tr")){ return true; }
    else{ return false; }
}

function sifreKontrol(){
    var sifre=document.getElementById("sifre").value;

    if(sifre.includes("b201210045")){ return true; }
    else{ return false; }
}

function login(){
    if(kullaniciKontrol()&&sifreKontrol()){ return true; }
    else{ alert("Giriş Başarısız."); return false; }
}

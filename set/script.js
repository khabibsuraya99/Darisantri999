//ambil element
const keyword = document.getElementById('keyword');
const btnCari = document.getElementById('btnCari');
const container = document.getElementById('container');

//tambahkan event ketika keyword ditulis
keyword.addEventListener ('keyup', function(){
    //buat objek ajax
    const xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function (){
        if (xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    };

    //eksekusi ajax
    xhr.open('GET','santri.php?keyword=' + keyword.value, true);
    xhr.send();
});
